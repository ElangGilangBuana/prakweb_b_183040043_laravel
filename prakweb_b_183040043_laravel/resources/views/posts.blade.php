@extends('layouts.main')

@section('container')

    @foreach ($posts as $p)

    <article class="mb-4 border-bottom pb-2">
    <h4><a href="/posts/{{ $p->slug }}" class="text-decoration-none">{{ $p->title }}</a></h4>

    <p>By. <a href="#" class="text-decoration-none">{{ $p->user->name }}</a> in <a href="/categories/{{ $p->category->slug }}" class="text-decoration-none">{{ $p->category->name }}</a></p>
    {{-- {!! $p->body !!} --}}

    <p>{{ $p->excerpt }}</p>

    <a href="/posts/{{ $p->slug }}" class="text-decoration-none">Read more.. </a>
    </article>


    @endforeach

@endsection

