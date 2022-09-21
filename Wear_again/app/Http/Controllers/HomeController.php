<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function editUser($id)
    {
        $user = User::find($id) ;
        return view('editUser');
       
    }

    public function updateUser(Request $request,$id)
    {
        $user = User::find($id) ;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->update();
        return redirect('/home')->with('status', 'Your Data Updated Successfully');

    }

}
