<?php

use Illuminate\Support\Facades\Route;



Route::resource('user',\App\Http\Controllers\UserController::class);
Route::resource('post',\App\Http\Controllers\PostController::class);
Route::resource('country',\App\Http\Controllers\CountryController::class);


