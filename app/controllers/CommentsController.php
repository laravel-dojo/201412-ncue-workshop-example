<?php

class CommentsController extends \BaseController {

    public function __construct()
    {
        $this->beforeFilter('csrf', ['on' => 'post']);
    }

	/**
	 * Store a newly created resource in storage.
	 * POST /comments
	 *
	 * @return Response
	 */
	public function store()
	{
        $inputs = Input::all();
        
        $validation = Validator::make($inputs, Comment::$rules);
        
        if ($validation->fails())
        {
            return Redirect::route('posts.show', $inputs['post_id'])->withErrors($validation)->withInput();
        }
        
        Comment::create($inputs);

		return Redirect::route('posts.show', $inputs['post_id'])->with('success', '回覆文章成功');
	}

}