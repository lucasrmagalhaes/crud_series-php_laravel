<?php

Route::get('/series', 'SeriesController@index');
Route::get('/series/criar', 'SeriesController@create');
Route::post('/series/criar', 'SeriesController@store');
