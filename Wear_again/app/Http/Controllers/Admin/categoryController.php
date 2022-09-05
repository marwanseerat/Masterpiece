<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $category_id;

    public function index(){
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }

    public function add(){
        $category = Category::all();
        return view('admin.category.add', compact('category'));
    }

    public function insert(Request $request){

    if($this->category_id){
        $scategory = new Subcategory();
        $scategory->name = $this->name;
        $scategory->category_id = $this->category_id;
        $scategory->save();
    }

    else{

        $category = new Category();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext ;
            $file->move('asset'.$filename);
            $category->image = $filename;
        }


        $category->name = $request->input('name');
        $category->save();
    }
        return redirect('/dashboard')->with('status'," Category added Successfully");

    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id){
        $category = Category::find($id);
       if($request->hasFile('image')){
        $path = 'asset'.$category->image;
        if(File::exists($path)){

            File::delete($path);
        }
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext ;
        $file->move('asset'.$filename);
        $category->image = $filename;

       }
       $category->name = $request->input('name');
       $category->update();
       return redirect('/dashboard')->with('status'," Category updated Successfully");
    }
    
}
