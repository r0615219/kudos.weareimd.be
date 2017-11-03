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

use App\User;

Route::get('/', 'UsersController@login');
Route::get('/home', 'ComplimentsController@index');
Route::get('/users','UsersController@users');
Route::get('/users/{user}','ComplimentsController@create');
Route::post('/users/{user}/compliments','ComplimentsController@store');
Route::get('/compliments/received', 'ComplimentsController@received');
Route::get('/compliments/given', 'ComplimentsController@given');


//Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook');
//Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookCallback');

Route::get('/redirect', 'Auth\LoginController@redirect');
Route::get('/login/callback', 'Auth\LoginController@callback');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
