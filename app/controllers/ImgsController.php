<?php

class ImgsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /imgs
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Auth::user())
		{
			$imgs = Img::all();
		 	return View::make('dashboard.imgs.index', compact('imgs'));
		}
		else
		{
			return Redirect::to('/login');
		}
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /imgs/create
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Auth::user())
		{
			// $cat = DB::table('categories')->lists('desc', 'id_cat');
			$block = DB::table('blocks')->lists('id_block', 'id_block');
			return View::make('dashboard.imgs.create', compact('block'));
		}
		else
		{
			return Redirect::to('/login');
		}
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /imgs
	 *
	 * @return Response
	 */
	public function store()
	{
		// return 'here';
		//$images = $input['files'];
		//foreach($images as $image)


	 	//var_dump($_POST);
		$filename = Input::get('imgs');
	    $file = Input::file('img');

	    $extension = $file->getClientOriginalExtension();
	    $file->move('public/images', $filename . '.' . $extension);


			// } catch(Exception $e) {
			//  echo "there error" .$e->getMessage();

			// }
			  //var_dump($alt);


		//image manipulation with intervention
		//main image
		$manipulation = Image::make('public/images/' . $filename . '.' . $extension);
		$manipulation->resize(400, 267);
		$manipulation->save('../public/images/menuimages/' . $filename . '.' . $extension);

		//thumbnail image
		$manipulation = Image::make('public/images/' . $filename . '.' . $extension);
		$manipulation->resize(169, 113);
		$manipulation->save('../public/images/menuthumbs/' . $filename . '.' . $extension);

		//delete original image
		unlink('public/images/' . $filename . '.' . $extension);

		//refence image into database
		$dbImg = new Img;
		$dbImg -> img_path = 'images/menuthumbs/' . $filename . '.' . $extension;
		$dbImg -> title = $filename;
		$dbImg -> a_path = 'images/menuimages/' . $filename . '.' . $extension;
		$dbImg -> alt = $filename;

		$dbImg -> id_block = Input::get('id_block');

		$dbImg -> save();
		 return Redirect::to('imgs');
	}

	/**
	 * Display the specified resource.
	 * GET /imgs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		if(Auth::user())
		{
		 $imgs = Img::find($id);
		 return View::make('dashboard.imgs.show', compact('imgs'));
		}
		else
		{	
			return Redirect::to('/login');
		}

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /imgs/{id}/edit
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
	 * PUT /imgs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$imgs = Img::find($id);
		$input=Input::all();
		$dbImg -> title = $filename;
		$dbImg -> id_block = $filename;
		$imgs->save();
		return Redirect::to('imgs');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /imgs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if(Auth::user())
		{
			$imgs = Img:: find ($id);
			$imgs->delete();
			return Redirect::to('imgs');
		}
		else
		{
			return Redirect::to('/login');
		}	
	}

}