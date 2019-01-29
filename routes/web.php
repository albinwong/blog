<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 前台用户组
Route::get('/', function () {
    return view('exclusive/index');
});
Route::get('/archive', function () {
    return view('exclusive/archive');
});
Route::get('/about', function () {
    return view('exclusive/single');
});
Route::get('/contact', function () {
    return view('exclusive/contact');
});
Route::get('/user', 'UserController@index');



//后台路由组
Route::prefix('admin')->group(function () {
    Route::match(['get', 'post'], '/login', 'Backstage\LoginController@index');

    Route:: group(['middleware'=>'login'], function () {
        Route::get('/', 'Backstage\CommonController@index');
        Route::get('/gallery', 'Backstage\CommonController@gallery');
        /*Route::get('/admin', function () {
            return view('admin');
        });*/
    });
});
