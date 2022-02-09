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


Route::get('/get-roles','RoleController');

//User Routes
Route::post('/create-new-user','UserController@create');
Route::get('/get-users','UserController@getUsers');
Route::delete('/delete-user/{user_id}','UserController@delete');
Route::get('/get-user/{user_id}','UserController@getUser');
Route::put('/update-user/{user_id}','UserController@update');
