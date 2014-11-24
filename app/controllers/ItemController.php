<?php

class ItemController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		if(Auth::user())
		{	
		$items = Item::all();
		return View::make('dashboard.items.index', compact('items'));
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
			$block = DB::table('blocks')->lists('id_block', 'id_block');
			return View::make('dashboard.items.create', compact('block'));
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
		$item = new Item;
		$item->desc = Input::get('item');
		$item->id_block = Input::get('id_block');
		$item->save();
		return Redirect::to('items');
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
			$item = Item::find($id);
			return View::make('dashboard.items.show', compact('item'));
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
	 * @return Response //insert by htran
	 */
	public function edit($id)
	{
		if(Auth::user())
		{
			$item = Item::find($id);
			return View::make('dashboard.items.edit')
			->with('item', $item);
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
		$item = Item::find($id);
		$input=Input::all();
		$item->desc=$input['item'];
		$item->save();
		return Redirect::to('items');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response  { function ()return confirm ('Are you sure ?')
	 * //onclick="return comfirm('are you sure ?')
	 */
	public function destroy($id)
	{
		
		if(Auth::user())
		{
			$item = Item::find($id);
			$item->delete();
			return Redirect::to('items');
		}
		else
		{	
			return Redirect::to('/login');
		}	
	}


}