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
    public function index() {
        $chemists = $this->chemist->orderBy('id', 'desc')->paginate(PAGINATION_SIZE);
        return view('backend.chemist.index')->with(['chemists'=>$chemists]);
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
}
