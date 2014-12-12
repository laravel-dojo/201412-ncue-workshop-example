<?php

class PostsController extends \BaseController {

    public function __construct()
    {
        $this->beforeFilter('csrf', ['on' => 'post']);
    }
    
	/**
	 * Display a listing of the resource.
	 * GET /posts
	 *
	 * @return Response
	 */
	public function index()
	{
		return Redirect::to('/');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /posts/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $categories = Category::all();
        
        $data = compact('categories');
        
		return View::make('posts.create', $data);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /posts
	 *
	 * @return Response
	 */
	public function store()
	{
        $inputs = Input::all();
        
        $validation = Validator::make($inputs, Post::$rules);
        
        if ($validation->fails())
        {
            return Redirect::back()->withErrors($validation)->withInput();
        }
        
        Post::create($inputs);

		return Redirect::route('home.index')->with('success', '新增文章成功');
	}

	/**
	 * Display the specified resource.
	 * GET /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $post = Post::find($id);
        
        if (is_null($post))
        {
            return Redirect::route('home.index')->with('error', '找不到該文章');
        }
        
        $categories = Category::all();
        
        $data = compact('post', 'categories');
        
		return View::make('posts.show', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /posts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $post = Post::find($id);
        
        if (is_null($post))
        {
            App::abort(404);
        }
        
        $categories = Category::all();
        
        $data = compact('post', 'categories');
        
		return View::make('posts.edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);
        
        $inputs = Input::all();
        
        $validation = Validator::make($inputs, Post::$rules);
        
        if ($validation->fails())
        {
            return Redirect::back()->withErrors($validation)->withInput();
        }
        
        $post->update(Input::all());
        
        return Redirect::route('home.index')->with('success', '成功更新文章');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::destroy($id);

		return Redirect::route('home.index')->with('success', '成功刪除文章');
	}

}