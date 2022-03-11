<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UsersController;
use  App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\BlogController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\IndexController;


Route::get('/',[IndexController::class,'index'])->name('index');

Route::get('/about',[IndexController::class,'about'])->name('about');

Route::get('/service',[IndexController::class,'service'])->name('service');

Route::get('/project',[IndexController::class,'portfolio'])->name('project');

Route::get('/contact',[IndexController::class,'contact'])->name('contact');
Route::post('/contactPost',[IndexController::class,'contactPost'])->name('contactPost');

Route::get('/comment',[IndexController::class,'comments'])->name('comments');
Route::post('/comment',[IndexController::class,'commentsPost'])->name('commentsPost');

Route::get('/blog',[IndexController::class,'blog'])->name('blog');
Route::get('/blog/{title}',[IndexController::class,'blogPost'])->name('blogPost');
Route::get('/blogCount',[IndexController::class,'blogCountPost'])->name('blogCountPost');

Route::resource('users',UsersController::class);
Route::resource('abouts',AboutController::class);
Route::resource('services',ServiceController::class);
Route::resource('projects',ProjectController::class);
Route::resource('skills',SkillController::class);
Route::resource('blogs',BlogController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');
