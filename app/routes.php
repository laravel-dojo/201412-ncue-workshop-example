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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('new-post-1', function()
{
	$post = new Post;
    $post->title = 'My new post title';
    $post->save();
    
    echo '<pre>';
    dd($post);
});

Route::get('new-post-2', function()
{
	$post = Post::create([
        'title'   => 'My new post title',
        'content' => 'My new post content',
    ]);
    
    echo '<pre>';
    dd($post);
});

Route::get('delete-post', function()
{
	$post = Post::find(1);
    $post->delete();
    
    echo '<pre>';
    dd($post);
});

Route::get('destroy-post', function()
{
	Post::destroy(2);
    Post::destroy([3, 4, 5]);
    Post::destroy(6, 7, 8);

    dd('done');
});

Route::get('update-post-1', function()
{
	$post = Post::find(9);
    $post->title = 'Update my post title';
    $post->save();
    
    echo '<pre>';
    dd($post);
});

Route::get('update-post-2', function()
{
	$post = Post::find(10);
    $post->update([
        'title'   => 'My update post title',
        'content' => 'My update post content',
    ]);
    
    echo '<pre>';
    dd($post);
});

Route::get('find', function()
{
    echo '<pre>';
    
	$category_posts = Post::all();
    var_dump($category_posts);
    
    $first_post_of_category = Post::find(11);
    var_dump($first_post_of_category);
    
    $category_posts = Post::where('category_id', '=', 1)->orderBy('created_at', 'desc')->get();
    var_dump($category_posts);
    
    $first_post_of_category = Post::where('category_id', '=', 1)->orderBy('created_at', 'desc')->first();
    var_dump($first_post_of_category);
    
    echo '</pre>';
 
    dd('done');
});

Route::get('collection', function()
{
    $category_posts = Post::where('category_id', '=', 1)->orderBy('created_at', 'desc')->get();
    foreach($category_posts as $post)
    {
        echo $post->id.': '.$post->title.'<br>';
    }
 
    dd();
});

Route::get('random', function()
{
    echo '<pre>';
    
    $random_post = Post::where('category_id', '=', 1)->orderBy('created_at', 'desc')->get()->random();
    var_dump($random_post);
    
    $random_posts = Post::where('category_id', '=', 1)->orderBy('created_at', 'desc')->get()->random(3);
    var_dump($random_posts);
 
    echo '</pre>';
    
    dd('done');
});

Route::get('relationship', function()
{
    $post = Post::find(1);
    
    echo $post->category->name.'<br>';
    foreach($post->comments as $comment)
    {
        echo $comment->id.': '.$comment->content.'<br>';
    }
    
    echo '<pre>';
    var_dump($post->category);
    var_dump($post->comments);
    echo '</pre>';
    
    dd('done');
});