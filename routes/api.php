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

Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::post('/register', 'App\Http\Controllers\AuthController@register');
Route::post('/resetPassword', 'App\Http\Controllers\AuthController@resetPassword');
Route::post('/me', 'App\Http\Controllers\AuthController@me')->middleware('checkToken');


Route::get('/clients', 'App\Http\Controllers\ClientController@index');
Route::get('/clients/{id}', 'App\Http\Controllers\ClientController@show');
Route::post('/clients', 'App\Http\Controllers\ClientController@store');
Route::put('/clients/{id}', 'App\Http\Controllers\ClientController@update');
Route::delete('/clients/{id}', 'App\Http\Controllers\ClientController@destroy');

Route::get('/trainers/{id}', 'App\Http\Controllers\TrainerController@show');
Route::put('/trainers/{id}', 'App\Http\Controllers\TrainerController@update');

Route::get('/goals/{id}', 'App\Http\Controllers\GoalController@show');
Route::put('/goals/{id}', 'App\Http\Controllers\GoalController@update');

Route::get('/galleries/{id}', 'App\Http\Controllers\GalleryController@show');
Route::post('/galleries', 'App\Http\Controllers\GalleryController@store');
Route::delete('/galleries/{id}', 'App\Http\Controllers\GalleryController@destroy');

Route::get('/recipes', 'App\Http\Controllers\RecipeController@index');
Route::post('/recipes', 'App\Http\Controllers\RecipeController@store');
Route::put('/recipes/{id}', 'App\Http\Controllers\RecipeController@update');
Route::delete('/recipes/{id}', 'App\Http\Controllers\RecipeController@destroy');

Route::get('/recipeTypes', 'App\Http\Controllers\RecipeTypeController@index');

Route::get('/grocery', 'App\Http\Controllers\GroceryController@index');
Route::post('/grocery', 'App\Http\Controllers\GroceryController@store');
Route::put('/grocery/{id}', 'App\Http\Controllers\GroceryController@update');
Route::delete('/grocery/{id}', 'App\Http\Controllers\GroceryController@destroy');








