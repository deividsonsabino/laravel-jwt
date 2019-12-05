<?php

use Illuminate\Http\Request;

Route::post('register', 'Api\UserController@register');
Route::post('login', 'Api\UserController@authenticate');
