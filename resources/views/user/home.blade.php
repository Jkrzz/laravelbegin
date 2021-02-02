@extends('user.layouts.app')
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Clean Blog</h1>
              <span class="subheading">A Blog Theme by Start Bootstrap</span>
            </div>
          </div>
        </div>
      </div>
    </header>
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @foreach ($posts as $post)
        <div class="post-preview">
          <a href="{{route('user.post',[$post->category->name,$post])}}">
            <h2 class="post-title">
              {{$post->title}}
            </h2>
          </a>
          <p class="post-meta">Category by
            <a href="#">{{$post->category->name}}</a>
            on {{$post->created_at->diffForHumans()}}</p>
        </div>
        <hr>
        @endforeach
        
        <!-- Pager -->
        <div class="clearfix">
          @include('user.pagination.default',['paginator'=>$posts])
        </div>
      </div>
    </div>
  </div>
@endsection