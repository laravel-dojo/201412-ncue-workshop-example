<?php

class CategoriesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /categories
	 *
	 * @return Response
	 */
	public function index()
	{
        $categories = Category::all();
        
        $data = compact('categories');
        
		return View::make('categories.index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /categories/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $categories = Category::all();
        
        $data = compact('categories');
        
		return View::make('categories.create', $data);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /categories
	 *
	 * @return Response
	 */
	public function store()
	{
		Category::create(Input::all());
        
        return Redirect::route('categories.index')->with('success', '成功新增分類');
	}

	/**
	 * Display the specified resource.
	 * GET /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $posts = Post::where('category_id', $id)->orderBy('created_at', 'desc')->get();
        $categories = Category::all();
        
        $data = compact('posts', 'categories');
        
		return View::make('categories.show', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /categories/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $editing_category = Category::find($id);
        $categories = Category::all();
        
        $data = compact('editing_category', 'categories');
        
		return View::make('categories.edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$category = Category::find($id);
        $category->update(Input::all());
        
        return Redirect::route('categories.index')->with('success', '成功更新分類');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Category::destroy($id);
        
        return Redirect::route('categories.index')->with('success', '成功刪除分類');
	}

}