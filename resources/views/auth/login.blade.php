@extends('layouts.master')

@section('title', 'Log In')

@section('content')
    <h1>Log In</h1>
    <form action="{{ action('Auth\AuthController@postLogin') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" class="form-control" type="text" name="email" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" class="form-control" type="password" name="password">
        </div>

        <input class="btn btn-primary btn-block" type="submit" value="Log In">
    </form>
@stop
