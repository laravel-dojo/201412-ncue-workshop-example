<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::pattern('id', '[0-9]+');

Route::get('/'     , ['as' => 'home.index'  , 'uses' => 'HomeController@index']);
Route::get('about' , ['as' => 'about.index' , 'uses' => 'AboutController@index']);
Route::get('random', ['as' => 'random.index', 'uses' => 'RandomController@index']);

Route::get('categories/{id}', ['as' => 'categories.show'   , 'uses' => 'CategoriesController@show']);
Route::get('posts'          , ['as' => 'posts.index'  , 'uses' => 'PostsController@index']);
Route::get('posts/{id}'     , ['as' => 'posts.show'   , 'uses' => 'PostsController@show']);
Route::post('comments'      , ['as' => 'comments.store'  , 'uses' => 'CommentsController@store']);

Route::get('login'         , ['as' => 'auth.login' , 'uses' => 'AuthController@index']);
Route::post('login/process', ['as' => 'auth.process' , 'uses' => 'AuthController@process']);
Route::get('logout'        , ['as' => 'auth.logout' , 'uses' => 'AuthController@logout']);

Route::group(array('before' => 'auth'), function()
{
    Route::get('categories'          , ['as' => 'categories.index'  , 'uses' => 'CategoriesController@index']);
    Route::get('categories/create'   , ['as' => 'categories.create' , 'uses' => 'CategoriesController@create']);
    Route::post('categories'         , ['as' => 'categories.store'  , 'uses' => 'CategoriesController@store']);
    Route::get('categories/{id}/edit', ['as' => 'categories.edit'   , 'uses' => 'CategoriesController@edit']);
    Route::patch('categories/{id}'   , ['as' => 'categories.update' , 'uses' => 'CategoriesController@update']);
    Route::delete('categories/{id}'  , ['as' => 'categories.destroy', 'uses' => 'CategoriesController@destroy']);
    
    Route::get('posts/create'   , ['as' => 'posts.create' , 'uses' => 'PostsController@create']);
    Route::post('posts'         , ['as' => 'posts.store'  , 'uses' => 'PostsController@store']);
    Route::get('posts/{id}/edit', ['as' => 'posts.edit'   , 'uses' => 'PostsController@edit']);
    Route::patch('posts/{id}'   , ['as' => 'posts.update' , 'uses' => 'PostsController@update']);
    Route::delete('posts/{id}'  , ['as' => 'posts.destroy', 'uses' => 'PostsController@destroy']);
});
