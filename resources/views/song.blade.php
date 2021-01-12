@extends('layouts.app')
@section('content')
    <ul>
        @foreach ($vocalists as $vocalist)
        <li>{{ $vocalist->name}}</li>
            <ul>
                @foreach ($vocalist->songs as $song)
                <li>{{$song->name}} {{$song->pivot->release_year}}</li>
                @endforeach
            </ul>
        @endforeach
    </ul>
    <hr>
    <ul>
        @foreach ($songs as $song)
        <li>{{ $song->name}}</li>
            <ul>
                @foreach ($song->vocalists as $vocalist)
                <li>{{$vocalist->name}} {{$vocalist->pivot->release_year}}</li>
                @endforeach
            </ul>
        @endforeach
    </ul>
@endsection