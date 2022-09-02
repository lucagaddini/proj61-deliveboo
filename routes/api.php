<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/homepage', 'Api\PageController@homepage');
Route::get('/coursesUser/{id}', 'Api\PageController@coursesUser');
Route::get('/categoryUser/{id}', 'Api\PageController@categoryUser');
Route::get('/userInfo/{id}', 'Api\PageController@userInfo');
Route::get('/itemsUser/{userId}/{courseId}', 'Api\PageController@itemsUser');
// Route::get('', 'Api\PageController@index');
// Route::get('', 'Api\PageController@index');
