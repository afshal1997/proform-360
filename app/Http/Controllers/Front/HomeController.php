<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Home;
use App\Models\Homecard;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    final public function index(): View
    {
        $homecards = Homecard::latest()->get();
        $home = Home::findOrFail(1);
        return view('front.home',compact('home','homecards'));
    }
    
    final public function contactForm(Request $request)
    {
        $result = \App\Models\Contact::create($request->all());
        if ($result) {
            return response()->json(['msg' => 'We have recieved your message. We will get back to you shortly.']);
        }
        dd($request->all());
    }

}
