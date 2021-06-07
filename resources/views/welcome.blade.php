<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cinema XXI</title>

    <!-- Scripts -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


</head>
<body @yield('onload')>
    <div id="app">
    <navbar>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ url('assets/img/logo.png') }}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/comingsoon">Coming Soon</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <navbar>
    <header>
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
    <header>
        <main class="py-4">
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
        </main>
    </div>
    <footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; T-Rex Team 2020</p>
    </div>
    <!-- /.container -->
</footer>
</body>
</html>
