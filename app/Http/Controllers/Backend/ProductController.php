<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Session;
use Auth;

class ProductController extends Controller
{
    private $product;
    public function __construct() {
        $this->product = new Product;
    }
    public function index(Request $request) {
        $product = $this->product->query();

        if(!empty($request->name)) {
            $product->orWhere('name', 'like', '%'.$request->name.'%');
        }
        $products = $product->orderBy('id', 'desc')->paginate(PAGINATION_SIZE);
        return view('backend.product.index')->with(['products'=>$products, 'request'=>$request->all()]);
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
        if ($request->hasFile('file')) {
            $request->file->store('product', 'public');
        }

        // $request->request->add(['file_path'=>$request->file->hashName()]);

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'file_path' => $request->file->hashName(),
            'created_by' => Auth::id()
        ];

        $this->product->updateOrCreate(['id'=>$request->id], $data);
        Session::flash('message', 'success|Product Added or Update Successfully !');
        return redirect()->route('product.index');
    }

    public function delete(Request $request) {
        $id = $request->id ?? '';
        $this->product->findOrFail($id)->delete();

        Session::flash('message', 'success|Product deleted successfully !');
        return redirect()->route('product.index');
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
