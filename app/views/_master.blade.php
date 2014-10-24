<!DOCTYPE HTML>
<html>
<head>
	<meta charset='utf-8'>

	<!--Imports style sheet from public folder-->
{{ HTML::style('css/style.css'); }}

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>

<body>
<div id="container">
	<div id='image_div'>
	<img class="banner" src='/userFaces/vault_boy.png' alt='Dev Buddy!'></div>
	@yield('content')  

	<div id="results">@yield('results')</div>
	<a href='/'> Back to Main Menu </a>
	</div>
</body>
</html>