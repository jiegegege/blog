<?php

Route::get('/', 'StaticPagesController@home')->name('home');

Route::resource('user', 'UserController');

Route::get('usermsg/{user}', 'UserMessageController@usermsg')->name('usermsg');
Route::get('usermsg/{user}/edit', 'UserMessageController@edit')->name('edit');

Route::patch('usermsg/{user}/update', 'UserMessageController@update')->name('update');
Route::get('about', 'StaticPagesController@about')->name('about');
Route::get('activity', 'StaticPagesController@activity')->name('activity');

Route::get('store', 'StaticPagesController@store')->name('store');
Route::get('cooperation', 'StaticPagesController@cooperation')->name('cooperation');
