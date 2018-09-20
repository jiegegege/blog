<?php

Route::get('/{selectedPic?}', 'StaticPagesController@home')->name('home');

Route::get('picture/{pic}', 'StaticPagesController@pic_one')->name('picture');
