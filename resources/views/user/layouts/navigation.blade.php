
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.index')}}">Home</a>
          </li>
          @php
              $categories= App\admin\Category::where('level',1)->get();
          @endphp
        @foreach ($categories as $category)
        @if (count($category->childs)>0)
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{$category->name}}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach ($category->childs as $child)
            <a class="dropdown-item" href="{{route('user.category',$child)}}">{{$child->name}}</a>
            @endforeach
          </div>
        </li> 
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('user.category',$category)}}">{{$category->name}}</a>
        </li>    
        @endif
        @endforeach
        </ul>
      </div>
    </div>
  </nav>
