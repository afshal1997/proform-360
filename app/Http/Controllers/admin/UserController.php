<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use File;

class UserController extends Controller
{
    public function __construct()
    {
        $this->title = ucwords(str_replace('-', ' ', request()->segment(2)));
    }

    public function index()
    {
        if (!in_array('viewUser', \Request::get('permission'))) {
            return redirect('admin');
        }
        $content['title'] = $this->title;
        if (request()->ajax()) {
            return datatables()->of(User::latest()->where('role_id', '<>', 1)->get())
                ->addColumn('image', function ($data) {
                    return '<img width="65" src="' . asset(!empty($data->image) ? $data->image : 'assets/admin/images/placeholder.png') . '">';
                })->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" class="delete_checkbox" value="' . $data->id . '">';
                })->addColumn('action', function ($data) {
                    return '<a data-col="1" title="Edit" href="user/edit/' . $data->id . '" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>&nbsp;<button data-col="2" data-row="' . $data->id . '" title="View" type="button" name="view" id="' . $data->id . '" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;<button data-col="3" data-row="' . $data->id . '" title="Delete" type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
                })->rawColumns(['checkbox', 'action', 'image'])->make(true);
        }
        return view('admin.' . request()->segment(2) . '.list')->with($content);
    }

    public function register()
    {
        if (!in_array('createUser', \Request::get('permission'))) {
            return redirect('admin');
        }
        $content['title'] = $this->title;
        $role = new \App\Models\Roles;
        $content['role'] = $role->getRole();
        return view('admin.users.form')->with($content);
    }

    public function edit($id)
    {
        if (auth()->user()->id == $id || in_array(auth()->user()->role_id, [1, 2])) {
            $content['title'] = $this->title;
            $content['record'] = User::findOrFail($id);
            $role = new \App\Models\Roles;
            $content['role'] = $role->getRole();
            return view('admin.users.edit')->with($content);
        } else {
            return redirect()->route('user.edit', auth()->user()->id);
        }

    }

    public function update(Request $request, $id)
    {
        if (auth()->user()->id == $id || in_array(auth()->user()->role_id, [1, 2])) {
            $this->validator($request->all())->validate();
            event(new Registered($user = $this->updated($request->all(), $id)));
            return redirect()->back()->with('success', 'Updated Successfully');
        } else {
            return redirect()->route('user.edit', auth()->user()->id);
        }
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['confirmed'],
            'phone' => ['required', 'string'],
            'about' => ['required'],
            'address' => ['required'],
            'date_of_birth' => ['required']
        ]);
    }

    protected function updated(array $data, $id)
    {
        $record = User::findOrFail($id);
        $request = request();
        if (!empty($request->file('image'))) {
            $image_path = User::where('id', $id)->first()->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $image = single_image($request->file('image'), request()->segment(2));
            $record->image = $image;
        }
        $record->role_id = $data['role_id'] ?? auth()->user()->role_id;
        $record->first_name = $data['first_name'];
        $record->last_name = $data['last_name'];
        $record->email = $data['email'];
        $record->phone = $data['phone'];
        $record->about = $data['about'];
        $record->address = $data['address'];
        $record->password = (!empty($data['password']) ? Hash::make($data['password']) : auth()->user()->password);
        $record->date_of_birth = $data['date_of_birth'];
        $record->facebook = $data['facebook'];
        $record->instagram = $data['instagram'];
        $record->twitter = $data['twitter'];
        $record->save();
        return $record;
    }

    public function view($id)
    {
        $data = User::findOrFail($id);
        return response()->json($data);
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        echo "Deleted Successfully.";
    }

    public function delete_all(Request $request)
    {
        if ($request->input('checkboxValue')) {
            $id = $request->input('checkboxValue');
            $image_path = User::where('id', $id)->first()->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            for ($i = 0; $i < count($id); $i++) {
                User::findOrFail($id[$i])->delete();
            }
            return response()->json('Selected records Deleted Successfully.');
        }
    }

}
