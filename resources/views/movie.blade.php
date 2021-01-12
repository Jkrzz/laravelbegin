@extends('layouts.app')
@section('content')
<h3>Movies</h3>
    <ul>
        @foreach ($movies as $movie)
        <li>{{$movie->name}}</li>
        <ul>
            @foreach ($movie->tags as $tag)
                <li>{{$tag->name}}</li>
            @endforeach
        </ul>
        @endforeach
    </ul>
    <h3>Series</h3>
    <ul>
        @foreach ($series as $series)
        <li>{{$series->name}}</li>
        <ul>
            @foreach ($series->tags as $tag)
                <li>{{$tag->name}}</li>
            @endforeach
        </ul>
        @endforeach
    </ul>
    <h3>Tags</h3>
    <ul>
        @foreach ($tags as $tag)
        <li>{{$tag->name}}</li>
        <ul>
            @foreach ($tag->movies as $movie)
                <li>{{$movie->name}}(MOVIE)</li>
            @endforeach
        </ul>
        <ul>
            @foreach ($tag->series as $series)
                <li>{{$series->name}}(Series)</li>
            @endforeach
        </ul>
        @endforeach
    </ul>
@endsection