<?php

// Route::get('/{selectedPic?}', 'StaticPagesController@home')->name('home');
Route::get('/', 'StaticPagesController@home')->name('home');

// Route::get('/carousel/map/to/{picNum?}', 'StaticPagesController@slidePhoto')->name('slide_photo');

// Route::get('picture/{pic}', 'StaticPagesController@pic_one')->name('picture');

Route::get('about', 'StaticPagesController@about')->name('about');

Route::get('activity', 'StaticPagesController@activity')->name('activity');
