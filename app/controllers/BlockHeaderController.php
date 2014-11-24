<?php

class BlockHeaderController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Auth::user())
		{
			$items = BlockHeader::all();
			return View::make('dashboard.blockheader.index', compact('items'));
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
			return View::make('dashboard.blockheader.create', compact('block'));
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
		$item = new  blockheader;
		$item->header= Input::get('header');
		$item->sub_header= Input::get('sub_header');
		$item->price= Input::get('price');
		$item->id_block = Input::get('id_block');
		$item->save();
		return Redirect::to('blockheader');
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
		if(Auth::user())
		{
			$item = Blockheader::find($id);
			return View::make('dashboard.blockheader.edit')
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
		$item = Blockheader::find($id);
		$input=Input::all();
		$item->header = Input::get('header');
		$item->sub_header= Input::get('sub_header');
		$item->price = Input::get('price');
		$item->save();
		return Redirect::to('blockheader');
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
			$item = Blockheader::find($id);
			$item->delete();
			return Redirect::to('blockheader');
		}
		else
		{
			return Redirect::to('/login');
		}	
	}


}

