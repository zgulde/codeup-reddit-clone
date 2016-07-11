@extends('layouts.master')

@section('title', 'home page')

@section('content')
    @if(Auth::check())
        <h1>Welcome, {{ Auth::user()->name }}.</h1>
        <p><a href="/auth/logout">Logout</a></p>
    @else
        <h1><a href="/auth/login">Login</a> | <a href="/auth/register">Register</a></h1>
    @endif
@stop
