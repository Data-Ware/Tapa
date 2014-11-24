<?php

class BlockController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()

	{
		if(Auth::user())
		{
			$items = Block::all();
			return View::make('dashboard.block.index', compact('items'));
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
			$cat = DB::table('categories')->lists('desc', 'id_cat');
			return View::make('dashboard.block.create', compact('cat'));
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
		$block = new Block;
		$block->id_cat = Input::get('id_cat');
		$block->save();
		return Redirect::to('block');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
			$block =Block::find($id);
			$block->delete();
			return Redirect::to('block');
		}
		else
		{
			return Redirect::to('/login');
		}
	}


}

