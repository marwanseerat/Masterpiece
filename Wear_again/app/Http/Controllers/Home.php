<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function men(){
        return view('men');
    }

    public function women(){
        return view('women');
    }

    public function cart(){
        return view('cart');
    }

    public function checkout(){
        return view('checkout');
    }

    public function product(){
        return view('product-detail');
    }

    public function order(){
        return view('order-complete');
    }
}
