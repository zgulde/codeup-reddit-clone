@extends('layouts.master')

@section('title', 'Viewing all posts')

@section('content')
    <h1 class="text-center">All Posts</h1>

    @foreach($posts as $post)
        <h2>
            <a href="{{ $post->link }}">
                {{ $post->title }}
            </a>
        </h2>
    @endforeach
@stop
