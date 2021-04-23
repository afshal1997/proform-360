<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Home;
use App\Models\Homecard;

class HomeController extends Controller
{
    final public function index(): View
    {
        $homecards = Homecard::latest()->get();
        $home = Home::findOrFail(1);
        return view('front.home',compact('home','homecards'));
    }

}
