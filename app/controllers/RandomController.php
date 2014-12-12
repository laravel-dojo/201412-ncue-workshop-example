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
		return View::make('posts.show');
	}

}