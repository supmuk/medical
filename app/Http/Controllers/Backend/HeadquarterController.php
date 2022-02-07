<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Headquarter;
use App\Http\Requests\HeadquarterRequest;
use Session;

class HeadquarterController extends Controller
{
    private $headquarter;
    public function __construct() {
        $this->headquarter = new Headquarter;
    }
    public function index() {
        $headquarters = $this->headquarter->orderBy('id', 'desc')->paginate(1);
        return view('backend.headquarter.index')->with(['headquarters'=>$headquarters]);
    }

    public function create() {
        return view('backend.headquarter.add-edit');
    }

    public function edit($id) {
        $headquarter = $this->headquarter->find($id);
        if(! $headquarter) {
            Session::flash('message', 'danger|Headquarter not found !');
            return redirect()->route('headquarter.index');
        } 
        
        return view('backend.headquarter.add-edit')->with(['headquarter' => $headquarter]);
    }

    public function save(HeadquarterRequest $request) {
        
        // Create
        $data = [];
        if( $request->has('is_active') ) {
            $data['is_active'] = 1;
        }
        $data['name'] = $request->name;
        
        $this->headquarter->create($data);

        Session::flash('message', 'success|Headquarter Added !');
        return redirect()->route('headquarter.index');
    }

    public function delete() {

    }
}
