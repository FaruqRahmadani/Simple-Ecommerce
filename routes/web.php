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

Route::group(['namespace' => 'Auth'], function() {
  Route::get('login', 'LoginController@showLoginForm')->name('loginForm');
  Route::post('login', 'LoginController@login')->name('loginSubmit');
  Route::get('register', 'RegisterController@showRegistrationForm')->name('registerForm');
  Route::post('register', 'RegisterController@register')->name('loginSubmit');
  Route::get('logout', 'LoginController@logout')->name('logout');
});

Route::group(['middleware' => 'AuthMiddleware'], function() {
  Route::get('/', function () {
    return view('blank');
  });

  Route::get('/home', 'HomeController@index')->name('home');
});
