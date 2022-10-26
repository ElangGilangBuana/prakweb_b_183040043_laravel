@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $title }}</h1>

    @foreach ($posts as $p)

    <article class="mb-4 border-bottom pb-2">
    <h4><a href="/posts/{{ $p->slug }}" class="text-decoration-none">{{ $p->title }}</a></h4>

    <p>By. <a href="/authors/{{ $p->author->username}}" class="text-decoration-none">{{ $p->author->name }}</a> in <a href="/categories/{{ $p->category->slug }}" class="text-decoration-none">{{ $p->category->name }}</a></p>
    {{-- {!! $p->body !!} --}}

    <p>{{ $p->excerpt }}</p>

    <a href="/posts/{{ $p->slug }}" class="text-decoration-none">Read more.. </a>
    </article>


    @endforeach

@endsection

