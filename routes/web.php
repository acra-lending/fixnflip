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
Route::post('/apply2', 'App\Http\Controllers\FormController@submit2');

Route::get('/process', 'App\Http\Controllers\OurProcessController@index');

Route::get('/expect', 'App\Http\Controllers\ExpectationsController@index');

Route::get('/industryterms', 'App\Http\Controllers\IndustryTermsController@index');

Route::get('/ratesheets', 'App\Http\Controllers\RatesheetsController@index');

Route::get('/newfileupload', 'App\Http\Controllers\NewFileUploadController@index');

Route::get('/forms', 'App\Http\Controllers\FormsController@index');

Route::get('/contact', 'App\Http\Controllers\ContactUsController@index');
Route::post('/contact', 'App\Http\Controllers\ContactUsController@submit');

Route::get('/overview', 'App\Http\Controllers\OverviewController@index');

Route::get('/history', 'App\Http\Controllers\HistoryController@index');

Route::get('/team', 'App\Http\Controllers\TeamController@index');

Route::get('/programs', 'App\Http\Controllers\ProgramsController@index');


