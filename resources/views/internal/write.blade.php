@extends('layout')

@section('title','Write Your own')
@section('topic')
    <div class="jumbotron">Blog writter section</div>
@endsection
@section('content-lft')

@endsection
@section('content-mid')
    <form action="write" method="post" >
        <div class="form-group">
            <div> <label>Heading :</label> <input type="text" name="title" value="{{old('title')}}"> {{$errors->first('title')}}</div>
            <div> <label>Author :</label> <input type="text" name="author" value="{{old('author')}}"></div>
            <div><label>Write your blog</label> <br><textarea rows="5" cols="100" name="body" >{{old('body')}}</textarea>{{$errors->first('blog')}} </div>
        </div>
        <button type="submit" class="btn btn-primary">Blog@!</button>
        @csrf
    </form>
@endsection
