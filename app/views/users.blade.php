@extends('_master')

@section('content')

<form method='POST' action='/users'>
	<label for'userCount'>Select Number of Heroes (Max 50):</label>
		<input type="text" name="li_number" size="2">
		<input type="submit">
</form>
@stop