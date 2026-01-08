<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home() {
        return view('pages.home');
    }

    public function about() {
        return view('pages.about');
    }

    public function menu() {
    return view('pages.menu');

    }

    public function contactUs(){
        return view ('pages.contactus');
    }
}
