<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\DoctorRequest;
use App\Models\Doctor;
use App\Models\DailyCallReport;
use Session;
use Auth;
class DoctorController extends Controller
{
    private $doctor;
    private $dailyCallReport;
    public function __construct() {
        $this->doctor = new Doctor;
        $this->dailyCallReport = new DailyCallReport;
    }
    public function index(Request $request) {

        $doctor = $this->doctor->query();

        if(!empty($request->name)) {
            $doctor->orWhere('name', 'like', '%'.$request->name.'%');
        }
        if(!empty($request->email)) {
            $doctor->orWhere('email', 'like', '%'.$request->email.'%');
        }
        if(!empty($request->mob)) {
            $doctor->orWhere('mob', 'like', '%'.$request->mob.'%');
        }
        $doctors = $doctor->whereIn('created_by', cureentUserChildren())->orderBy('id', 'desc')->paginate(PAGINATION_SIZE);
        return view('backend.doctor.index')->with(['doctors'=>$doctors, 'request'=>$request->all()]);
    }

    public function create() {
        return view('backend.doctor.add-edit')->with(['doctor'=>'']);
    }

    public function edit($id) {
        $doctor = $this->doctor->find($id);
        if(! $doctor) {
            Session::flash('message', 'danger|Doctor not found !');
            return redirect()->route('doctor.index');
        } 
        
        return view('backend.doctor.add-edit')->with(['doctor'=>$doctor]);
    }

    public function save(DoctorRequest $request) {
        $data = $request->all();
        $data['created_by'] = Auth::id();
        $this->doctor->updateOrCreate(['id'=>$request->id], $data);
        Session::flash('message', 'success|Doctor Added or Update Successfully !');
        return redirect()->route('doctor.index');
    }

    public function delete(Request $request) {

        $id = $request->id ?? '';
        $this->doctor->findOrFail($id);

        $doctorExists = $this->dailyCallReport->doctorExists($id);
        if($doctorExists) {
            Session::flash('message', 'danger|Doctor assigned to daily report ! Please remove then try');
            return redirect()->route('doctor.index');
        }
        else {
            $this->doctor->findOrFail($id)->delete();
            Session::flash('message', 'success|Doctor deleted successfully !');
            return redirect()->route('doctor.index');
        }
    }

    public function doctorList(Request $request) {
        $doctors = $this->doctor->query();
        if(!empty($request->term)) {
            $doctors = $doctors->whereLike('name', $request->term);
        }
        $doctors = $doctors->select('id', 'name')->get();
        return response()->json($doctors);
    }
}
