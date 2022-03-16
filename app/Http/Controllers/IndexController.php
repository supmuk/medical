<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Page;
use Mail;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Chemist;
use Carbon\Carbon;
use DB;

class IndexController extends Controller
{
    private $product;
    private $page;

    public function __construct() {
        $this->product = new Product;
        $this->page = new Page;

        $this->doctor = new Doctor;
        $this->user = new User;
        $this->chemist = new Chemist;
    }

    public function dashboard() {
        // User
        $users = $this->user->select(DB::raw("DATE(created_at) as date"),DB::raw("COUNT(id) as total_count"))
        ->groupBy(DB::raw("DATE(created_at)"))->get();
        $user[] = ['Year','Count'];
        
        foreach($users as $key => $value) {
            $user[++$key] = [$value->date, (int)$value->total_count];
        }

        // Doctor
        $doctors = $this->doctor->select(DB::raw("DATE(created_at) as date"),DB::raw("COUNT(id) as total_count"))
        ->groupBy(DB::raw("DATE(created_at)"))->get();
        $doctor[] = ['Year','Count'];
        
        foreach($doctors as $key => $value) {
            $doctor[++$key] = [$value->date, (int)$value->total_count];
        }
        
        // Chemist
        $chemists = $this->chemist->select(DB::raw("DATE(created_at) as date"),DB::raw("COUNT(id) as total_count"))
        ->groupBy(DB::raw("DATE(created_at)"))->get();
        $chemist[] = ['Year','Count'];
        
        foreach($chemists as $key => $value) {
            $chemist[++$key] = [$value->date, (int)$value->total_count];
        }

        return view('backend.dashboard.index')->with(['user' => json_encode($user), 'doctor' => json_encode($doctor), 'chemist' => json_encode($chemist)]);
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
