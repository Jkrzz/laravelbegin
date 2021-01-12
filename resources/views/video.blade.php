@extends('layouts.app')
@section('content')
    <h3>Vidoes</h3>
    <ul>
        @foreach ($videos as $video)
    <li>{{$video->name}}(like:{{$video->likes->count()}})</li>
        @endforeach </ul>
    <h3>Comments</h3>
    <ul>
        @foreach ($comments as $comment)
    <li>{{$comment->name}}(like:{{$comment->likes->count()}})</li>
        @endforeach
    </ul>
    <h3>Likes</h3>
    <ul>
        @foreach ($likes as $like)
    <li>{{$like->likeable->name}}</li>
        @endforeach
    </ul>
@endsection