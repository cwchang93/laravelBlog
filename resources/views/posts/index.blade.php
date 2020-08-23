@extends('layout')

@section('content')
    @forelse ($posts as $post)
        <p>
            <h3>
                <a href="{{ route('posts.show', ['post'=> $post->id]) }}">
                    {{ $post-> title }}
                </a>
            </h3>
        </p>
    @empty
        <p class="noblog">No Blog YO~</p>
    @endforelse

@endsection
