@extends('layouts.app')

@section('topscripts')
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection

@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<main class="container" role="main">
    @if(Route::current()->getName() == 'admin.ticketupdate')
    <form action="{{url('admin/ticket/form/update/submit')}}" method="post">
    {{csrf_field()}}
    <div class="form-group">
            <input class="form-control" type="hidden" name="id" id="id" value="{{ $update->id}}">
            <label for="title">Judul Film</label>
            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ $update->title }}" placeholder="Masukkan Judul Film"> @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="screening">Jam Tayang</label>
            <input class="form-control @error('screening') is-invalid @enderror" type="text" name="screening" id="screening" value="{{ $update->screening }}" placeholder="Masukkan Jam Tayang"> @error('screening')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="studio">Studio</label>
            <input class="form-control @error('studio') is-invalid @enderror" type="number" name="studio" id="studio" value="{{ $update->studio }}" placeholder="Masukkan Studio"> @error('studio')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Harga</label>
            <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" id="price" value="{{ $update->price }}" placeholder="Masukkan Harga Tiket"> @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group float-right">
            <button class="btn btn-lg btn-danger" type="reset">Reset</button>
            <button class="btn btn-lg btn-primary" type="submit">Submit</button>
        </div>
        <br>
        <br>
    </form>
    @elseif(Route::current()->getName() == 'admin.homeform')
    <form action="{{url('admin/home/form/create/submit')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
            <label for="title">Judul Film</label>
            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Masukkan Judul Film"> @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="year">Tahun Terbit</label>
            <input class="form-control @error('year') is-invalid @enderror" type="text" name="year" id="year" value="{{ old('year') }}" placeholder="Masukkan Tahun Terbit"> @error('year')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="starring">Aktor</label>
            <input class="form-control @error('starring') is-invalid @enderror" type="text" name="starring" id="starring" value="{{ old('starring') }}" placeholder="Masukkan Aktor"> @error('starring')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="director">Sutradara</label>
            <input class="form-control @error('director') is-invalid @enderror" type="text" name="director" id="director" value="{{ old('director') }}" placeholder="Masukkan Sutradara"> @error('director')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input class="form-control @error('genre') is-invalid @enderror" type="text" name="genre" id="genre" value="{{ old('genre') }}" placeholder="Masukkan Genre"> @error('genre')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input class="form-control @error('rating') is-invalid @enderror" type="text" name="rating" id="rating" value="{{ old('rating') }}" placeholder="Masukkan Rating"> @error('rating')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="duration">Durasi</label>
            <input class="form-control @error('duration') is-invalid @enderror" type="text" name="duration" id="duration" value="{{ old('duration') }}" placeholder="Masukkan Durasi"> @error('duration')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Synopsis</label>
            <textarea class="form-control @error('description') is-invalid @enderror" rows="5" type="text" name="description" id="description" placeholder="Masukkan Synopsis">{{ old('description') }}</textarea>@error('duration')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="trailer">Trailer</label>
            <input class="form-control @error('trailer') is-invalid @enderror" type="text" name="trailer" id="trailer" value="{{ old('trailer') }}" placeholder="Masukkan Trailer"> @error('duration')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="poster">Poster</label>
            <input class="form-control @error('poster') is-invalid @enderror" type="file" name="poster" id="poster" value="{{ old('poster') }}"> @error('poster')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group float-right">
            <button class="btn btn-lg btn-danger" type="reset">Reset</button>
            <button class="btn btn-lg btn-primary" type="submit">Submit</button>
        </div>
        <br>
        <br>
    </form>
    @elseif(Route::current()->getName() == 'admin.homeupdate')
    <form action="{{url('admin/home/form/update/submit')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
            <input class="form-control" type="hidden" name="id" id="id" value="{{ $update->id}}">
            <label for="title">Judul Film</label>
            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ $update->title }}" placeholder="Masukkan Judul Film"> @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="year">Tahun Terbit</label>
            <input class="form-control @error('year') is-invalid @enderror" type="text" name="year" id="year" value="{{ $update->year }}" placeholder="Masukkan Tahun Terbit"> @error('year')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="starring">Aktor</label>
            <input class="form-control @error('starring') is-invalid @enderror" type="text" name="starring" id="starring" value="{{ $update->starring }}" placeholder="Masukkan Aktor"> @error('starring')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="director">Sutradara</label>
            <input class="form-control @error('director') is-invalid @enderror" type="text" name="director" id="director" value="{{ $update->director }}" placeholder="Masukkan Sutradara"> @error('director')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input class="form-control @error('genre') is-invalid @enderror" type="text" name="genre" id="genre" value="{{ $update->genre }}" placeholder="Masukkan Genre"> @error('genre')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input class="form-control @error('rating') is-invalid @enderror" type="text" name="rating" id="rating" value="{{ $update->rating }}" placeholder="Masukkan Rating"> @error('rating')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="duration">Durasi</label>
            <input class="form-control @error('duration') is-invalid @enderror" type="text" name="duration" id="duration" value="{{ $update->duration }}" placeholder="Masukkan Durasi"> @error('duration')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Synopsis</label>
            <textarea class="form-control @error('description') is-invalid @enderror" rows="5" type="text" name="description" id="description" placeholder="Masukkan Synopsis">{{ $update->description }}</textarea>@error('duration')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="trailer">Trailer</label>
            <input class="form-control @error('trailer') is-invalid @enderror" type="text" name="trailer" id="trailer" value="{{ $update->trailer }}" placeholder="Masukkan Trailer"> @error('duration')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="poster">Poster</label>
            <input class="form-control @error('poster') is-invalid @enderror" type="file" name="poster" id="poster" value="{{ $update->poster }}"> @error('poster')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group float-right">
            <button class="btn btn-lg btn-danger" type="reset">Reset</button>
            <button class="btn btn-lg btn-primary" type="submit">Submit</button>
        </div>
        <br>
        <br>
    </form>
    @elseif(Route::current()->getName() == 'profileupdateform')
    <form action="{{url('profile/update/submit')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
            <label for="name">Nama</label>
            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ Auth::user()->name }}" placeholder="Masukkan Judul Film"> @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    <div class="form-group">
            <input class="form-control" type="hidden" name="email" id="email" value="{{ $info->email }}">
            <label for="address">Alamat</label>
            <input class="form-control @error('address') is-invalid @enderror" type="text" name="address" id="address" value="{{ $info->address }}" placeholder="Masukkan Judul Film"> @error('address')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="age">Umur</label>
            <input class="form-control @error('age') is-invalid @enderror" type="number" name="age" id="age" value="{{ $info->age }}" placeholder="Masukkan Tahun Terbit"> @error('age')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="dob">Tanggal Lahir</label>
            <input class="form-control @error('dob') is-invalid @enderror" type="date" name="dob" id="dob" value="{{ $info->dob }}" placeholder="Masukkan Tahun Terbit"> @error('dob')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="picture">Profile Picture</label>
            <input class="form-control @error('picture') is-invalid @enderror" type="file" name="picture" id="picture" value="{{ $info->picture }}"> @error('poster')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group float-right">
            <button class="btn btn-lg btn-danger" type="reset">Reset</button>
            <button class="btn btn-lg btn-primary" type="submit">Submit</button>
        </div>
        <br>
        <br>
    </form>
    @elseif(Route::current()->getName() == 'admin.comingform')
    <form action="{{url('admin/coming/form/create/submit')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
            <label for="title">Judul Film</label>
            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Masukkan Judul Film"> @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="year">Tahun Terbit</label>
            <input class="form-control @error('year') is-invalid @enderror" type="text" name="year" id="year" value="{{ old('year') }}" placeholder="Masukkan Tahun Terbit"> @error('year')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="starring">Aktor</label>
            <input class="form-control @error('starring') is-invalid @enderror" type="text" name="starring" id="starring" value="{{ old('starring') }}" placeholder="Masukkan Aktor"> @error('starring')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="director">Sutradara</label>
            <input class="form-control @error('director') is-invalid @enderror" type="text" name="director" id="director" value="{{ old('director') }}" placeholder="Masukkan Sutradara"> @error('director')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input class="form-control @error('genre') is-invalid @enderror" type="text" name="genre" id="genre" value="{{ old('genre') }}" placeholder="Masukkan Genre"> @error('genre')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input class="form-control @error('rating') is-invalid @enderror" type="text" name="rating" id="rating" value="{{ old('rating') }}" placeholder="Masukkan Rating"> @error('rating')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="duration">Durasi</label>
            <input class="form-control @error('duration') is-invalid @enderror" type="text" name="duration" id="duration" value="{{ old('duration') }}" placeholder="Masukkan Durasi"> @error('duration')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Synopsis</label>
            <textarea class="form-control @error('description') is-invalid @enderror" rows="5" type="text" name="description" id="description" placeholder="Masukkan Synopsis">{{ old('description') }}</textarea>@error('duration')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="trailer">Trailer</label>
            <input class="form-control @error('trailer') is-invalid @enderror" type="text" name="trailer" id="trailer" value="{{ old('trailer') }}" placeholder="Masukkan Trailer"> @error('duration')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="poster">Poster</label>
            <input class="form-control @error('poster') is-invalid @enderror" type="file" name="poster" id="poster" value="{{ old('poster') }}"> @error('poster')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group float-right">
            <button class="btn btn-lg btn-danger" type="reset">Reset</button>
            <button class="btn btn-lg btn-primary" type="submit">Submit</button>
        </div>
        <br>
        <br>
    </form>
    @elseif(Route::current()->getName() == 'admin.comingupdate')
    <form action="{{url('admin/coming/form/update/submit')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
            <input class="form-control" type="hidden" name="id" id="id" value="{{ $update->id}}">
            <label for="title">Judul Film</label>
            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ $update->title }}" placeholder="Masukkan Judul Film"> @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="year">Tahun Terbit</label>
            <input class="form-control @error('year') is-invalid @enderror" type="text" name="year" id="year" value="{{ $update->year }}" placeholder="Masukkan Tahun Terbit"> @error('year')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="starring">Aktor</label>
            <input class="form-control @error('starring') is-invalid @enderror" type="text" name="starring" id="starring" value="{{ $update->starring }}" placeholder="Masukkan Aktor"> @error('starring')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="director">Sutradara</label>
            <input class="form-control @error('director') is-invalid @enderror" type="text" name="director" id="director" value="{{ $update->director }}" placeholder="Masukkan Sutradara"> @error('director')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input class="form-control @error('genre') is-invalid @enderror" type="text" name="genre" id="genre" value="{{ $update->genre }}" placeholder="Masukkan Genre"> @error('genre')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input class="form-control @error('rating') is-invalid @enderror" type="text" name="rating" id="rating" value="{{ $update->rating }}" placeholder="Masukkan Rating"> @error('rating')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="duration">Durasi</label>
            <input class="form-control @error('duration') is-invalid @enderror" type="text" name="duration" id="duration" value="{{ $update->duration }}" placeholder="Masukkan Durasi"> @error('duration')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Synopsis</label>
            <textarea class="form-control @error('description') is-invalid @enderror" rows="5" type="text" name="description" id="description" placeholder="Masukkan Synopsis">{{ $update->description }}</textarea>@error('duration')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="trailer">Trailer</label>
            <input class="form-control @error('trailer') is-invalid @enderror" type="text" name="trailer" id="trailer" value="{{ $update->trailer }}" placeholder="Masukkan Trailer"> @error('duration')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="poster">Poster</label>
            <input class="form-control @error('poster') is-invalid @enderror" type="file" name="poster" id="poster" value="{{ $update->poster }}"> @error('poster')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group float-right">
            <button class="btn btn-lg btn-danger" type="reset">Reset</button>
            <button class="btn btn-lg btn-primary" type="submit">Submit</button>
        </div>
        <br>
        <br>
    </form>
    @else
    <form action="{{url('admin/ticket/form/create/submit')}}" method="post">
    {{csrf_field()}}
    <div class="form-group">
            <label for="title">Judul Film</label>
            <select class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="pilih judul film">
              @foreach ($movie as $movies)
              <option value="{{$movies->title}}">{{$movies->title}}</option>
              @endforeach
            </select>
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="screening">Jam Tayang</label>
            <input class="form-control @error('screening') is-invalid @enderror" type="text" name="screening" id="screening" value="{{ old('screening') }}" placeholder="Masukkan Jam Tayang"> @error('screening')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="studio">Studio</label>
            <input class="form-control @error('studio') is-invalid @enderror" type="number" name="studio" id="studio" value="{{ old('studio') }}" placeholder="Masukkan Studio"> @error('studio')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Harga</label>
            <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" id="price" value="{{ old('price') }}" placeholder="Masukkan Harga Tiket"> @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group float-right">
            <button class="btn btn-lg btn-danger" type="reset">Reset</button>
            <button class="btn btn-lg btn-primary" type="submit">Submit</button>
        </div>
        <br>
        <br>
    </form>
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