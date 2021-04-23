<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Home;
use File;

class HomeController extends Controller
{
    public function index()
    {
        if (!in_array('updateHome',\Request::get('permission'))) {
            return redirect('admin');
        }
        $content['record'] = Home::findOrFail(1);
        $content['title'] = 'Website Home';
        return view('admin.home.form',$content);
    }

    public function update(Request $request) {
        if ($request->input()) {
            if ($request->input('_token')) {
                $request->request->remove('_token');
            }
            $record = Home::find(1);
            foreach ($request->input() as $key => $value) {
                $record->$key = $value;
            }
            $record->status = '1';
            $record->created_by = \Auth::user()->id;

            if (!empty($request->file('banner'))) {
                $image_path = Home::where('id',1)->first()->banner;
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
                $image = single_image($request->file('banner'),request()->segment(2));
                $record->banner = $image;
            }
            if (!empty($request->file('section_image'))) {
                $image_path = Home::where('id',1)->first()->section_image;
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
                $image = single_image($request->file('section_image'),request()->segment(2));
                $record->section_image = $image;
            }

            $record->save();
            return back()->with('success','Home Updated Successfully.');
        }
    }
}
