<?php

Route::get('/', 'websiteController@index');
Route::get('/about-us', 'websiteController@about');
Route::get('/services', 'websiteController@services');
Route::get('/contact', 'websiteController@contact');