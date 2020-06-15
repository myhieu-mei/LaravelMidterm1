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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/tour/create', "Admin\TourController@create");
Route::post('/admin/tours', "Admin\TourController@store");
Route::get('/admin/tours', "Admin\TourController@index");
 Route::get('/home', "User\HomeController@index");
