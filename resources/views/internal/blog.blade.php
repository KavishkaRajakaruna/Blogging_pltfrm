@extends('layout')

@section('topic')
    <div class="jumbotron"> <h2>Blogs</h2></div>
@endsection
@section('content-lft')
    @foreach($posts as $post)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$post->author}}</h6>
                <p class="card-text">{{$post->body}}</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    @endforeach
@endsection
