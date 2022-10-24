@extends('layouts.main')

@section('container')

<h1 class="mb-5">Post Categories</h1>

 
    @foreach ($categories as $c)
     <ul>
        <li> 
            <a href="/categories/{{ $c->slug }}">{{ $c->name }}</a>
        </li>
     </ul>
    
    <h2>
       
    </h2>

    @endforeach

@endsection

