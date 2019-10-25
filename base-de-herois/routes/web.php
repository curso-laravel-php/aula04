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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function(){
    Route::get('/usuarios', 'UserController@index')->name('usr');
    Route::get('/usuarios2', 'UserController@index2');

    Route::prefix('/herois')->group(function(){
        Route::get('/', 'HeroiController@list');
        Route::get('/novo', 'HeroiController@create')->name('herois.novo');
        Route::post('/salva-novo', 'HeroiController@store')->name('herois.salva-novo');
        
    });
});

