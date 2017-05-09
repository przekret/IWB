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

Route::get('/', 'PageController@index');
Route::get('users', ['uses' =>'loginController@index']);

//home route
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', ['uses' => 'PostController@store']);
Route::post('/done', ['uses' => 'PostController@markDone']);

//auth route
Auth::routes();


