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

	return View::make('index');
});


#Lorem Ipsem Generator Page
Route::get('/lorem', function() {

	return View::make('lorem');
	
});

#Lorem Ipsem Generator Results Page
Route::post('/lorem/', function() {

	$lorem_number = Input::get('li_number');
	echo $lorem_number;
	$generator = new Badcow\LoremIpsum\Generator();
    $paragraphs = $generator->getParagraphs($lorem_number);

    $display = implode('<p>', $paragraphs);
    return View::make('lorem');
});

#Random User Generator Page
Route::get('/users', function() {

	return 'List specified # of users';
});

#Random User Generator Page
Route::get('/users', function() {

	return 'reports of my death were greatly exaggerated.';
});

#practice for JSON 
Route::get('/data', function() {

	return 'Get the contents of the JSON object';
});