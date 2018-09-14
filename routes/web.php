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

Route::get('pic_one', 'StaticPagesController@pic_one')->name('pic_one');
Route::get('pic_two', 'StaticPagesController@pic_two')->name('pic_two');
Route::get('pic_three', 'StaticPagesController@pic_three')->name('pic_three');
Route::get('pic_four', 'StaticPagesController@pic_four')->name('pic_four');
