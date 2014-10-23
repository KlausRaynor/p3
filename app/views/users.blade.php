@extends('_master')

@section('content')

<form method='POST' action='/users'>

<p>How many Heroes do you want? (Max 50): <input type='text' name='userCount' size='2'><input type='submit'></p>

@stop