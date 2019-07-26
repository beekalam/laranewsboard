<?php

Auth::routes();

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function () {
    Route::get('/categories', 'CategoriesController@index');
    Route::post('/categories', 'CategoriesController@store');
    Route::delete('/categories/{category}', 'CategoriesController@destroy');
    Route::put('/categories/{category}', 'CategoriesController@update');
    Route::get('/categories/{category}', 'CategoriesController@edit');

    Route::get('/subcategories','SubcategoriesController@index');
});




