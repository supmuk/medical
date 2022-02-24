<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PlaceOfWorking;
use App\Http\Requests\PlaceOfWorking as placeRequest;
use Session;

class placeOfWorkingController extends Controller
{
    private $placeOfWorking;
    public function __construct() {
        $this->placeOfWorking = new PlaceOfWorking();
    }

    public function index(Request $request) {
        $placeOfWorking = $this->placeOfWorking->query();

        if(!empty($request->name)) {
            $placeOfWorking->orWhere('name', 'like', '%'.$request->name.'%');
        }
        $placeOfWorking = $placeOfWorking->orderBy('id', 'desc')->paginate(PAGINATION_SIZE);
        return view('backend.placeofworking.index')->with(['placeOfWorking'=>$placeOfWorking, 'request'=>$request->all()]);
    }
    
    public function create(Request $request) {
        return view('backend.placeofworking.add-edit');
    }

    public function edit($id) {
        $placeOfWorking = $this->placeOfWorking->find($id);
        if(! $placeOfWorking) {
            Session::flash('message', 'danger|Place not found !');
            return redirect()->route('place-of-working.index');
        } 
        
        return view('backend.placeofworking.add-edit')->with(['placeOfWorking' => $placeOfWorking]);
    }

    public function save(placeRequest $request) {
        // Create
        $data = [];
        if( $request->has('is_active') ) {
            $data['is_active'] = 1;
        }
        $data['name'] = $request->name;
        
        $this->placeOfWorking->updateOrCreate([
            'id' => $request->id
        ],$data);

        Session::flash('message', 'success|Place Added Or Update Successfully !');
        return redirect()->route('place-of-working.index');
    }

    /**
     * List of place
     */
    public function listOfPlace(Request $request) {
        $placeOfWorkings = $this->placeOfWorking->query();
        if(!empty($request->term)) {
            $placeOfWorkings = $placeOfWorkings->whereLike('name', $request->term);
        }
        $placeOfWorkings = $placeOfWorkings->where('is_active', '1')->select('id', 'name')->get();
        return response()->json($placeOfWorkings);
    }
}
