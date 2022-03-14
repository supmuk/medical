<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Http\Requests\PageRequest;
use Session;

class PageController extends Controller
{
    private $page;
    public function __construct() {
        $this->page = new Page;
    }

    public function index(Request $request) {
        $page = $this->page->query();
        if (!empty($request->name)) {
            $page->orWhere('title', 'like', '%'.$request->name.'%');
        }
        $pages = $page->orderBy('id', 'desc')->paginate(PAGINATION_SIZE);
        return view('backend.page.index')->with(['pages'=>$pages, 'request'=>$request->all()]);
    }

    public function create() {
        return view('backend.page.add-edit')->with(['page'=>'']);
    }

    public function edit($id) {
        $page = $this->page->find($id);
        if(! $page) {
            Session::flash('message', 'danger|Page not found !');
            return redirect()->route('pages.index');
        } 

        return view('backend.page.add-edit')->with(['page'=>$page]);
    }

    public function save(PageRequest $request) {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        $this->page->updateOrCreate(['id'=>$request->id], $data);
        Session::flash('message', 'success|Page Added or Update Successfully !');
        return redirect()->route('pages.index');
    }
}
