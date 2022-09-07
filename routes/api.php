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
Route::get('/coursesUser/{slug}', 'Api\PageController@coursesUser');
Route::get('/categoryUser/{slug}', 'Api\PageController@categoryUser');
Route::get('/userInfo/{slug}', 'Api\PageController@userInfo');
Route::get('/itemsUser/{slug}/{courseId}', 'Api\PageController@itemsUser');
Route::post('/saveOrder', 'Api\PageController@saveOrder');

