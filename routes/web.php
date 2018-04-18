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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('posts', 'PostsController@index') ;
Route::get('posts/create', 'PostsController@create') ;
Route::post('posts', 'PostsController@store') ;
Route::patch('posts/{post}', 'PostsController@update') ;
Route::delete('posts/{post}', 'PostsController@destroy');
Route::get('posts/{id}/restore', 'PostsController@restore') ;
Route::get('posts/trash', 'PostsController@trash') ;
Route::get('posts/{post}/edit', 'PostsController@edit') ;
Route::get('posts/{post}', 'PostsController@show') ;



///Socail login -- github -- routes
Route::get('login/{provider}', 'Auth\SocialAuthController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

Auth::routes();

