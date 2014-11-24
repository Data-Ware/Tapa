<?php
class CateringsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /caterings
	 *
	 * @return Response
	 */
	public function index()
	{
		$cat=Categorie::with(['blocks', 'blocks.blockheaders', 'blocks.items', 'blocks.imgs'])->get();
		return View::make('dashboard.caterings',array( 'cat' => $cat ));
	}


	/**
	 * Show the form for creating a new resource.
	 * GET /caterings/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}
	/**
	 * Store a newly created resource in storage.
	 * POST /caterings
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /caterings/{id}
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
	 * GET /caterings/{id}/edit
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
	 * PUT /caterings/{id}
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
	 * DELETE /caterings/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
