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

Route::get('home', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('tes', function () {
    return view('waca');
});

Route::get('contact-us', 'view@contact_us');

Route::get('search', function () {
    return view('search');
});

Route::get('search-with-map', function () {
    return view('search-with-map');
});

Route::get('detail', function () {
    return view('detail');
});

Route::get('upload', function () {
    return view('upload');
});

Route::get('upload-2', function () {
    return view('upload-2');
});

Route::get('upload-3', function () {
    return view('upload-3');
});

Route::post('upload-images', function () {
    return view('upload-images');
});