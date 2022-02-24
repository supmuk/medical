<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chemist;
use App\Http\Requests\ChemistRequest;
use Session;
class ChemistController extends Controller
{
    private $chemist;
    public function __construct() {
        $this->chemist = new Chemist;
    }
    public function index(Request $request) {

        $chemist = $this->chemist->query();

        if(!empty($request->name)) {
            $chemist->orWhere('name', 'like', '%'.$request->name.'%');
        }
        if(!empty($request->email)) {
            $chemist->orWhere('email', 'like', '%'.$request->email.'%');
        }
        if(!empty($request->mob)) {
            $chemist->orWhere('mob', 'like', '%'.$request->mob.'%');
        }
        
        $chemists = $chemist->orderBy('id', 'desc')->paginate(PAGINATION_SIZE);
        return view('backend.chemist.index')->with(['chemists'=>$chemists, 'request'=>$request->all()]);
    }

    public function create() {
        return view('backend.chemist.add-edit')->with(['chemist'=>'']);
    }

    public function edit($id) {
        $chemist = $this->chemist->find($id);
        if(! $chemist) {
            Session::flash('message', 'danger|Chemist not found !');
            return redirect()->route('doctor.index');
        } 
        
        return view('backend.chemist.add-edit')->with(['chemist'=>$chemist]);
    }

    public function save(ChemistRequest $request) {
        $data = [];
        $product = implode(',', $request->product);
        $data = $request->except('product');
        $data['product'] = $product;
        $this->chemist->updateOrCreate(['id'=>$request->id], $data);
        Session::flash('message', 'success|Chemist Added or Updated Successfully !');
        return redirect()->route('chemist.index');
    }

    public function delete() {

    }

    public function chemistList(Request $request) {
        $chemists = $this->chemist->query();
        if(!empty($request->term)) {
            $chemists = $chemists->whereLike('name', $request->term);
        }
        $chemists = $chemists->select('id', 'name')->get();
        return response()->json($chemists);
    }
}
