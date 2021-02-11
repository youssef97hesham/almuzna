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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::get('GetallProduct', function () {
    dd('test');
});


Route::group(['middleware' => ['api','CheckPassword'], 'namespace' => 'Api'], function () {

	Route::post('GetallProducts', 'ProductsController@index');

    Route::group(['prefix' => 'admin','namespace'=>'Admin'],function (){
    Route::post('login', 'AuthController@login');

    //Route::post('logout','AuthController@logout') -> middleware(['auth.guard:admin-api']);

    });


});