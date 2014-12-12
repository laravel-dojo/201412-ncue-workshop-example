<?php

class LoginController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /auth
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('login.index');
	}

}