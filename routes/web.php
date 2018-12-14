<?php

Route::get('/', 'websiteController@index');
Route::get('/about-us', 'websiteController@about');
Route::get('/services', 'websiteController@services');
Route::get('/contact', 'websiteController@contact');
Route::get('/prod-view/{id}', 'websiteController@view');

Route::group(['prefix' => 'stadnitzki'], function(){
	Route::get('/', 'cmsController@index');
	Route::get('/addview', 'cmsController@addview');
	Route::post('/add', 'cmsController@add');
});