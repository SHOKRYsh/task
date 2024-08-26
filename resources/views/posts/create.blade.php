@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" required>
        <br>
        <br>
        <textarea name="content" placeholder="Content" required></textarea>
        <button type="submit">Create</button>
    </form>
@endsection
