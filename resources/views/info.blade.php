@extends('layouts.app')

@section('topscripts')
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection

@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
  <h2>Movie Detail</h2>
  <hr>
  <div class="row mt-4">
    <div class="col-lg-4">
    <img class="img-fluid rounded" src="{{url('uploads')}}/{{$info->poster}}" alt="">
    </div>
    <hr>
    <div class="col-lg-8">
      <br>
      <br>
      <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="{{$info->trailer}}" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <hr>
  <h2>{{$info->title}}</h2>
  <hr>
  <div class="row">
    <div class="col-lg-4">
    <strong>Release :</strong> {{$info->year}}
    <br><strong>Director :</strong> {{$info->director}}
    <br><strong>Starring :</strong> {{$info->starring}}
    <br><strong>Genre :</strong> {{$info->genre}}
    <br><strong>Rating :</strong> {{$info->rating}}
    <br><strong>Duration :</strong> {{$info->duration}}
    </div>
    <hr>
    <div class="col-lg-8">
      <p>{{$info->description}}</p>
    </div>
  </div>
  <hr>
  @if($schedule != NULL)
    <h2>Schedules</h2>
    <hr>
    <div class="row">
      @foreach($schedule as $schedules)
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h3 class="card-header">{{$schedules->title}}</h3>
            <div class="card-body">
              <div class="display-4">{{$schedules->screening}}</div>
              <div class="font-italic">price : {{$schedules->price}}</div>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <a href="/booking/{{$info->title}}/{{$schedules->id}}" class="btn btn-primary">Reserve Seat</a>
              </li>
            </ul>
          </div>
        </div>
      @endforeach
    @else
    <h2>COMING SOON</h2>
    <hr>
  @endif
    <!-- /.row -->
</div>
@endsection

@section('footer')
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; T-Rex Team 2020</p>
    </div>
    <!-- /.container -->
</footer>
@endsection