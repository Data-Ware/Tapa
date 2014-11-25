<?php
class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Auth::user())
		{
			$users = User::all();
			return View::make('dashboard.users.index', compact('users'));
		}
		else
		{
			return Redirect::to('/login');
		}	
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Auth::user())
		{
			return View::make('dashboard.users.create');
		}
		else
		{
			return Redirect::to('/login');
		}	
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
        $validation = Validator::make($input, User::$rules);

        if ($validation->passes())
        {
            $user = new user;
            $user->username = Input::get('username');
            $user->password = Input::get('password');
            $user->name = Input::get('name');
            $user->role_id= Input::get('role_id');
            $user->save();
          
            //return Redirect::route('dashboard.users.index');
            return Redirect::to('users');
            
        }

        return Redirect::to('dashboard.users.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		if(Auth::user())
		{
			$users = Users::find($id);
			return View::make('dashboard.users.show', compact('users'));
		}
		else
		{	
			return Redirect::to('/login');
		}	
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		 if(Auth::user())
		{
			 $userx = User::find($id);
			 return View::make('dashboard.users.edit')
			->with('userx', $userx);
		}
		else
		{	
			return Redirect::to('/login');
		}
	

        
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		 $input = Input::all();
        $validation = Validator::make($input, User::$rules);
      
        if ($validation->passes())
        {
            $user = User::find($id);
            $input=Input::all();
            $user->username = Input::get('username');
            $user->password = Input::get('password');
            $user->name = Input::get('name');
            $user->role_id= Input::get('role_id');
            $user->save();
            return Redirect::to ('users');
        }
		
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
			
    {
      if(Auth::user())
		{
	       $user = User::find($id);
	       $user->delete();
	       return Redirect::to('users');
	    }
		else
		{
			return Redirect::to('/login');
		}   
    }
	
}