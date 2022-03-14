<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Page;
use Mail;

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
        $content = $this->page->whereSlug('about')->first();
        $products = $this->product->orderBy('id', 'desc')->limit(5)->get();
        return view('frontend.about')->with(['content' => $content, 'products'=>$products]);
    }
    
    public function contact(Request $request) {
        return view('frontend.contact');
    }

    public function contactPost(Request $request) {
        // dd(var_dump($request->message));
        Mail::send('email.contact', [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message1' => $request->message 
        ],
            function ($message) use ($request){
                    $message->from($request->email);
                    $message->to(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
                            ->subject('Contact Form');
    });
        return back()->with('success', 'Thanks for contacting us, We will get back to you soon!');
        // return redirect()->route('contact');
    }

    public function products() {
        $products = $this->product->paginate(12);
        return view('frontend.products')->with(['products'=>$products]);
    }

    public function privacyPolicy() {
        $content = $this->page->whereSlug('privacy-policy')->first();
        return view('frontend.privacy-ploicy')->with(['content' => $content]);
    }

    public function termCondition() {
        $content = $this->page->whereSlug('term-condition')->first();
        return view('frontend.term-condition')->with(['content' => $content]);
    }
}
