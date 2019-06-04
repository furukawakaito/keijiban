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



// Route::get('/home' ,'HomeController@index')->name('home');
Route::group(['middleware' => 'guest'], function(){
 
    Route::get('/signup', 'UserController@signup')->name('signup');
    Route::post('/postSignup', 'UserController@postSignup')->name('postSignup');
    Route::get('/login','UserController@loginView')->name('login');
    Route::post('/login','UserController@loginPost')->name('loginpost');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/top' ,'TweetController@top')->name('top');

    Route::post('/top', 'TweetController@create')->name('create');

    Route::get('/logout', 'UserController@logout')->name('logout');
});