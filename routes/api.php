<?php

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

Route::group(['prefix' => 'v1/admin'], function () {

    Route::group(['prefix' => 'user'], function() {
        Route::get('/list', 'Api\v1\Admin\User\UserController@getListUser');
    });

    Route::group(['prefix' => 'category'], function() {
        Route::get('/list', 'Api\v1\Admin\Category\CategoryController@getListCategories');
    });
});
