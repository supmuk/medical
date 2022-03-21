<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FareAmount;
use App\Models\DirectAllowance;
use Session;
use Auth;

class SettingManagerController extends Controller
{
    private $fareAmount;
    private $directAllowance;
    
    public function __construct() {
        $this->fareAmount = new FareAmount;
        $this->directAllowance = new DirectAllowance;
    }

    public function index() {
        $fareAmountData = $this->fareAmount->paginate(PAGINATION_SIZE);
        return view('backend.settingmanager.index')->with(['fare_amount' => $fareAmountData]);
    }

    public function create() {
        return view('backend.settingmanager.add-edit')->with(['fare_amount'=>'']);
    }

    public function edit($id) {
        $fareAmountData = $this->fareAmount->find($id);
        return view('backend.settingmanager.add-edit')->with(['fare_amount'=>$fareAmountData]);
    }

    public function save(Request $request) {
        $data = $request->all();
        $data['created_by'] = Auth::id();
        $this->fareAmount->updateOrCreate(['id'=>$request->id], $data);
        Session::flash('message', 'success|Fare amount Update Successfully !');
        return redirect()->route('fare_amount.index');
    }

    public function directAllowanceindex() {
        $directAllowance = $this->directAllowance->paginate(PAGINATION_SIZE);
        return view('backend.settingmanager.index-da')->with(['directAllowance' => $directAllowance]);
    }

    public function directAllowanceCreate() {
        return view('backend.settingmanager.add-edit-da')->with(['directAllowanceData'=>'']);
    }

    public function directAllowanceEdit($id) {
        $directAllowanceData = $this->directAllowance->find($id);
        return view('backend.settingmanager.add-edit-da')->with(['directAllowanceData'=>$directAllowanceData]);
    }

    public function directAllowanceSave(Request $request) {
        $data = $request->all();
        $data['created_by'] = Auth::id();
        $this->directAllowance->updateOrCreate(['id'=>$request->id], $data);
        Session::flash('message', 'success|Direct Allowance amount Update Successfully !');
        return redirect()->route('fare_amount.directAllowanceindex');
    }
}
