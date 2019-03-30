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
Event::listen('illuminate.query', function ($query) {
    // var_dump($query);
});
// Front-end Routers Group
Route::get('/', 'HomeController@index');
Route::get('/archive/{type}/{cid}.html', 'HomeController@archive');
Route::get('/detail/{id}.html', 'HomeController@single')->where('id', '\d+');
Route::get('/contact', 'HomeController@contact');
Route::get('/user', 'UserController@index');
Route::get('/404', function(){
    abort(404,'not found!!!');
});



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
            Route::delete('/del/{id}', 'Backstage\PostController@del')->where('id', '\d+');
        });
    });
});
