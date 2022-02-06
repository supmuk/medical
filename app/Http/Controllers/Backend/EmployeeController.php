<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StandardFareChart;
use App\Http\Requests\TourProgramRequest;
use App\Http\Requests\DailyCallReportRequest;
use App\Models\StandardFareChart as StandardFareChartModel;
use App\Models\TourProgram;
use App\Models\DailyCallReport;
use Auth;

class EmployeeController extends Controller
{
    private $standardFareChart;
    private $tourProgram;
    private $dailyCallReport;
    public function __construct() {
        $this->standardFareChart = new StandardFareChartModel;
        $this->tourProgram = new TourProgram;
        $this->dailyCallReport = new DailyCallReport;
    }
    /**
     * Return All Employee
     */
    public function index() {

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
     * Tour Program
     */
    function tourProgram() {
        return view('backend.employee.tour-program');
    }

    /**
     * Save tour Program
     */
    function tourProgramSave(TourProgramRequest $request) {
        $this->tourProgram->create($request->all());
    }

    /**
     * Standard fare chart manager
     */
    function standardFareChart() {
        return view('backend.employee.standard-fare-chart');
    }

    /**
     * Save standard fare chart manager
     */
    function standardFareChartSave(StandardFareChart $request) {
        $this->standardFareChart->create($request->all());
        return view('backend.employee.standard-fare-chart');
    }
}
