
@extends('layouts.app')

@section('content')

<!-- <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif

    <div class="content">

    </div>
</div> -->

  <div id="myCarousel" class="carousel slide"  data-ride="carousel">
    <!-- Indicators -->
      <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      <div class="item active">
        <img src="/uploads/carosel/1.jpg" alt="Los Angeles">
        <div class="carousel-caption">
        <h3>One place for your business</h3>
        <p>yo!</p>
      </div>
      </div>

      <div class="item">
        <img src="/uploads/carosel/2.jpg" alt="Chicago">
        <div class="carousel-caption">
        <h3>Cheaper way to do smart things</h3>
        <p>Nice!</p>
      </div>
      </div>

      <div class="item">
        <img src="/uploads/carosel/3.jpg" alt="New York">
        <div class="carousel-caption">
        <h3>Register Now</h3>
        <p>get more!</p>
      </div>
      </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
      </a>
  </div>


    <div class="jumbotron">
      <div class="container">

      <h1 class="display-3">Hello, world!</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class="m-y-md">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
      </p>

      </div>
    </div>



@endsection
