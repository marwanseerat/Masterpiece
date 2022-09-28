<?php

use App\Http\Controllers\Home;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\RouteGroup;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[Home::class, 'index']);
Route::get('/about',[Home::class, 'about']);
Route::get('/contact',[contactController::class, 'contact']);
Route::post('/create',[contactController::class, 'insert']);
Route::get('/men',[Home::class, 'men']);
Route::get('/women',[Home::class, 'women']);
Route::get('/cart',[Home::class, 'cart']);
Route::post('/checkout',[Home::class, 'checkout']);
Route::get('productD/{product_id}',[Home::class, 'product']);
Route::post('/order',[Home::class, 'order']);
Route::get('/addToCart/{id}',[Home::class, 'AddToCart']);



Route::get('edit/{id}', [HomeController::class, 'editUser']);
Route::put('update/{id}', [HomeController::class, 'updateUser']);

//productRout
Route::controller(App\Http\Controllers\productController::class)->group(function (){
Route::get('/product' , 'index');
Route::post('/product' , 'store');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::group(['middleware' => ['auth','isAdmin']], function () {

    Route::get('/dashboard','App\Http\Controllers\Admin\FrontendController@index' );
    Route::get('categories',[categoryController::class, 'index'] );
    Route::get(' add category',[categoryController::class, 'add'] );
    Route::post(' insert-category',[categoryController::class, 'insert'] );
    Route::get(' edit-cate/{id}',[categoryController::class, 'editcate'] );
    Route::put( 'update-cate/{id}',[categoryController::class, 'updatecate'] );

    //subcategory
    Route::get('subcategories',[categoryController::class, 'subcategory'] );
    Route::get(' add_subcategory',[categoryController::class, 'addSub'] );
    Route::post('  insert_subcategory',[categoryController::class, 'addSubcategory'] );
    Route::get(' edit_subcate/{id}',[categoryController::class, 'editSub'] );
    Route::put('update_sub/{id}', [categoryController::class, 'updateSub']);






    //user
    Route::get('user',[categoryController::class, 'user'] );
    // Route::get('edit/{id}', [categoryController::class, 'editUser']);
    // Route::put('update/{id}', [categoryController::class, 'updateUser']);

  
 });