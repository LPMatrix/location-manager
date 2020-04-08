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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-location', 'HomeController@add')->name('add-location');
Route::post('/location/create', 'HomeController@add_location')->name('add');

Route::get('/view-location', 'HomeController@view')->name('view-location');
Route::get('/location/{id}/delete', 'HomeController@destroy');
Route::patch('/location/{id}', 'HomeController@update');

Route::patch('/profile/{id}', 'HomeController@profile');

Route::patch('/password/{id}', 'HomeController@password');