<?php

class AboutController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /about
	 *
	 * @return Response
	 */
	public function index()
	{
        $categories = Category::all();
        
        $data = compact('categories');
        
		return View::make('about.index', $data);
	}

}