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


Route::get('/',  ['uses' => 'WelcomeController@index', 'as' => 'home']);

// EMAILS
Route::get('email', 'EmailController@getForm');
Route::post('email', ['uses' => 'EmailController@postForm', 'as' => 'storeEmail']);

// USERS 
Route::get('users', 'UsersController@getInfos');
Route::post('users', 'UsersController@postInfos');

// PHOTOS 
Route::get('photo', 'PhotoController@getForm');
Route::post('photo', 'PhotoController@postForm');

// CONTACTS 
Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');

Route::get('/article/{n}',  ['uses' => 'ArticleController@show', 'as' => 'article'])->where('n', '[0-9]+');

Route::get('/facture/{n}',[ 'uses' => 'FactureController@show' ])->where('n', '[0-9]+');


Route::resource('user', 'UserController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
