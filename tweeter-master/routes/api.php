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
Route::get('PostsByNumber/{number}/{start}', 'PostController@getAllPostsByNumberFromStart');
Route::get('/comment', 'HomeController@getAllComments');

Route::get('postsbynumberfromstartpoint/{number}/{id}', 'PostController@getPostsByNumberFromStartPoint');

Route::get('/post-comments/{postId}', 'HomeController@getAllPostComments');
Route::post('/post-comments/{postId}', 'HomeController@getPostComments');
Route::post('/new-comments', 'HomeController@newCommentViaApi');


Route::post('/like-post', 'homeController@likepostViaApi');
Route::get('/like-post', 'homeController@likepostViaApi');
