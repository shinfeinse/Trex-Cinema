@extends('layouts.app')

@section('topscripts')
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection

@section('css')
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('header')
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('https://us-east-1.linodeobjects.com/gunaxin/2020/01/U-banner-560x241.jpg')">
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://i.redd.it/oe8hxkiwzcz11.jpg')">
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://i1.wp.com/www.theilluminerdi.com/wp-content/uploads/2020/02/maxresdefault-2.jpg?resize=1280%2C640&ssl=1')">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
@endsection

@section('content')
<!-- Page Content -->
<div class="container">

<h1 class="my-4">SCREENING NOW</h1>
<hr>
<!-- Marketing Icons Section -->
<div class="row">
@foreach ($movie as $movies)
  <div class="col-lg-4 mb-4">
      <a class="card h-100" href="info/{{$movies->title}}">
        <img class="card-img" src="uploads/{{$movies->poster}}">
      </a>
  </div>
@endforeach
</div>
<!-- /.row -->

<!-- Portfolio Section -->
<h2>UPCOMING MOVIE SELECTION</h2>
<hr>
<div class="row">
@foreach ($comingsoon as $comingsoons)
  <div class="col-lg-4 mt-4 col-sm-6 portfolio-item">
    <div class="card h-100">
      <a class="card h-100" href="info/{{$comingsoons->title}}">
        <img class="card-img" src="uploads/{{$comingsoons->poster}}">
      </a>
    </div>
   </div>
@endforeach
</div>
<!-- /.row -->
@endsection

@section('footer')
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; T-Rex Team 2020</p>
    </div>
    <!-- /.container -->
</footer>
@endsection

@section('scripts')
@endsection