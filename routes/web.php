<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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


Route::get('/', function(){
    return view('welcome');
});

Route::get('/', 'HomeController@index');

Route::get('/about', 'AboutController@index');

Route::get('/about', 'AboutController@index');

Route::get('/gallery', 'GalleryController@index');

Route::get('/contact', 'ContactController@index');

Route::post('/contact', 'ContactController@contactform');

Route::get('/enroll', 'EnrollController@index');

Route::post('/enroll', 'EnrollController@subscribe');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
