@extends('_master')


@section('content')
<br>
<br>
<form method = "POST" action = "/lorem">
How many paragraphs do you want? (Max 99):<input type="text" name="li_number" size="2">
<input type="submit" name="submit">

</form>
@stop

@section('results')

	<p></p>
@stop