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
	 	$cat = Categorie::all();	 		
	 	return View::make('dashboard.categorie.index', compact('cat'));
	 
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('dashboard.categorie.create');
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
		$cat = Categorie::find($id);
		return View::make('dashboard.categorie.show', compact('cat'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cat = Categorie::find($id);
		return View::make('dashboard.categorie.edit')
		->with('cat', $cat);
		//$block = Block::with(['blockheaders', 'items', 'imgs'])->find($id);
		//return $block;
		// $block=Categorie::with(['blocks', 'blocks.blockheaders', 'blocks.items', 'blocks.imgs'])->find($id);
		// return View::make('dashboard.block.testblock')
		// ->with('block', $block);
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
		$cat = Categorie::find($id);

		$cat->delete();
		
		return Redirect::to('categorie');
	}

}
