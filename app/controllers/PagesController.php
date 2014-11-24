<?php

class PagesController extends BaseController {


	public function tapa()
	{
		return View::make('tapa');
	}

	public function index()
	{
		return View::make('index');
	}

	
	

	public function dashboard()
	{
		

		if(Auth::user())
		{
		
			return View::make('dashboard.index');
		}
		else
		{
		
			return Redirect::to('/login');
		}
	}

	
	public function login()
	{
		if(!Auth::user())
		{
			return View::make('dashboard.login');
		}
		else
		{
			
			return View::make('dashboard.index');
			
		}
	}

	public function post_login()
	{
		$input = Input::all();
	  
		$rules = array(
			'username' => 'required',
			'password' => 'required'

		);

		$v = Validator::make($input, $rules);

		if($v->fails())
		{
		
			return Redirect::to('/login')->withErrors($v);
		}
		else
		{
		 
			$credentials = array(
				'username' => $input['username'],
				'password' => $input['password']
			);

			if(Auth::attempt($credentials))
			{
			
				return Redirect::to('dashboard');
			}
			else
			{
			
				return Redirect::to('/login');
			}
		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}
}