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
  Route::post('register', 'RegisterController@register')->name('registerSubmit');
  Route::get('logout', 'LoginController@logout')->name('logout');
});

Route::group(['middleware' => 'AuthMiddleware'], function() {
  Route::get('', 'HomeController@dashboard')->name('dashboard');

  Route::group(['prefix' => 'prepaid', 'as' => 'prepaid'], function() {
    Route::get('', 'PrepaidController@order')->name('Order');
    Route::post('', 'PrepaidController@submit')->name('Submit');
    Route::get('detail/{id}', 'PrepaidController@detail')->name('Detail');
  });

  Route::group(['prefix' => 'product', 'as' => 'product'], function() {
    Route::get('', 'ProductController@order')->name('Order');
    Route::post('', 'ProductController@submit')->name('Submit');
    Route::get('detail/{id}', 'ProductController@detail')->name('Detail');
  });
});
