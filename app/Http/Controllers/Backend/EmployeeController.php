<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StandardFareChart;
use App\Http\Requests\TourProgramRequest;
use App\Http\Requests\DailyCallReportRequest;
use App\Http\Requests\EmployeeRequest;
use App\Http\Requests\EditProfileRequest;
use App\Models\StandardFareChart as StandardFareChartModel;
use App\Models\TourProgram;
use App\Models\DailyCallReport;
use Auth;
use Session;
use App\Models\{User, FareAmount, DirectAllowance};
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class EmployeeController extends Controller
{
    private $standardFareChart;
    private $tourProgram;
    private $dailyCallReport;
    private $user;
    private $fareAmount;
    private $directAllowance;

    public function __construct() {
        $this->standardFareChart = new StandardFareChartModel;
        $this->tourProgram = new TourProgram;
        $this->dailyCallReport = new DailyCallReport;
        $this->user = new User;
        $this->fareAmount = new FareAmount;
        $this->directAllowance = new DirectAllowance;
    }

    public function getAllDirectAllowance() {
        return $this->directAllowance->first();
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
        $user = $this->user->with('roles')->findOrFail($id);
        $roles = Role::get();
        // dd($user->getAllPermissions()->toArray());
        return view('backend.employee.edit', ['user' => $user, 'roles' => $roles]);        
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

        $user = User::where('id', $request->id)->update($updateArr);
        $user = User::find($request->id);
        
        // Assigning Roles
        $user->syncRoles($request->roles);

        // Sending Mail

        Session::flash('message', 'success|Employee Updated Successfully !');
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
    public function dailyCallReport($id = null) {
        $dailyReport = [];
        if( !is_null($id) && is_numeric($id) ) {
            $dailyReport = $this->dailyCallReport->findOrFail($id);
        }
        return view('backend.employee.daily-call-report')->with(['dailyReport'=>$dailyReport, 'directAllowance' => $this->getAllDirectAllowance()]);
    }

    /**
     * Save Daily Call Report
     */
    public function dailyCallReportSave(DailyCallReportRequest $request) {
        
        $data = [];
        $data['user_id']                = $request->user_id;
        $data['pob']                    = $request->pob;
        
        $data['place_of_working']       = implode(',', $request->place_of_working);
        $data['headquarter_name']       = implode(',', $request->headquarter_name);
        $data['working_with']           = implode(',', $request->working_with);
        $data['visited_doctor_name']    = implode(',', $request->visited_doctor_name);
        $data['visited_chemist_name']   = implode(',', $request->visited_chemist_name);
        $data['product']                = implode(',', $request->product);
        $data['created_by']             = Auth::id();
        $data['direct_allowance']       = $request->direct_allowance;

        $this->dailyCallReport->updateOrCreate([
            'id' => $request->id
        ],$data);
        // return view('backend.employee.daily-call-report-index')->with([]);
        Session::flash('message', 'success|Daily Call Report Added Or Update Successfully !');
        return redirect()->route('employee.daily-call-report-index');
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
        // $data['place']          = $request->place;
        $data['user_id']        = $request->user_id;
        $data['created_by']     = Auth::id();
        $data['place']          = implode(',', $request->place);

        $this->tourProgram->updateOrCreate([
            'id' => $request->id
        ],$data);
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
        $fareAmount = $this->fareAmount->value('amount');
        return view('backend.employee.standard-fare-chart')->with(['standardFare' => '', 'fareAmount' => '']);
    }

    /**
     * Standard fare chart manager edit form
     */
    function standardFareChartEdit($id) {
        $standardFare = $this->standardFareChart->find($id);
        $fareAmount = $this->fareAmount->value('amount');

        if(! $standardFare) {
            Session::flash('message', 'danger|Standard Fare Chart not found !');
            return redirect()->route('employee.standard-fare-chart-index');
        } 
        return view('backend.employee.standard-fare-chart')->with(['standardFare' => $standardFare, 'fareAmount' => $fareAmount]);
    }

    /**
     * Save standard fare chart manager save and update
     */
    function standardFareChartSave(StandardFareChart $request) {
        
        $data                   = $request->all();
        $data['created_by']     = Auth::id();
        
        $this->standardFareChart->updateOrCreate(['id'=>$request->id],$data);
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

    public function editProfile(Request $request) {
        return view('backend.employee.edit-profile')->with(['auth_user' => auth()->user()]);
    }

    public function editProfileSave(EditProfileRequest $request) {
        $this->user->where('id', $request->id)->update($request->except(['_token']));
        Session::flash('message', 'success|Update Successfully !');
        return redirect()->route('edit-profile');
    }

    public function employeeDelete(Request $request) {

        $id = $request->id ?? '';
        $this->user->findOrFail($id)->delete();

        Session::flash('message', 'success|User deleted successfully !');
        return redirect()->route('employee.index');
    }

    public function dailyCallReportDelete(Request $request) {
        
        $id = $request->id ?? '';
        $this->dailyCallReport->findOrFail($id)->delete();

        Session::flash('message', 'success|Daily call report deleted successfully !');
        return redirect()->route('employee.daily-call-report-index');
    }

    public function tourProgramDelete(Request $request) {
        $id = $request->id ?? '';
        $this->tourProgram->findOrFail($id)->delete();

        Session::flash('message', 'success|Tour program deleted successfully !');
        return redirect()->route('employee.tour-program-index');
    }

    public function standardFareChartDelete(Request $request) {
        $id = $request->id ?? '';
        $this->standardFareChart->findOrFail($id)->delete();

        Session::flash('message', 'success|Standard fare chart deleted successfully !');
        return redirect()->route('employee.standard-fare-chart-index');
    }
}
