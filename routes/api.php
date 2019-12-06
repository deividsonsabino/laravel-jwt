<?php

use Illuminate\Http\Request;

Route::post('register', 'Api\UserController@register');
Route::post('login', 'Api\UserController@authenticate');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('products', 'Api\ProductController@index');
});