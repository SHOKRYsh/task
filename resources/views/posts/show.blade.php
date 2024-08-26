@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <h3>Comments</h3>
    @foreach($post->comments as $comment)
        <div>
            <p>{{ $comment->content }}</p>
            @if(Auth::id() === $comment->user_id)
                <form action="{{ route('comments.destroy', $comment) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            @endif
        </div>
    @endforeach

    @auth
        <form action="{{ route('comments.store', $post) }}" method="POST">
            @csrf
            <textarea name="content" placeholder="Add a comment..." required></textarea>
            <button type="submit">Comment</button>
        </form>
    @endauth
@endsection
