@extends('layouts.nav')
@section('title','welcome page')
@section('content')
<form action="/users" method="POST">
    @csrf
    <input type="text" name="user-name" >
    <button type="submit">Submit</button>

</form>
@endsection
