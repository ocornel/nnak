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

//Route::get('/', function () {
////    return view('welcome');
//    return view('index');
//})->name('index');
Route::get('/', 'PageController@index_page')->name('index');
Route::get('/contact_us', 'PageController@contact_page')->name('contact');
Route::get('/about', 'PageController@about_page')->name('about');
Route::get('/events', 'PageController@events_page')->name('events');
Route::get('/{page_title?}/p{page_id}', 'PageController@show')->name('show_page');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
