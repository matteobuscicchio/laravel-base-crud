@extends('layouts.app')

@section('main')
<h1>Edit {{$post->title}}</h1>
<form action="{{route('posts.update', ['post'=>$post->id])}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" id="title" required value="{{$post->title}}">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" name="body" id="body" rows="3" required>{{$post->body}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection