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
    Route::delete('/subcategories/{subcategory}', 'SubcategoriesController@destroy');

    Route::get('/posts/create', 'PostsController@create');
    Route::post('/posts/', 'PostsController@store');
    Route::get('/posts', 'PostsController@index');
    Route::get('/posts/{post}/edit', 'PostsController@edit');
    Route::patch('/posts/{post}','PostsController@update');

    Route::get('/ordered-list', 'OrderedListController@create');
    Route::post('/ordered-list', 'OrderedListController@store');
    Route::get('/ordered-list-item/{post}', 'OrderedListController@create_ordered_list_item')->name('ordered-list.create');
    Route::post('/ordered-list-item/add-item/{post}', 'OrderedListController@new_ordered_list_item')->name('ordered-list.new');
    Route::post('/ordered-list-item/{post}/{item}', 'OrderedListController@store_ordered_list_item')->name('ordered-list-item.store');

    Route::get('/gallery', 'GalleryController@create');
    Route::post('/gallery', 'GalleryController@store');

    Route::get('/video', 'videoController@create');
    Route::post('/video', 'VideoController@store');

    Route::get('/audio', 'AudioController@create');
    Route::post('/audio', 'AudioController@store');

    Route::post('/file/upload', 'FileController@upload');
    Route::get('/file/get_images', 'FileController@get_images');
    Route::post('/file/get_images', 'FileController@get_images');
    Route::post('/file/upload-multiple-images', 'FileController@upload_multiple_images');
    Route::post('/file/select-image-file', 'FileController@select_image_file');
    ///----------------------
});





