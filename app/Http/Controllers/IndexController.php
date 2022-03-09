<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Page;

class IndexController extends Controller
{
    private $product;
    private $page;

    public function __construct() {
        $this->product = new Product;
        $this->page = new Page;
    }

    public function home() {
        $products = $this->product->orderBy('id', 'desc')->limit(5)->get();
        return view('frontend.home')->with(['products'=>$products]);
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

    public function privacyPolicy() {
        $content = $this->page->whereSlug('privacy-policy')->first();
        // dd($content);
        return view('frontend.privacy-ploicy')->with(['content' => $content]);
    }

    public function termCondition() {
        return view('frontend.term-condition');        
    }
}
