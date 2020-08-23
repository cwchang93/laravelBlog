@extends('layout')

@section('content')
    @forelse ($posts as $post)
        <p>
            <h3>
                <a href="{{ route('posts.show', ['post'=> $post->id]) }}">
                    {{ $post-> title }}
                </a>
                <a href="{{ route('posts.edit', ['post'=> $post->id]) }}">
                    Edit
                </a>
            </h3>
        </p>
    @empty
        <p class="noblog">No Blog YO~</p>
    @endforelse

@endsection
