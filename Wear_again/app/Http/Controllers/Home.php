<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

session_start();
class Home extends Controller
{
    //
    public function index(){
        $product = Product::all();
        return view('index',compact('product'));
    }

    public function about(){
        return view('about');
    }

    

    public function men(){
        $men = Product::all()->where('category_id','=',1);
        // dd($men);
        return view('men',compact('men'));
    }

    public function women(){
        $women = Product::all()->where('category_id','=',2);
        // $women_top = Product::all()->where('subcategory_id','=',1);
        return view('women',compact('women'));
    }

    public function cart(){
        $items=[];
        $items_id=$_SESSION["items"];
        foreach ($items_id as $item) {
            array_push($items, Product::find($item));
        }
        return view('cart',compact('items'));
    }

    public function checkout(){
        $user = User::find(Auth::user()->id);
        $total= request('total');
        $items=[];
        $items_id=$_SESSION["items"];
        foreach ($items_id as $item) {
            array_push($items, Product::find($item));
        }
        return view('checkout',compact('user','total','items'));
    }
   
    public function product($id){
        // $product_details = Product::all()->where('id','=',1);
        
        $product_details = DB::select('SELECT * from products where id=?;',[$id]);
        $user = User::find($product_details[0]->user_id);
        // dd($product_details[0]->image);
        return view('productD',compact('product_details','user'));
    }

    public function order(){
        // dd(Auth::user()->id);
        DB::transaction(function(){
            $newbill=Billing::create([
                'user_id' =>Auth::user()->id,
                'subtotal' => request('subtotal'),
                'phone_number' => request('phone'),
                'payment_method' => request('optradio'),
                
            ]);
        foreach ($_SESSION['items'] as $item) {
                $neworder=Order::create([
                'bill_id' =>  $newbill->id,
                'product_id' => $item,
                
            ]); 
        };
    });
    session_destroy();
        return view('order-complete');
    } 
    
    public function AddToCart($id){
    $item=[];
    if(isset($_SESSION["items"])){
        $item=$_SESSION["items"];

    }
    array_push($item, $id);
    $_SESSION["items"]=$item;
    $number=count($item);
    $_SESSION["number"]=$number;

    return redirect('productD/'.$id)->with('status','Your Product Added Successfully');

    }
}
