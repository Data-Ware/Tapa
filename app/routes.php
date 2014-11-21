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
/*Route::get('/dashboard', function()
{
	return View::make('dashboard.index');
});*/
Route::get('login', 'PagesController@login');
Route::post('login', 'PagesController@post_login');
Route::get('dashboard', 'PagesController@dashboard');



Route::resource('block', 'BlockController');
Route::resource('blockheader', 'BlockHeaderController');
Route::resource('categorie', 'CategorieController');
Route::resource('items', 'ItemController');
Route::resource('imgs', 'ImgsController');



