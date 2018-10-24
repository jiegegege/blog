<?php

// Route::get('/{selectedPic?}', 'StaticPagesController@home')->name('home');
Route::get('/', 'StaticPagesController@home')->name('home');

// Route::get('/carousel/map/to/{picNum?}', 'StaticPagesController@slidePhoto')->name('slide_photo');

// Route::get('picture/{pic}', 'StaticPagesController@pic_one')->name('picture');

Route::get('about', 'StaticPagesController@about')->name('about');

Route::get('activity', 'StaticPagesController@activity')->name('activity');

Route::get('led', 'StaticPagesController@led')->name('led');

Route::get('introduction', 'StaticPagesController@introduction')->name('introduction');

Route::get('study', 'StaticPagesController@study')->name('study');

Route::get('environment', 'StaticPagesController@environment')->name('environment');
