@extends('layouts.mane')
@section('content')
<div>
    <div>
        <a href="{{ route('post.create') }}">CREATE POST</a>
    </div>
    <div>
        @foreach($posts as $post)
            <div><a href="{{ route('post.show', $post->id) }}">{{ $post->id }}. {{ $post->title }}</a></div>
        @endforeach
    </div>
</div>
@endsection
