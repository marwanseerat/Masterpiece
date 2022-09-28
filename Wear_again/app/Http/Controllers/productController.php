<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductFormRequest;

class productController extends Controller
{
    public function index(){
        $category = Category:: all();
        $subcategory = Subcategory:: all();
        return view('insert',compact('category','subcategory'));
    }

    public function store(Request $request){

        $request->all();
        $this->validate($request,[
           'name'=>'required',
           'description'=>'required',
           'price'=>'required',
           'condition'=>'required',
           'subcategory'=>'required',
           'category'=>'required',
           'image'=>'required',
        ]);

// dd('marwa');

$product = new Product;

        // $name = request('name');
        // $description = request('description');
        // $condition = request('condition');
        // $price = request('price');
        // $subcategory = request('subcategory');
        // $category = request('category');

        $product-> user_id=Auth::user()->id;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->condition = $request->input('condition');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category');
        $product->subcategory_id = $request->input('subcategory');
        $product->size = $request->input('size');


        
       

            $file= $request->file('image');
            $filename=$file->getClientOriginalName();
            $file-> move(public_path('images/product'), $filename);
            $product->image= $filename;

            $product->save();
            return redirect('/product')->with('status','Your product Added Successfully');



    }
}
