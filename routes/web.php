<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/marketing', function () {
    return view('marketing');
});
Route::get('/marketing1', function () {
    return view('marketing1');
});
Route::get('/marketing3', function () {
    return view('marketing3');
});
Route::get('/game', function () {
    return view('game');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/post/{id}', 'PostsController@show')->name('posts.show');

Route::post('/comment', 'HomeController@saveComment')->name('savecomment');

Route::get('Posts/{post}', 'PostController@show')->name('post.show');

Route::get('/editpost/{id}', 'homeController@editPostdisplay');
Route::post('/editpost', 'homeController@editPost');



Route::get('/edit-profile', 'userController@editProfiledisplay');

Route::post('/edit-profile', 'userController@editProfile');


Route::post('/like-post', 'homeController@likePost');


Route::get('/profile', 'userController@Profiledisplay');

Route::get('posts', 'PostController@index')->name('posts.index');
Route::post('posts', 'PostController@savePost');


Route::delete('/delete-post', 'homeController@deletePost')->name('delete_post');

Route::delete('/delete-comment', 'homeController@deletecomment')->name('delete_comment');


Route::post('/follow', 'homeController@follow');
Route::get('/unFollow', 'homeController@unFollow');

Route::get('users/{user}', 'UserController@show')->name('user.show');

Route::get('users/{user}/follow', 'UserController@follow')->name('user.follow');

Route::get('users/{user}/unfollow', 'UserController@unfollow')->name('user.unfollow');

//Route::get('posts', 'PostController@index')->name('posts.index');
