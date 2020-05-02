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

Auth::routes();

Route::get('/', function () {
    return view('index',['title'=>'Home | vvdholdings.com']);
})->name('welcome');

Route::get('contact_us', function () {
    return view('contact',['title'=>'Contact Us | vvdholdings.com']);
})->name('contactUs');

Route::post('contact','ContactController@contact')->name('contact');

Route::get('services', function () {
    return redirect()->route('projects');
});

Route::get('our_projects', function () {
    return view('projects',['title'=>'Projects | vvdholdings.com']);
})->name('projects');

Route::get('about_us', function () {
    return view('about',['title'=>'About Us | vvdholdings.com']);
})->name('about');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('saveDonate', 'PaymentController@saveDonate')->name('saveDonate');

Route::get('send_email', 'MessageController@sendEmail')->name('sendEmail');


Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => 'admin'], function () {

        Route::get('admin_payments_view', 'PaymentController@adminPaymentsView')->name('adminPaymentsView');

    });
});





