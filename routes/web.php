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

// Front-end Routers Group
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



// Back-end Routers Group
Route::prefix('admin')->group(function () {

    // Login Page
    Route::match(['get', 'post'], '/login', 'Backstage\LoginController@index');

    Route:: group(['middleware'=>'login'], function () {
        // Back-end Homepage
        Route::get('/', 'Backstage\CommonController@index');

        // Image Management
        Route::get('/gallery', 'Backstage\CommonController@gallery');

        // Message Management
        Route::get('/message', 'Backstage\CommonController@mess');

        // Tags Management
        Route::prefix('tags')->group(function () {
            Route::get('/', 'Backstage\TagsController@index');
            Route::any('/edit', 'Backstage\TagsController@edit');
            Route::delete('/del/{id}', 'Backstage\TagsController@del')->where('id', '\d+');
        });

        // Posts Management
        Route::prefix('posts')->group(function () {
            Route::get('/index', 'Backstage\PostController@index');
            Route::any('/edit', 'Backstage\PostController@edit');
            Route::get('/del', 'Backstage\PostController@del');
        });
    });
});
