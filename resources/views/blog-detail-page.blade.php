@extends('layout')

@section('content')

    <article id="{{ $post->id }}">
        <h2>
            {{ $post->title }}
        </h2>

        <a href="/log-posts">Back</a>
    </article>

@endsection
