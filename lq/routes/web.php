<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/well', function () {
    return view('welcome');
});
Route::get('/',function (){
    return view('homepage');
});
Route::get('/cart',function (){
    return view('example.cart');
});
Route::get('/products',function (){
    return view('example.products');
});