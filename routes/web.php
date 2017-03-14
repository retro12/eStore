<?php

//Setting up headers for accessing data on the server via AJAX request
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

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

//Route for home page
Route::get('/', 'Controller@index')->name('home');
Route::post('/', 'Controller@createSubscription');

//Route for confirmed email address
Route::get('/email/confirmed/{id}', 'Controller@confirmedEmail')->name('confirmed');

//Route for displaying all data from single category
Route::get('category/{category_id}', 'Controller@showSingleCategorie');
