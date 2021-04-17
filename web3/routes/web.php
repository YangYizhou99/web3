<?php

use Illuminate\Support\Facades\Route;






Route::get("/",[\App\Http\Controllers\IndexController::class,'index'])
    ->name('index');


//resource route
Route::resource('news',\App\Http\Controllers\NewsController::class)
    ->except(['index']);

Route::patch('/news/{id}',[\App\Http\Controllers\NewsController::class,'status'])
    ->name('blog.status');


Route::get('/user', [\App\Http\Controllers\UserController::class, 'infoPage'])
    ->name('user.info');


Route::put('/user', [\App\Http\Controllers\UserController::class, 'infoUpdate'])
    ->name('user.info.update');


Route::get('/user/avatar', [\App\Http\Controllers\UserController::class, 'avatarPage'])
    ->name('user.avatar');


Route::put('/user/avatar', [\App\Http\Controllers\UserController::class, 'avatarUpdate'])
    ->name('user.avatar.update');


Route::get('/user/news', [\App\Http\Controllers\UserController::class, 'news'])
    ->name('user.news');

Route::post('/news/{id}/comment',\App\Http\Controllers\CommentController::class)
    ->name('news.comment');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
