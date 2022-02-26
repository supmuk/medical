<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class IndexController extends Controller
{
    private $product;

    public function __construct() {
        $this->product = new Product;
    }

    public function home() {
        return view('frontend.home');
    }
    public function about() {
        return view('frontend.about');
    }
    
    public function contact() {
        return view('frontend.contact');
    }

    public function products() {
        $products = $this->product->paginate(12);
        return view('frontend.products')->with(['products'=>$products]);
    }
}
