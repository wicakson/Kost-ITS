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
    return view('index');
});

Route::get('/', function () {
    return view('index');
});

Route::get('view_upload_1','view@view_upload_1');

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

Route::get('detail','view@detail');
Route::get('upload-2', function () {
    return view('upload-2');
});

Route::get('upload-3', function () {
    return view('upload-3');
});

Route::post('upload-images', function () {
    return view('upload-images');
});

Route::get('detail/{property_id?}','view@detail');

Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');
Route::get('login/{provider?}','view@login');
Route::get('logout','view@logout');
Route::get('upload_1','view@upload_1');
Route::post('submit_upload_1','view@submit_upload_1');
Route::post('upload_map','view@upload_map');