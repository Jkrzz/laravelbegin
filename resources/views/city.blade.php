@extends('layouts.app')
@section('content')
    <ul>
        @foreach ($city as $c)
            <li>{{$c->name}}</li>
         <ul>
             @foreach ($c->townships as $township)
                 <li>
                     {{$township->name}}
                 </li>
             @endforeach
         </ul>
        @endforeach
    </ul>
    <hr>
    <ul>
        @foreach ($townships as $t)
        <li>{{$t->name}} ({{$t->city->name}})</li>
         
        @endforeach
    </ul>
    <hr>
    <h3>Address By City</h3>
    <ul>
        @foreach ($city as $c)
        <li>{{$c->name}}</li>
     <ul>
        @foreach ($c->street as $streets)
        <li>{{$streets->name}}</li>
    @endforeach
     </ul>
        @endforeach
    </ul>
@endsection