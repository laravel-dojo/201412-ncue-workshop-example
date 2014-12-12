<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        $categories = Category::all();
        
        $data = compact('posts', 'categories');
        
		return View::make('home.index', $data);
	}

}
