<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UsersController;
use  App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ServiceController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\IndexController;


Route::get('/',[IndexController::class,'index'])->name('index');

Route::get('/about',[IndexController::class,'about'])->name('about');

Route::get('/service',[IndexController::class,'service'])->name('service');

Route::get('/portfolio',[IndexController::class,'portfolio'])->name('portfolio');

Route::get('/contact',[IndexController::class,'contact'])->name('contact');



Route::resource('users',UsersController::class);
Route::resource('abouts',AboutController::class);
Route::resource('services',ServiceController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
