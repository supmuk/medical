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
        $chemists = $this->chemist->paginate(1);
        return view('backend.chemist.index')->with(['chemists'=>$chemists]);
    }

    public function create() {
        return view('backend.chemist.add-edit');
    }

    public function edit($id) {
        // $doctor = $this->doctor->find($id);
        // if(! $doctor) {
        //     Session::flash('message', 'danger|Doctor not found !');
        //     return redirect()->route('doctor.index');
        // } 
        
        // return view('backend.doctor.add-edit');
    }

    public function save(ChemistRequest $request) {
        // dd($request->all());
        $this->chemist->create($request->all());
        Session::flash('message', 'success|Chemist Added !');
        return redirect()->route('chemist.index');
    }

    public function delete() {

    }
}
