<?php

use Illuminate\Support\Facades\Route;

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


// Return products on the index page
Route::get('/', 'ProductsController@index')->name('index');

//create all resource controller function routes
Route::resource('product', 'ProductsController');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
