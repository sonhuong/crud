<?php

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
use App\Category;
Route::get('/', function () {
    return view('welcome');
});
Route::resource('passports', 'PassportController');
Route::group(['prefix' => 'admin'], function(){
    Route::resource('passports', 'PassportController');
    Route::resource('products', 'ProductController');
    Route::resource('categories', 'CategoryController');
});
Route::get('dangnhap', 'UserController@getDangnhap');
Route::post('dangnhap', 'UserController@postDangnhap');



