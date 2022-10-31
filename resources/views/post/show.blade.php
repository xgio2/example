@extends('layouts.mane')
@section('content')
<div>
    <div>
            <div>{{ $post->id }}. {{ $post->title }}</div>
            <div>{{ $post->contents }}</div>
    </div>
    <div>
        <a href="{{ route('post.index') }}">BACK</a>
    </div>
    <div>
        <a href="{{ route('post.edit', $post->id) }}">Edit</a>
    </div>
    <div>
        <form action="{{ route('post.delete', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form>
    </div>
</div>
@endsection
