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

	#Lorem Ipsem Generator Page ++++
	Route::get('/lorem', function() {

		return View::make('lorem');
		
	});

#Lorem Ipsem Generator Page Results
Route::post('/lorem/', function() {

	#The following logic was taken directly from the README.md from the BadCow Lorem Ipsum. Altered only to fit
	#within my Route

	$lorem_number = Input::get('li_number');
	if($lorem_number > 99 || $lorem_number < 0 || $lorem_number >! 0) {

		#echo the view first so the form stays on top of the page
		echo View::make('lorem');
		return "<h1>Please enter a number between 0 and 99! <h1>";
	}
	else {
		$generator = new Badcow\LoremIpsum\Generator();
	    $paragraphs = $generator->getParagraphs($lorem_number);


	    $display = '<div id=\'ipsumdiv\'>'.implode('<p>', $paragraphs).'</div>';

	  
	    echo View::make('lorem');
	    
	    return $display;
    }
});

#Random User Generator Page
Route::get('/users', function() {

		return View::make('/users');
	});

#Random User Generator Page Results
Route::post('/users', function() {

	//contains number of users in $users variable
	$users = Input::get('li_number');

	//checks to make sure no input > 50 or an invalid option
	if($users > 50 || $users < 0) {
		echo View::make('/users');
		return '<h1>Please input a number between 0 and 50!</h1>';
		
	}
	else{

	//returns our input field and user page to the top, listing all users underneath
	echo View::make('/users');

	//creates instance of name generator
	$faker = Faker::create();
	$userArray = array();

	for($i=0; $i<$users; $i++){
	
	#puts three different 'faker' variables into an array.	
	array_push($userArray, $faker->name, $faker->address, $faker->catchPhrase);

	}
	#counts number of elemenets in user array
	$arrayCount = count($userArray);


	$view = '';
	$filenameArray = glob('userFaces'.'/*.*');

	#forcing only 3 parameters per output (array_push hard coded) so the following for loop works 
	for($i=0; $i< $arrayCount; $i+=3) {

		//grab random image from userFaces
		$randomHero = array_rand($filenameArray);


		$view .= '<div id=\'container\'>';			
		$view .= '<img class=\'border\' src=\''.$filenameArray[$randomHero].'\'>'.'<br>';
		
		#outputs view variable for each record
		$view .= '<strong>NAME: </strong>'.$userArray[$i].'<br>';
		$view .= '<strong>ADDRESS: </strong>'.$userArray[$i + 1].'<br>';
		$view .= '<strong>CATCH PHRASE: "</strong>'.$userArray[$i + 2].'"</div><br><br>';


		#removes variable from array so no two hero faces are used twice.
		unset($filenameArray[$randomHero]);
	}
	
	//Prints all names in array
	return $view;

	}
});



