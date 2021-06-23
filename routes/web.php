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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/apply', 'App\Http\Controllers\FormController@index');
Route::post('/apply', 'App\Http\Controllers\FormController@submit');

Route::get('/process', 'App\Http\Controllers\OurProcessController@index');
Route::get('/expect', 'App\Http\Controllers\ExpectationsController@index');
