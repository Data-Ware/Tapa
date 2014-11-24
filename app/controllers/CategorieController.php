<?php

class CategorieController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//var_dump($cat);
	 	if(Auth::user())
		{
		 	$cat = Categorie::all();	 		
		 	return View::make('dashboard.categorie.index', compact('cat'));
	 	}
	 	else
		{
			return Redirect::to('/login');
		}
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Auth::user())
		{
			return View::make('dashboard.categorie.create');
		}
		else
		{
			return Redirect::to('/login');
		}
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$cat = new Categorie;
		$cat->desc = Input::get('cat');
		$cat->save();
		return Redirect::to('categorie');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		if(Auth::user())
		{
			$cat = Categorie::find($id);
			return View::make('dashboard.categorie.show', compact('cat'));
		}
		else
		{
			return Redirect::to('/login');
		}		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
		if(Auth::user())
		{
			$cat = Categorie::find($id);
			return View::make('dashboard.categorie.edit')
			->with('cat', $cat);
		}
		else
		{
			return Redirect::to('/login');
		}	
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$item = Categorie::find($id);
		$input=Input::all();
		$item->desc=$input['cat'];
		$item->save();
		return Redirect::to('categorie');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if(Auth::user())
		{
			$cat = Categorie::find($id);
			$cat->delete();		
			return Redirect::to('categorie');
		}
		else
		{
			return Redirect::to('/login');
		}
	}

}
