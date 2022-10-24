{{-- @dd($post); --}}
@extends('layouts.main')

@section('container')

<article>
    <h2 class="mb-5">{{ $post->title }}</h2>
    <p>By. Elang Gilang in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
</article>

<a href="/blog" class="badge rounded-pill bg-primary">Back To Post</a>
@endsection