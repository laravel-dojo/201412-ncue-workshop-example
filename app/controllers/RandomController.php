<?php

class RandomController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /random
	 *
	 * @return Response
	 */
	public function index()
	{
        $post = Post::all()->random();
        $categories = Category::all();
        
        $data = compact('post', 'categories');
        
		return View::make('posts.show', $data);
	}

}