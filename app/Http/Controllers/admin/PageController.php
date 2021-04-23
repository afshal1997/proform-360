<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use File;

class PageController extends Controller
{
    public function index()
    {
        if (!in_array('viewPage', \Request::get('permission'), true)) {
            return redirect('admin');
        }
        $content['title'] = ucwords(str_replace('-', ' ', request()->segment(2)));
        if (request()->ajax()) {
            return datatables()->of(Page::latest()->get())
                ->addColumn('image', function ($data) {
                    return '<img width="65" src="' . asset(!empty($data->image) ? $data->image : 'assets/admin/images/placeholder.png') . '">';
                })->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" class="delete_checkbox flat" value="' . $data['id'] . '">';
                })->addColumn('action', function ($data) {
                    return '<a title="Edit" href="' . request()->segment(2) . '/form/edit/' . $data['id'] . '" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>&nbsp;<a title="Duplicate" href="' . request()->segment(2) . '/form/duplicate/' . $data['id'] . '" class="btn btn-success btn-sm"><i class="fa fa-square-o"></i></a>&nbsp;<a title="View" href="' .route('page.index',$data['slug']). '" target="_blank" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></a>&nbsp;<button title="Delete" type="button" name="delete" id="' . $data['id'] . '" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
                })->rawColumns(['checkbox', 'action', 'image'])->make(true);
        }
        return view('admin.' . request()->segment(2) . '.list')->with($content);
    }

    public function form(Request $request, $form_choice = "", $id = "")
    {
        if (!in_array('createPage', \Request::get('permission'))) {
            return redirect('admin');
        }
        if ($request->input()) {
            if ($form_choice == 'add' || $form_choice == 'duplicate') {
                $request->validate([
                    'title' => 'required|unique:pages',
                ]);
            }
            if ($request->input('_token')) {
                $request->request->remove('_token');
            }
            $record = ($form_choice == 'edit') ? Page::find($id) : new Page;
            foreach ($request->input() as $key => $value) {
                $record->$key = $value;
            }
            $record->created_by = \Auth::user()->id;
            $record->status = 1;
            if (!empty($request->file('image'))) {
                if ($form_choice == 'edit') {
                    $image_path = Page::where('id', $id)->first()->image;
                    if (File::exists($image_path)) {
                        File::delete($image_path);
                    }
                }
                $image = single_image($request->file('image'), request()->segment(2));
                $record->image = $image;
            }
            $record->save();
            if ($form_choice == 'edit') {
                return redirect('admin/' . request()->segment(2))->with('success', 'Updated Successfully.');
            } else if ($form_choice == 'add' || $form_choice == 'duplicate') {
                return redirect('admin/' . request()->segment(2))->with('success', 'Added Successfully.');
            }
        } else {
            $view = request()->segment(2) . '.form';
            if ($form_choice == 'edit' || $form_choice == 'duplicate') {
                $content['record'] = Page::findOrFail($id);
            }
            $content['title'] = ucwords(str_replace('-', ' ', request()->segment(2)) . ' ' . $form_choice);
            return view('admin.' . $view)->with($content);
        }
    }

    final public function destroy(int $id): void
    {
        $data = Page::findOrFail($id);
        $data->delete();
        echo "Deleted Successfully.";
    }

    final public function delete_all(Request $request)
    {
        if ($request->input('checkboxValue')) {
            $id = $request->input('checkboxValue');
            $count = count($id);
            for ($i = 0; $i < $count; $i++) {
                Page::findorFail($id[$i])->delete();
            }
            return response()->json('Selected records Deleted Successfully.');
        }
    }
}
