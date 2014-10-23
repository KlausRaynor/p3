<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

#Homepage
Route::get('/', function()
{

/*
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs(5);
	
	echo implode('<p>', $paragraphs);

*/
	return View::make('index');
});

Route::get('/users/{number?}', function($number) {

	return 'List specified # of users';
});

#Display the form for a new user
Route::get('/add', function() {

});

#Process the form for a new user
Route::post('/add', function() {

});

#Display the form to edit a user
Route::get('/edit/{name}', function() {

});

#Process the form to edit a user
Route::post('/edit/', function() {

});

#practice for JSON 
Route::get('/data', function() {

	return 'Get the contents of the JSON object';
});