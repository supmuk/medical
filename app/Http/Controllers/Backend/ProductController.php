<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Session;

class ProductController extends Controller
{
    private $product;
    public function __construct() {
        $this->product = new Product;
    }
    public function index() {
        $products = $this->product->paginate(PAGINATION_SIZE);
        return view('backend.product.index')->with(['products'=>$products]);
    }

    public function create() {
        return view('backend.product.add-edit')->with(['product'=>'']);
    }

    public function edit($id) {
        $product = $this->product->find($id);
        if(! $product) {
            Session::flash('message', 'danger|Doctor not found !');
            return redirect()->route('doctor.index');
        } 
        
        return view('backend.product.add-edit')->with(['product'=>$product]);
    }

    public function save(ProductRequest $request) {
        $this->product->updateOrCreate(['id'=>$request->id], $request->all());
        Session::flash('message', 'success|Product Added or Update Successfully !');
        return redirect()->route('product.index');
    }

    public function delete() {

    }

    /**
     * @return json
     */
    public function listOfProduct(Request $request) {
        $products = $this->product->query();
        if(!empty($request->term)) {
            $products = $products->whereLike('name', $request->term);
        }
        $products = $products->select('id', 'name')->get();
        return response()->json($products);
    }
}
