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

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/case_studies', function () {
    return view('case_studies');
});

Route::get('/products/transceivers/{id}', 'ProductController@viewTransceiver');

Route::get('/products/cables/{id}', 'ProductController@viewCable');

Route::get('/products/{module}', 'ProductController@viewModuleProducts');

Route::get('/products/{module}/{category}', 'ProductController@viewCategoryProducts');

Route::get('/cables/{type}', 'ProductController@viewCableTypes');

Route::get('/cables/{type}/{form}', 'ProductController@viewCableForms');

Route::post('/search', 'ProductController@searchProducts');

Route::post('/filter/transceivers', 'ProductController@filterTransceivers');

Route::post('/filter/cables', 'ProductController@filterCables');

Route::post('/contact', 'ProductController@contact');

Route::post('/', 'ProductController@subscribe');