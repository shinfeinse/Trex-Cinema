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
@endsection

@section('content')
<!-- Page Content -->
<div class="container">
<!-- Portfolio Section -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">COMING<br>SOON</h1>
    <a class="nav-item dropdown">
        <a id="navbarDropdown" class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            Misc
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item"><b> Sort </b></a>
            <hr>
              <a href="{{url('/comingsoon/title/ascend')}}" class="dropdown-item"><i class="fas fa-sort-alpha-down"></i> Title</a>
              <a href="{{url('/comingsoon/title/descend')}}" class="dropdown-item"><i class="fas fa-sort-alpha-up"></i> Title</a>
            <hr>
            <a class="dropdown-item"><b> Filter Rating </b></a>
            <hr>
              <a href="{{url('/comingsoon/filter/R')}}" class="dropdown-item"><i class="fas fa-filter"></i> R</a>
              <a href="{{url('/comingsoon/filter/PG13')}}" class="dropdown-item"><i class="fas fa-filter"></i> PG-13</a>
              <a href="{{url('/comingsoon/filter/G')}}" class="dropdown-item"><i class="fas fa-filter"></i> G</a>
        </div>
    </a>
</div>
<div class="row">
@foreach ($comingsoon as $cs)
  <div class="col-lg-4 mt-4 col-sm-6 portfolio-item">
    <div class="card h-100">
      <a class="card h-100" href="{{url('/info')}}/{{$cs->title}}">
        <img class="card-img" src="{{url('/uploads')}}/{{$cs->poster}}">
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