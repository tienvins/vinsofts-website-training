<?php

Route::get('/', 'AdminController@index');
// Route::get('/list-products','AdminController@create');
Route::group(['prefix' => 'admin'], function() {
    Route::group(['prefix' => 'product'], function() {
        Route::get('/', 'ProductController@index');
        Route::get('/create', 'ProductController@create');
    });
});
