<?php

use Illuminate\Support\Facades\Route;




Route::middleware('auth')->group(function(){
    Route::patch('/news/{id}',[\App\Http\Controllers\NewsController::class,'status'])
        ->name('blog.status');

    Route::post('/news/{id}/comment',\App\Http\Controllers\CommentController::class)
        ->name('news.comment');

    Route::prefix('user')->name('user.')->group(function (){
        Route::get('/', [\App\Http\Controllers\UserController::class, 'infoPage'])
            ->name('info');

        Route::put('/', [\App\Http\Controllers\UserController::class, 'infoUpdate'])
            ->name('info.update');

        Route::get('/avatar', [\App\Http\Controllers\UserController::class, 'avatarPage'])
            ->name('avatar');

        Route::put('/avatar', [\App\Http\Controllers\UserController::class, 'avatarUpdate'])
            ->name('avatar.update');

        Route::get('/news', [\App\Http\Controllers\UserController::class, 'news'])
            ->name('news');

    });
});

Route::get("/",[\App\Http\Controllers\IndexController::class,'index'])
    ->name('index');

//resource route
Route::resource('news',\App\Http\Controllers\NewsController::class)
    ->except(['index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
