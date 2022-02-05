<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\DoctorRequest;
use App\Models\Doctor;
use Session;
class DoctorController extends Controller
{
    private $doctor;
    public function __construct() {
        $this->doctor = new Doctor;
    }
    public function index() {
        $doctors = $this->doctor->paginate(1);
        return view('backend.doctor.index')->with(['doctors'=>$doctors]);
    }

    public function create() {
        return view('backend.doctor.add-edit');
    }

    public function edit($id) {
        $doctor = $this->doctor->find($id);
        if(! $doctor) {
            Session::flash('message', 'danger|Doctor not found !');
            return redirect()->route('doctor.index');
        } 
        
        return view('backend.doctor.add-edit');
    }

    public function save(DoctorRequest $request) {
        $this->doctor->create($request->all());
        Session::flash('message', 'success|Doctor Added !');
        return redirect()->route('doctor.index');
    }

    public function delete() {

    }
}
