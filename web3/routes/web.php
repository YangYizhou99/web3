<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//home
Route::get('/',function(){
    dd('home');
});

//detail
Route::get('/news/{id}',function($id){
    dd('detail of :'.$id);
})->name('news.show')->where('id','[0-9]');

// public of news
Route::get('/news/create',function(){
    dd('create_news');
})->name('news.create');

//submit news
Route::post('/news',function(){
    dd('save_news');
})->name('news.store');

Route::get('/news/{id}/edit',function($id){
    dd('edit news :'.$id);
})->name('news.edit');

//to database
Route::put('/news/{id}',function($id){
    dd('edit saved ,news '.$id);
})->name('news.update');

//delete

Route::delete('/news/{id}',function($id){
    dd('delete news:'.$id);
})->name('news.destroy');

// hide news or show it
Route::patch('/news/{id}',function($id){
    dd('state want to change'.$id);
})->name('new.status');

Route::get('/user',function(){
    dd('change profile');
})->name('user.info');

// update information
Route::put('/user',function(){
    dd('change comfirm');
})->name('user.update');

Route::get('/user/avatar',function(){
    dd('change photo');
})->name('user.avatar');

Route::patch('/user/avatar',function(){
    dd('change photo comfirm');
})->name('user.avatar.update');

//all news
Route::get('/user/news',function(){
    dd('all my news');
})->name('user.news');

//login registration
