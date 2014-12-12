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

Route::get('/', function()
{
	return View::make('home.index');
});

Route::get('about', function()
{
	return View::make('about.index');
});

Route::get('categories', function()
{
	return View::make('categories.index');
});

Route::get('categories/{id}', function($id)
{
	return View::make('categories.show');
});

Route::get('categories/create', function()
{
	return View::make('categories.create');
});

Route::get('categories/{id}/edit', function($id)
{
	return View::make('categories.edit');
});

Route::get('posts', function()
{
	return Redirect::to('/');
});

Route::get('posts/{id}', function($id)
{
	return View::make('posts.show');
});

Route::get('posts/create', function()
{
	return View::make('posts.create');
});

Route::get('posts/{id}/edit', function($id)
{
	return View::make('posts.edit');
});

Route::get('random', function()
{
	return View::make('posts.show');
});

Route::get('login', function()
{
	return View::make('login.index');
});