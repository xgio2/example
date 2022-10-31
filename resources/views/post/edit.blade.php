@extends('layouts.mane')
@section('content')
    <div>
        <form action="{{route('post.update', $post->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label for="contents">Content</label>
                <textarea name="contents" class="form-control" id="content" placeholder="Contents" >{{$post->contents}}</textarea>
            </div>
            <div class="form-group">
                <label for="image">image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="image" value="{{$post->image}}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
