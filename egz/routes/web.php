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

Route::view('/', 'layouts.main');

Route::view('about', 'contents.about');

Route::view('courses', 'contents.courses');

Route::get('contact', 'ContactFormController@create');
Route::post('contact', 'ContactFormController@store');

Route::view('gallary', 'contents.gallary');

Route::get('imgSlider', 'ImgSliderController@list');


