@extends('layouts.master')

@section('title', 'Edit a Post')

@section('content')
    <h1>Edit a Post</h1>
    <form action="{{ action('PostsController@update', $post->id) }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <label for="title">Title:</label>
            @if($errors->has('title'))
                <p class="alert alert-danger">{{ $errors->first('title') }}</p>
            @endif
            <input class="form-control" type="text" name="title" value="{{ old('title') ? old('title') : $post->title }}">
        </div>

        <div class="form-group">
            <label for="link">Link:</label>
            @if($errors->has('link'))
                <p class="alert alert-danger">{{ $errors->first('link') }}</p>
            @endif
            <input class="form-control" type="text" name="link" value="{{ old('link') ? old('link') : $post->link }}">
        </div>

        <input class="btn btn-primary btn-block" type="submit">
    </form>
@stop
