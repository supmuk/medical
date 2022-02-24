<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StandardFareChart;
use App\Http\Requests\TourProgramRequest;
use App\Http\Requests\DailyCallReportRequest;
use App\Http\Requests\EmployeeRequest;
use App\Models\StandardFareChart as StandardFareChartModel;
use App\Models\TourProgram;
use App\Models\DailyCallReport;
use Auth;
use Session;
use App\Models\User;

class EmployeeController extends Controller
{
    private $standardFareChart;
    private $tourProgram;
    private $dailyCallReport;
    private $user;
    public function __construct() {
        $this->standardFareChart = new StandardFareChartModel;
        $this->tourProgram = new TourProgram;
        $this->dailyCallReport = new DailyCallReport;
        $this->user = new User;
    }
    /**
     * Return All Employee
     */
    public function index(Request $request) {
        $user = $this->user->query();
        if(!empty($request->name)) {
            $user->orWhere('name', 'like', '%'.$request->name.'%');
        }
        if(!empty($request->email)) {
            $user->orWhere('email', 'like', '%'.$request->email.'%');
        }
        $users = $user->orderBy('id', 'desc')->paginate(PAGINATION_SIZE);
        return view('backend.employee.index', ['users' => $users, 'request'=>$request->all()]);
    }

    /**
     * Edit employee details
     */
    public function edit($id) {
        $user = $this->user->findOrFail($id);
        return view('backend.employee.edit', ['user' => $user]);        
    }

    /**
     * Save user details
     */
    public function save(EmployeeRequest $request) {
        $updateArr = [];
        
        if ($request->hasFile('aadhar_card')) {
            $request->aadhar_card->store('user/addhar', 'public');
            $updateArr['aadhar_card'] = $request->aadhar_card->hashName();
        }
        if ($request->hasFile('pan_card')) {
            $request->pan_card->store('user/pan', 'public');
            $updateArr['pan_card'] = $request->pan_card->hashName();
        }
        if ($request->hasFile('driving_voter_card')) {
            $request->driving_voter_card->store('user/driving_voter_card', 'public');
            $updateArr['driving_voter_card'] = $request->driving_voter_card->hashName();
        }
        if($request->active == 'on') {
            $updateArr['is_active'] = 1;
        } else {
            $updateArr['is_active'] = 0;
        }

        $updateArr['name'] = $request->name;
        $updateArr['email'] = $request->email;
        $updateArr['phone_no'] = $request->phone_no;
        $updateArr['address'] = $request->address;
        $updateArr['designation'] = $request->designation;
        $updateArr['headquarter_name'] = $request->headquarter_name;

        User::where('id', $request->id)->update($updateArr);
        Session::flash('message', 'Employee Updated Successfully !');
        return redirect()->route('employee.index');
    }

    /**
     * show all daily report
     */
    public function dailyCallReportIndex(Request $request) {
        $dailyCallReport = $this->dailyCallReport->query();
        $dailyCallReport = $dailyCallReport->orderBy('id', 'desc')->paginate(PAGINATION_SIZE);
        return view('backend.employee.daily-call-report-index')->with(['dailyCallReports'=>$dailyCallReport]);
    }

    /**
     * Daily Call Report
     */
    public function dailyCallReport() {
        return view('backend.employee.daily-call-report');
    }

    /**
     * Save Daily Call Report
     */
    public function dailyCallReportSave(DailyCallReportRequest $request) {
        $this->dailyCallReport->create($request->all());
        return view('backend.employee.daily-call-report');
    }

    /**
     * 
     */
    public function tourProgramIndex(Request $request) {
        $tourProgram = $this->tourProgram->query();
        $tourProgram = $tourProgram->orderBy('id', 'desc')->paginate(PAGINATION_SIZE);
        return view('backend.employee.tour-program-index')->with(['tourProgram'=>$tourProgram]);
    }

    /**
     * Tour Program
     */
    function tourProgram($id = null) {
        $tour = [];
        if($id != null && is_numeric($id)) {
            $tour = $this->tourProgram->findOrFail($id);    
        }
        return view('backend.employee.tour-program')->with(['tour'=>$tour]);
    }

    /**
     * Save tour Program
     */
    function tourProgramSave(TourProgramRequest $request) {
        $data = [];

        $working_with           = implode(',', $request->working_with);
        $data['working_with']   = $working_with;
        $data['date_of_tour']   = $request->date_of_tour;
        $data['place']          = $request->place;
        $data['user_id']        = $request->user_id;

        $this->tourProgram->create($data);
        Session::flash('message', 'success|Tour Program Added or Update Successfully !');
        return redirect()->route('employee.tour-program-index');
    }

    /**
     * Standard fare chart manager list
     */
    public function standardFareChartIndex() {
        $standardFareCharts = $this->standardFareChart->orderBy('id', 'desc')->paginate(PAGINATION_SIZE);
        return view('backend.employee.standard-fare-chart-index')->with(['standardFareCharts'=>$standardFareCharts]);
    }

    /**
     * Standard fare chart manager form
     */
    function standardFareChart() {
        return view('backend.employee.standard-fare-chart')->with(['standardFare' => '']);
    }

    /**
     * Standard fare chart manager edit form
     */
    function standardFareChartEdit($id) {
        $standardFare = $this->standardFareChart->find($id);
        if(! $standardFare) {
            Session::flash('message', 'danger|Standard Fare Chart not found !');
            return redirect()->route('employee.standard-fare-chart-index');
        } 
        return view('backend.employee.standard-fare-chart')->with(['standardFare' => $standardFare]);
    }

    /**
     * Save standard fare chart manager save and update
     */
    function standardFareChartSave(StandardFareChart $request) {
        $this->standardFareChart->updateOrCreate(['id'=>$request->id],$request->all());
        Session::flash('message', 'success|Standard Fare Chart Added Or Update Successfully !');
        return redirect()->route('employee.standard-fare-chart-index');
    }

    public function verifiedRegisteredEmployee(Request $request) {
        $users = $this->user->query();
        if(!empty($request->term)) {
            $users = $users->whereLike('name', $request->term);
        }
        $users = $users->where(['is_admin'=> '0', 'is_active'=>1])->select('id', 'name')->get();
        return response()->json($users);
    }
}
