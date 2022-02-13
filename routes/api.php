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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');
    Route::post('register', 'App\Http\Controllers\AuthController@register');
});


//Route::get('categoria', 'App\Http\Controllers\categoriacontroller@index');
//Route::get('categoria/{id}','App\Http\Controllers\categoriacontroller@show');

//Route::post('categoria', 'App\Http\Controllers\categoriacontroller@store');
//Route::put('categoria/{id}', 'App\Http\Controllers\categoriacontroller@update');

//Route::delete('categoria/{id}', 'App\Http\Controllers\categoriacontroller@destroy');

Route::resource('categoria', 'App\Http\Controllers\categoriacontroller');