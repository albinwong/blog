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
Route::get('/', 'Frontend\HomeController@index');
Route::get('/archive/{type}/{cid}.html', 'Frontend\HomeController@archive');
Route::get('/{id}.html', 'Frontend\HomeController@single')->where('id', '\w{16}');
Route::get('/contact', 'Frontend\HomeController@contact');
Route::get('/user', 'UserController@index');
Route::get('/digiccy', 'Frontend\HomeController@digiccy');
Route::get('/digiccyTest', 'Frontend\HuobiController@marketHistoryKline');
Route::get('/otc', 'Frontend\HuobiController@otcPrice');
Route::get('/dd', 'Frontend\AlternativeController@fgi');
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

        // User Management
        Route::prefix('user')->group(function () {
            Route::get('/index', 'Backstage\UserController@index');
            Route::any('/edit', 'Backstage\UserController@edit');
            Route::delete('/del/{id}', 'Backstage\UserController@del')->where('id', '\d+');
        });
    });
});
