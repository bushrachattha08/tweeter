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
Route::get('users', 'UserController@getAllUsers');
Route::get('Posts', 'PostController@getAllPosts');

Route::get('PostsByNumber/{number}', 'PostController@getAllPostsByNumber');
Route::get('/comment', 'HomeController@getAllComments');

// Route::get('/editpost', 'HomeController@getAllEditPosts');


// Route::post('/like-post', 'homeController@getAllPostLikes');
