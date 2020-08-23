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
            
                <form method="POST" action="{{ route('posts.destroy', ['post'=> $post->id]) }}">
                        @csrf
                        @method('DELETE')
                        {{-- <button type="submit">Delete!</button> --}}
                        <input type="submit" />

                    </form>

            </h3>
        </p>
    @empty
        <p class="noblog">No Blog YO~</p>
    @endforelse

@endsection
