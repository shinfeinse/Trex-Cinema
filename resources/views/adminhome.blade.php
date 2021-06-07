@extends('layouts.app')

@section('css')
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!-- CSS Files -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('topscripts')
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection

@section('content')
<main class="container" role="main">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Admin<br>Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0 nav-item dropdown">
                <a id="navbarDropdown" class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Misc
                </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a href="{{url('/admin/home')}}" class="dropdown-item"><i class="fas fa-plus"></i> Movies</a>
                <a href="{{url('/admin/coming')}}" class="dropdown-item"><i class="fas fa-plus"></i> Coming</a>
                <a href="{{url('/admin/ticket')}}" class="dropdown-item"><i class="fas fa-plus"></i> Ticket</a>
              </div>
            </div>
          </div>
          @if(Route::current()->getName() == 'admin.home' || Route::current()->getName() == 'admin.coming')
          <div class="mb-2 float-right">
          @if(Route::current()->getName() == 'admin.home')
          <a href="{{url('/admin/home/form/create')}}">
          @else
          <a href="{{url('/admin/coming/form/create')}}">
          @endif
            <button class="btn btn-primary"> 
                <span class="fas fa-plus"></span>
                Movies
            </button>
          </a>
          </div>
          <div class="table-responsive">
          <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th> Id </th>
                        <th> Title </th>
                        <th> Year </th>
                        <th> Director </th>
                        <th> Genre </th>
                        <th> Rating </th>
                        <th> Starring </th>
                        <th> Description </th>
                        <th> Poster </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($movie as $movies)
                    <tr>
                        <td>{{$movies->id}}</td>
                        <td>{{$movies->title}}</td>
                        <td>{{$movies->year}}</td>
                        <td>{{$movies->director}}</td>
                        <td>{{$movies->genre}}</td>
                        <td>{{$movies->rating}}</td>
                        <td>{{$movies->starring}}</td>
                        <td>{{$movies->description}}</td>
                        <td><img src="../uploads/{{$movies->poster}}" width=100%></td>
                        <td>
                        @if(Route::current()->getName() == 'admin.home')
                            <a href="{{url('info')}}/{{$movies->title}}">
                                <button class='btn'>
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </a>
                            <a href="{{url('admin/home/form/update')}}/{{$movies->id}}">
                                <button class='btn'>
                                    <i class="fas fa-edit"></i>
                                </button>
                            </a>
                            <a href="{{url('admin/home/delete/')}}/{{$movies->id}}">
                                <button class='btn'>
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </a>
                        @else
                            <a href="{{url('info')}}/{{$movies->title}}">
                                <button class='btn'>
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </a>
                            <a href="{{url('admin/coming/form/update')}}/{{$movies->id}}">
                                <button class='btn'>
                                    <i class="fas fa-edit"></i>
                                </button>
                            </a>
                            <a href="{{url('admin/coming/delete/')}}/{{$movies->id}}">
                                <button class='btn'>
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </a>
                        @endif
                        </td>
                    <tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <th> Id </th>
                    <th> Title </th>
                    <th> Year </th>
                    <th> Director </th>
                    <th> Genre </th>
                    <th> Rating </th>
                    <th> Starring </th>
                    <th> Description </th>
                    <th> Poster </th>
                    <th> Action </th>
                </tfoot>
            </table>
          </div>
        @endif
        @if(Route::current()->getName() == 'admin.ticket')
        <div class="mb-2 float-right">
          <a href="{{url('/admin/ticket/form/create')}}">
            <button class="btn btn-primary"> 
                <span class="fas fa-plus"></span>
                Screening
            </button>
          </a>
          </div>
          <div class="table-responsive">
          <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th> Id </th>
                        <th> Title </th>
                        <th> Screening </th>
                        <th> Booked Seats </th>
                        <th> Price </th>
                        <th> Studio </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($schedule as $schedules)
                    <tr>
                        <td>{{$schedules->id}}</td>
                        <td>{{$schedules->title}}</td>
                        <td>{{$schedules->screening}}</td>
                        <td>{{$schedules->seats}}</td>
                        <td>{{$schedules->price}}</td>
                        <td>{{$schedules->studio}}</td>
                        <td>
                            <a href="{{url('booking')}}/{{$schedules->title}}/{{$schedules->id}}">
                                <button class='btn'>
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </a>
                            <a href="{{url('admin/ticket/form/update')}}/{{$schedules->id}}">
                                <button class='btn'>
                                    <i class="fas fa-edit"></i>
                                </button>
                            </a>
                            <a href="{{url('admin/ticket/delete/')}}/{{$schedules->id}}">
                                <button class='btn'>
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </a>
                        </td>
                    <tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <th> Id </th>
                    <th> Title </th>
                    <th> Screening </th>
                    <th> Booked Seats </th>
                    <th> Price </th>
                    <th> Studio </th>
                    <th> Action </th>
                </tfoot>
            </table>
          </div>
        @endif
        </main>
@endsection

@section('footer')
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; T-Rex Team 2020</p>
    </div>
    <!-- /.container -->
</footer>
@endsection