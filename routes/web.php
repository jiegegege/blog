<?php

Route::get('/', 'StaticPagesController@home')->name('home');

Route::resource('user', 'UserController');

Route::get('logout', 'LoginAndLogoutController@logout')->name('logout');
Route::get('login', 'LoginAndLogoutController@login')->name('login');
Route::post('login', 'LoginAndLogoutController@store')->name('login');
