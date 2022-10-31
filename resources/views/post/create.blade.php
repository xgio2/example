@extends('layouts.mane')
@section('content')
<div>
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="contents">Content</label>
            <textarea name="contents" class="form-control" id="content" placeholder="Contents"></textarea>
        </div>
        <div class="form-group">
            <label for="image">image</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
