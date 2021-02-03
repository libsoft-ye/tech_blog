<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin;
use App\Http\Controllers\web;

Route::group(['prefix'=>'admin'],function(){

    Route::get('dashboard',[admin\DashboardController::class,'index'])->name('dashboard');
    Route::resource('categories', admin\CategoriesController::class);
	Route::resource('articles', admin\ArticlesController::class);

});

Route::get('/',[web\IndexController::class,'index'])->name('home');
Route::resource('articles', web\ArticlesController::class)->only('index', 'show');
Route::get('/categories',[web\ArticlesController::class,'index'])->name('categories');
