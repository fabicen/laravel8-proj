<!-- resources/views/child.blade.php -->
 
@extends('layouts.home')
 
@section('title', 'levral')
 
@section('sidebar')
    @parent
    <h3>Side bar 3</h3>
      <br>
      <br>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
    <p>This is my body content.</p>
@endsection
