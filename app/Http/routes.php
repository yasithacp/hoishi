<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/why_us', function () {
    return view('whyus');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/warranty', function () {
    return view('warranty');
});

Route::get('/shipping', function () {
    return view('shipping');
});

Route::get('/product_overview', function () {
    return view('product_overview');
});

Route::get('/product_information', function () {
    return view('product_information');
});

Route::get('/product_list', function () {
    return view('product_list');
});
