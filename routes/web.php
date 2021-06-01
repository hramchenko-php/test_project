<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestTestController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('rest','RestTestController')->names('restTest');

Route::group(['namespace'=>'Blog','prefix'=>'blog'],function(){
   Route::resource('posts','PostController')->names('blog.posts');
});

//Админка блога
$groupData = [
    'namespace' => 'blog\admin',
    'prefix' => 'admin/blog'
];
Route::group($groupData, function () {
    //Blog category
    $methods = ['index', 'edit',  'update', 'create', 'store',];
    Route::resource('categories', 'CategoryController')
        ->only($methods)
        ->names('blog.admin.categories');
});
// Коммит бэк
//Новый комит
