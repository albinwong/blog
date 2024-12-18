<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
// Route::group(['middleware' => ['web']], function(){
	Route::post('/subscribe', 'CommonController@subscribe');
	Route::post('/contact', 'CommonController@contact');
	Route::post('/admin/uploadimage','Backstage\PostController@uploadimage');
	Route::post('/market', 'Cli\HuobiController@marketHistoryKline');
	Route::get('/otc', 'Frontend\HomeController@otc');
// });
 