@extends('layouts.master')

@section('title', 'home page')

@section('content')
    @if(Auth::check())
        <h1>Welcome, {{ Auth::user()->name }}.<p class="pull-right small"><a href="/auth/logout">Logout</a></p></h1>
        <p><a href="{{ action('PostsController@create') }}">Create a New Post</a> | <a href="{{ action('PostsController@index') }}">View All Posts</a></p>
    @else
        <h1><a href="/auth/login">Login</a> | <a href="/auth/register">Register</a></h1>
    @endif
@stop
