<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

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

        $category = new Category;
        $category->name = $request->input('name');
            $file= $request->file('image');
            $filename=$file->getClientOriginalName();
            $file-> move(public_path('images/product'), $filename);
            $category->image= $filename;

            $category->save();
            return redirect('/dashboard')->with('status','Your category Added Successfully');

    }


    public function editcate($id)
    {
        $category = Category::find($id);
        return view('admin.category.add', compact('category'));
    }

    public function updatecate(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->update();
        return redirect('/dashbaord')->back()->with('status','category Updated Successfully');
    }

//subcategory
public function subcategory(){
    $category = subcategory::all();
    return view('admin.category.subcategory', compact('category'));
}
public function addSub(){
    // $category = subcategory::all();
    $category = Category::all();
    return view('admin.category.addSub',compact('category'));
}

public function addSubcategory(Request $request){
    $subcategory = new Category;
    $subcategory->name = $request->input('name');
    $subcategory->category_id = $request->input('category');
        $subcategory->save();
        return redirect('/dashboard')->with('status','Your subcategory Added Successfully');

}

public function editSub($id)
{
    $subcategory = Subcategory::find($id) ;
    return view('editUser');
   
}

public function updateSub(Request $request,$id)
{
    $subcategory = User::find($id) ;
    $subcategory->name = $request->input('name');
    $subcategory->category_id = $request->input('category');
    $subcategory->update();
    return redirect('/dashboard')->with('status', 'Your Data Updated Successfully');

}

//user
public function user(){
    $user = User::all();
    return view('admin.category.user', compact('user'));
}

// public function editUser($id)
// {
//     $user = User::find($id) ;
//     return view('editUser');
   
// }

// public function updateUser(Request $request,$id)
// {
//     $user = User::find($id) ;
//     $user->name = $request->input('name');
//     $user->email = $request->input('email');
//     $user->address = $request->input('address');
//     $user->update();
//     return redirect('/home')->with('status', 'Your Data Updated Successfully');

// }

}