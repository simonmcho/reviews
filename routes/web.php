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
})->name('home');


Route::get('/register', 'RegistrationController@create'); // Page to register user
Route::post('/register', 'RegistrationController@store'); // Register user

Route::get('/services', 'ServiceController@index'); // Page to show all products
Route::get('/services/create', 'ServiceController@create'); // Page to create a product
Route::get('/services/{service_id}', 'ServiceController@show'); // Show individual products

Route::post('/services', 'ServiceController@store'); // Create product
Route::post('/services/{service_id}/reviews', 'ReviewsController@store'); // Create review on product
