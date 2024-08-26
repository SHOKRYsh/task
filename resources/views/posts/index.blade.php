@extends('layouts.app')

@section('content')
    <h1>All Posts</h1>
    @foreach($posts as $post)
        <div>
            <h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
            <br>
            <p>{{ $post->content }}</p>

            @auth
                @if(Auth::id() === $post->user_id)
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this post?');">Delete</button>
                    </form>
                @endif
            @endauth
        </div>
        <hr>
    @endforeach
@endsection
