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
		return View::make('about.index');
	}

}