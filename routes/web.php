<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//use App\Models\Blog; // controller use yin thone sa yar ma lo

use function PHPUnit\Framework\fileExists;

Route::get('/',[BlogController::class,'index']);

Route::get('/blogs/{blog:slug}',[BlogController::class,'show'])-> where('id','[A-z\d\-_]+');

Route::get('/categories/{category:slug}',[CategoryController::class,'index'])->where('id','[A-z\d\-_]+');

Route::get('/users/{user:id}',[UserController::class,'index'])->where('id','[A-z\d\-_]+');