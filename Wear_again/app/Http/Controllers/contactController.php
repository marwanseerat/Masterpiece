<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class contactController extends Controller
{
 


    public function contact(){
        return view('contact');
    }

    public function insert(Request $request){
        $contact = new Contact;
        $contact->first_name = $request->input('fname');
        $contact->last_name = $request->input('lname');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();
        return redirect()->back()->with('status','Your Messages Added Successfully');

        }
}
