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
    public function index(Request $request) {
        $headquarter = $this->headquarter->query();

        if(!empty($request->name)) {
            $headquarter->orWhere('name', 'like', '%'.$request->name.'%');
        }
        $headquarters = $headquarter->orderBy('id', 'desc')->paginate(PAGINATION_SIZE);
        return view('backend.headquarter.index')->with(['headquarters'=>$headquarters, 'request'=>$request->all()]);
    }

    public function create(Request $request) {

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
        
        $this->headquarter->updateOrCreate([
            'id' => $request->id
        ],$data);

        Session::flash('message', 'success|Headquarter Added Or Update Successfully !');
        return redirect()->route('headquarter.index');
    }

    public function delete(Request $request) {
        $id = $request->id ?? '';
        $this->headquarter->findOrFail($id)->delete();

        Session::flash('message', 'success|Headquarter deleted successfully !');
        return redirect()->route('headquarter.index');
    }

    /**
     * List of headquarter
     */
    public function listOfHeadquarter(Request $request) {
        $products = $this->headquarter->query();
        if(!empty($request->term)) {
            $products = $products->whereLike('name', $request->term);
        }
        $products = $products->where('is_active', '1')->select('id', 'name')->get();
        return response()->json($products);
    }
}
