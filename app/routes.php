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

#Lorem Ipsem Generator Page Results
Route::post('/lorem/', function() {

	//The following logic was taken directly from the README.md from the BadCow Lorem Ipsum. Altered only to fit
	//within my Route

	$lorem_number = Input::get('li_number');
	
	$generator = new Badcow\LoremIpsum\Generator();
    $paragraphs = $generator->getParagraphs($lorem_number);

    $display = implode('<p>', $paragraphs);
    echo View::make('lorem');
    
    return $display;
    
});

#Random User Generator Page
Route::get('/users', function() {

	return View::make('/users');
});

#Random User Generator Page Results
Route::post('/users', function() {

	//contains number of users in $users variable
	$users = Input::get('userCount');
	if($users >50) {
		echo 'Please input less than 50!';
	}
	//returns our input field and user page to the top, listing all users underneath
	echo View::make('/users');

	$faker = Faker::create();
	for($i=0; $i<$users; $i++){
	echo $faker->name; 
	}
	return;
});

#practice for JSON 
Route::get('/data', function() {

	return 'Get the contents of the JSON object';
});



