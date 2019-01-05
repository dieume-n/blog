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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List All Aticles
Route::get('articles', 'ArticleController@index');

// List a single article
Route::get('article/{id}', 'ArticleController@show');

// Create a new article
Route::post('article', 'ArticleController@store');

// Update article
Route::put('article', 'ArticleController@store');

// Delete article
Route::delete('article', 'ArticleController@destroy');
