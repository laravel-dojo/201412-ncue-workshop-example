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
	return 'Home Page';
});

Route::get('about', function()
{
	return 'About Page';
});

Route::get('categories', function()
{
	return 'Categories List';
});

Route::get('categories/{id}', function($id)
{
	return 'Show Category: '.$id;
});

Route::get('categories/create', function()
{
	return 'Create a new Category';
});

Route::get('categories/{id}/edit', function($id)
{
	return 'Edit Category: '.$id;
});

Route::get('posts', function()
{
	return 'Posts List';
});

Route::get('posts/{id}', function($id)
{
	return 'Show Post: '.$id;
});

Route::get('posts/create', function()
{
	return 'Create a new Post';
});

Route::get('posts/{id}/edit', function($id)
{
	return 'Edit Post: '.$id;
});

Route::get('random', function()
{
	return 'Random Post!';
});

Route::get('login', function()
{
	return 'Login Page';
});