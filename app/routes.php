<?php

Route::get('/', function()
{
	return View::make('home.home');
});
Route::get('about',function()
{
	return View::make('about.about');
});
Route::get('cafe',function()
{
	return View::make('cafe.cafe');
});
Route::get('catering',function()
{
	$cat=Categorie::with(['blocks', 'blocks.blockheaders', 'blocks.items', 'blocks.imgs'])->get();
	return View::make('catering.catering', array( 'cat' => $cat ));
});
Route::get('contact',function()
{
	return View::make('contact.contact');
});
Route::get('/dashboard', function() 
{
	return View::make('dashboard.index');
});



Route::resource('block', 'BlockController');
Route::resource('blockheader', 'BlockHeaderController');
Route::resource('categorie', 'CategorieController');
Route::resource('items', 'ItemController');
Route::resource('imgs', 'ImgsController');

//single block  test ok
route::get('Single-block-ref', function(){

	//$block= Block::find(2);
	$block= Block::find(2);
	$cat = $block->categorie;
	($block->categorie);
	 //var_dump[$block, $cat];
	 return  [$block, $cat];

});

// Route::post('test', function()
// {
// 	// return 'in test';
// 	$input = Input::all();
// 	return  $input;
// });

