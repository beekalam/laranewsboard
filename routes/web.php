<?php

Auth::routes();

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/categories', 'CategoriesController@index');
Route::post('/admin/categories', 'CategoriesController@store');
Route::delete('/admin/categories/{category}', 'CategoriesController@destroy');
Route::put('/admin/categories/{category}','CategoriesController@update');
Route::get('/admin/categories/{category}','CategoriesController@edit');


