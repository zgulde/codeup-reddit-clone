@extends('layouts.master')

@section('title', 'Create a new Post')

@section('content')
    <h1>Create A New Post</h1>
    <form action="{{ action('PostsController@store') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="title">Title:</label>
            @if($errors->has('title'))
                <p class="alert alert-danger">{{ $errors->first('title') }}</p>
            @endif
            <input class="form-control" type="text" name="title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="link">Link:</label>
            @if($errors->has('link'))
                <p class="alert alert-danger">{{ $errors->first('link') }}</p>
            @endif
            <input class="form-control" type="text" name="link" value="{{ old('link') }}">
        </div>

        <input class="btn btn-primary btn-block" type="submit">
    </form>
@stop
