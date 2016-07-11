@extends('layouts.master')

@section('title', 'Sign Up')

@section('content')
    <h1>Sign Up</h1>
    <form action="{{ action('Auth\AuthController@postRegister') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="name">Name</label>
            @if($errors->has('name'))
                <p class="alert alert-danger">{{ $errors->first('name') }}</p>
            @endif
            <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            @if($errors->has('email'))
                <p class="alert alert-danger">{{ $errors->first('email') }}</p>
            @endif
            <input id="email" class="form-control" type="text" name="email" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            @if($errors->has('password'))
                <p class="alert alert-danger">{{ $errors->first('password') }}</p>
            @endif
            <input id="password" class="form-control" type="password" name="password">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Password</label>
            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation">
        </div>

        <input class="btn btn-primary btn-block" type="submit" value="Sign Up!">
    </form>
@stop
