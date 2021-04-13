<?php

use Illuminate\Support\Facades\Route;








Route::get("/",[\App\Http\Controllers\IndexController::class,'index'])
    ->name('index');


//resource route
Route::resource('news',\App\Http\Controllers\NewsController::class)
    ->except(['index']);

Route::patch('/news/{id}',[\App\Http\Controllers\NewsController::class,'status'])
    ->name('blog.status');

Route::get('/user',[\App\Models\User::class.'infoPage'])
    ->name('user.info');
Route::put('/user',[\App\Models\User::class.'infoUpdate'])
    ->name('user.info.update');
Route::get('/user/avatar',[\App\Models\User::class.'avatarPage'])
    ->name('user.avatar');
Route::put('/user',[\App\Models\User::class.'avatarUpdate'])
    ->name('user.avatar.update');

Route::get('/user/news',[\App\Models\User::class.'news'])
    ->name('user.news');

Route::post('/news/{id}/comment',\App\Http\Controllers\CommentController::class)
    ->name('news.comment');

//login registration

