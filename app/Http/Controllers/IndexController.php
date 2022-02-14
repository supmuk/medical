<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function about() {
        return view('frontend.about');
    }
    
    public function contact() {
        return view('frontend.contact');
    }

    public function products() {
        return view('frontend.products');
    }
}
