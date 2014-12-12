<?php

class AuthController extends \BaseController {

	public function index()
	{
		if (Auth::check())
		{
    		return Redirect::route('home.index')->with('success', '成功登入');
		}
        
		return View::make('login.index');
	}
    
    public function process()
	{
		$validator = Validator::make(Input::all(), [
            'username' => 'required',
			'password' => 'required|between:3,32',
        ]);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		if (Auth::attempt(['username' => Input::get('username'), 'password' => Input::get('password')], Input::get('remember-me')))
		{

        	return Redirect::route('home.index')->with('success', '成功登入');
    	}

		return Redirect::back()->withInput()->with('error', '請檢查登入資訊');
	}

	public function logout()
	{
		Auth::logout();
		
		return Redirect::route('home.index')->with('success', '已成功登出');
	}

}