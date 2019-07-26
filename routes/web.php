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
    Route::get('/categories/{category}/edit', 'CategoriesController@edit');

    Route::get('/subcategories', 'SubcategoriesController@index');
    Route::post('/subcategories', 'SubcategoriesController@store');
    Route::get('/subcategories/{subcategory}/edit', 'SubcategoriesController@edit');
    Route::put('/subcategories/{subcategory}', 'SubcategoriesController@update');
    Route::delete('/subcategories/{subcategory}','SubcategoriesController@destroy');
});




