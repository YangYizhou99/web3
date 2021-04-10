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
});

//submit news
Route::post('/news',function(){
    dd('save_news');
});

Route::get('/news/{id}/edit',function($id){
    dd('edit news :'.$id);
});

//to database
Route::put('/news/{id}',function($id){
    dd('edit saved ,news '.$id);
});

//delete

Route::delete('/news/{id}',function($id){
    dd('delete news:'.$id);
});

// hide news or show it
Route::patch('/news/{id}',function($id){
    dd('state want to change'.$id);
});

Route::get('/user',function(){
    dd('change profile');
});

// update information
Route::put('/user',function(){
    dd('change');
});

Route::get('/user/avatar',function(){
    dd('change photo');
});

Route::patch('/user/avatar',function(){
    dd('change photo comfirm');
});

//all news
Route::get('/user/news',function(){
    dd('all my news');
});

//login registration
