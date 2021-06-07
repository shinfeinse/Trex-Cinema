@extends('layouts.app')

@section('topscripts')
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection

@section('css')
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!-- CSS Files -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<main class="container" role="main">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Ticket<br>History</h1>
          </div>
          <div class="table-responsive">
          <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th> Id </th>
                        <th> Title </th>
                        <th> Seats </th>
                        <th> Time </th>
                        <th> Studio </th>
                        <th> Date Bought </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($info as $infos)
                    <tr>
                    <td>{{$infos->id}}</td>
                    <td>{{$infos->title}}</td>
                    <td>{{$infos->seats}}</td>
                    <td>{{$infos->time}}</td>
                    <td>{{$infos->studio}}</td>
                    <td>{{$infos->created_at}}</td> 
                    <tr>
                    @endforeach
                </tbody>
                <tfoot>
                        <th> Id </th>
                        <th> Title </th>
                        <th> Seats </th>
                        <th> Time </th>
                        <th> Studio </th>
                        <th> Date Bought </th>
                </tfoot>
            </table>
          </div>
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

@section('scripts')
@endsection