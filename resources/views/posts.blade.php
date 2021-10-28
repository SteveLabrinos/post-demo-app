@extends('layout')

@section('banner')
    <h1>My Blog</h1>
@endsection

@section('content')
    @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'mb-6' : ''}}">
            <h1><a href="posts/{{ $post->slug }}">{{ $post->title  }}</a></h1>
            <div>{{ $post->excerpt }}</div>
        </article>
    @endforeach
@endsection

