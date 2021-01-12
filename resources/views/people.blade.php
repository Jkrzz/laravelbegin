@extends('layouts.app')
@section('content')
    <ul>
        @foreach ($people as $p)
        <li>
            Name:{{$p->name}}
            <br>
            Address:{{$p->address}}
            <br>
            NRC:{{$p->nrc->type}} {{$p->nrc->number}}
        </li>
       
        @endforeach
    </ul>
    <ul>
        @foreach ($nrcs as $n)
            <li>
                Name:{{$n->people->name}}
                <br>
                Address:{{$n->people->address}}
                <br>
                NRC:{{$n->type}} {{$n->number}}
            </li>
        @endforeach
    </ul>
@endsection