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

//Web Info
Route::get('/webinfo', 'WebInfoController@index')->name('webinfo');
Route::get('/show_webinfo', 'WebInfoController@show')->name('show_webinfo');
Route::get('/edit_webinfo', 'WebInfoController@edit')->name('edit_webinfo');
Route::post('/update_webinfo', 'WebInfoController@update')->name('update_webinfo');

//Page
Route::get('/page', 'PageController@index')->name('page');
Route::get('/create_page', 'PageController@create')->name('new_page');
Route::post('/store_page', 'PageController@store')->name('store_page');
Route::get('/show_page', 'PageController@show')->name('show_page');
Route::get('/edit_page', 'PageController@edit')->name('edit_page');
Route::post('/update_page', 'PageController@update')->name('update_page');

//Image
Route::get('/image', 'ImageController@index')->name('image');
Route::get('/create_image', 'ImageController@create')->name('new_image');
Route::post('/store_image', 'ImageController@store')->name('store_image');
Route::get('/show_image', 'ImageController@show')->name('show_image');
Route::get('/edit_image', 'ImageController@edit')->name('edit_image');
Route::post('/update_image', 'ImageController@update')->name('update_image');

//Member
Route::get('/member', 'MemberController@index')->name('member');
Route::get('/create_member', 'MemberController@create')->name('new_member');
Route::post('/store_member', 'MemberController@store')->name('store_member');
Route::get('/show_member', 'MemberController@show')->name('show_member');
Route::get('/edit_member', 'MemberController@edit')->name('edit_member');
Route::post('/update_member', 'MemberController@update')->name('update_member');
Route::post('/destroy_member', 'MemberController@destroy')->name('destroy_member');

//User
Route::get('/user', 'UserController@index')->name('user');
Route::get('/create_user', 'UserController@create')->name('new_user');
Route::post('/store_user', 'UserController@store')->name('store_user');
Route::get('/show_user', 'UserController@show')->name('show_user');
Route::get('/edit_user', 'UserController@edit')->name('edit_user');
Route::post('/update_user', 'UserController@update')->name('update_user');
Route::post('/destroy_user', 'UserController@destroy')->name('destroy_user');

//Testimonial
Route::get('/testimonial', 'TestimonialController@index')->name('testimonial');
Route::get('/create_testimonial', 'TestimonialController@create')->name('new_testimonial');
Route::post('/store_testimonial', 'TestimonialController@store')->name('store_testimonial');
Route::get('/show_testimonial', 'TestimonialController@show')->name('show_testimonial');
Route::get('/edit_testimonial', 'TestimonialController@edit')->name('edit_testimonial');
Route::post('/update_testimonial', 'TestimonialController@update')->name('update_testimonial');
Route::post('/destroy_testimonial', 'TestimonialController@destroy')->name('destroy_testimonial');

//Slide
Route::get('/slide', 'SlideController@index')->name('slide');
Route::get('/create_slide', 'SlideController@create')->name('new_slide');
Route::post('/store_slide', 'SlideController@store')->name('store_slide');
Route::get('/show_slide', 'SlideController@show')->name('show_slide');
Route::get('/edit_slide', 'SlideController@edit')->name('edit_slide');
Route::post('/update_slide', 'SlideController@update')->name('update_slide');
Route::post('/destroy_slide', 'SlideController@destroy')->name('destroy_slide');

//Event
Route::get('/event', 'EventController@index')->name('event');
Route::get('/create_event', 'EventController@create')->name('new_event');
Route::post('/store_event', 'EventController@store')->name('store_event');
Route::get('/show_event', 'EventController@show')->name('show_event');
Route::get('/edit_event', 'EventController@edit')->name('edit_event');
Route::post('/update_event', 'EventController@update')->name('update_event');
Route::post('/destroy_event', 'EventController@destroy')->name('destroy_event');

//Partner
Route::get('/partner', 'PartnerController@index')->name('partner');
Route::get('/create_partner', 'PartnerController@create')->name('new_partner');
Route::post('/store_partner', 'PartnerController@store')->name('store_partner');
Route::get('/show_partner', 'PartnerController@show')->name('show_partner');
Route::get('/edit_partner', 'PartnerController@edit')->name('edit_partner');
Route::post('/update_partner', 'PartnerController@update')->name('update_partner');
Route::post('/destroy_partner', 'PartnerController@destroy')->name('destroy_partner');

//Component
Route::get('/component', 'ComponentController@index')->name('component');
Route::get('/show_component', 'ComponentController@show')->name('show_component');
Route::get('/edit_component', 'ComponentController@edit')->name('edit_component');
Route::post('/update_component', 'ComponentController@update')->name('update_component');
