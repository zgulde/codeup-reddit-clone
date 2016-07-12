@extends('layouts.master')

@section('title', 'Viewing all posts')

@section('content')
    <h1 class="text-center">All Posts</h1>

    @foreach($posts as $post)
        <h2>
            <a href="{{ $post->link }}">
                {{ $post->title }}
            </a>

            @if(Auth::check())
                <div class="pull-right">
                    <a class="btn btn-warning" href="{{ action('PostsController@edit', $post->id) }}">Edit</a>
                    <form style="display:inline" action="{{ action('PostsController@destroy', $post->id) }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                </div>
            @endif

        </h2>
        <p>
            Posted: {{ $post->created_at->diffForHumans() }} | 
            By: {{ $post->user->name }}
        </p>
    @endforeach
    {!! $posts->links() !!}
@stop
