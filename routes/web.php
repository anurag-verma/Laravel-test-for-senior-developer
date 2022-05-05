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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home-test-view', function () {
    return view('vendor.rw-real-estate.home');
});

Route::get('/home','FrontEndController@home');

Route::get('/filter/{price_from?}/{price_to?}/{rooms?}/{bathrooms?}/{property_type?}/{location?}/{garage?}/{garden?}/{pvt_pool?}/{comm_pool?}/{ref?}','FrontEndController@filter_properties');

Route::get('/property-details/{property_id}','FrontEndController@property_details');

Route::get('/properties-test-view', function () {
    return view('vendor.rw-real-estate.properties');
});