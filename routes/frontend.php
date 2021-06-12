<?php
Route::get('/','FrontendController@index')->name('home');
Route::get('/club','FrontendController@club')->name('club');
Route::get('/nation','FrontendController@nation')->name('nation');
Route::get('/accessories','FrontendController@accessories')->name('accessories');
