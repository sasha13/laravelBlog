@extends('layouts.master')

@section('content')

    <h2 class="blog-post-title">{{ $post->title }}</h2>
    <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="#">Mark</a></p>

    <p>{{ $post->body }}</p>

@endsection
