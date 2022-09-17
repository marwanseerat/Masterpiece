<?php

use App\Http\Controllers\Home;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\HomeController;



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
Route::get('/checkout',[Home::class, 'checkout']);
Route::get('/product',[Home::class, 'product']);
Route::get('/order',[Home::class, 'order']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth','isAdmin']], function () {

    Route::get('/dashboard','App\Http\Controllers\Admin\FrontendController@index' );
    Route::get('categories',[categoryController::class, 'index'] );
    Route::get(' add category',[categoryController::class, 'add'] );
    Route::post(' insert-category',[categoryController::class, 'insert'] );
    Route::get(' edit-cate/{id}',[categoryController::class, 'edit'] );
    Route::put( 'update-cate/{id}',[categoryController::class, 'update'] );

 
  
 });