<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('rest','RestTestController')->names('restTest');

Route::group(['namespace'=>'Blog','prefix'=>'blog'],function(){
   Route::resource('posts','PostController')->names('blog.posts');
});
