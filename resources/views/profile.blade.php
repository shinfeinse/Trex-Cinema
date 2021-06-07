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
@if($info == NULL)
<div class="row">
  		<div class="col-sm-10 pl-5"><h1>{{ Auth::user()->name }}</h1></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <form class="form" action="{{url('profile')}}/create" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" name="picture" id="picture" class="text-center center-block file-upload">
      </div><br>
          <div class="panel panel-default">
          </div>
          
          
          <ul class="list-group">
          </ul> 
               
          <div class="panel panel-default">
          </div>
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                      <div class="form-group">
                          <div class="col-xs-6">
                            <input class="form-control" type="hidden" name="email" id="email" value="{{ Auth::user()->email }}">
                              <label for="age"><h4>Umur</h4></label>
                              <input type="number" class="form-control form-control @error('age') is-invalid @enderror" name="age" id="age" value="{{ old('age') }}" placeholder="Umur"> @error('age')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="address"><h4>Address</h4></label>
                              <input type="text" class="form-control form-control @error('address') is-invalid @enderror" name="address" id="address" value="{{ old('address') }}" placeholder="Alamat"> @error('address')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="dob"><h4>Tanggal Lahir</h4></label>
                              <input type="date" class="form-control form-control @error('dob') is-invalid @enderror" name="dob" id="dob" value="{{ old('dob') }}"> @error('dob')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
             <div class="tab-pane" id="messages">
               
               <h2></h2>
               
               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
               
             </div><!--/tab-pane-->
             <div class="tab-pane" id="settings">
            		
               	
                  <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                      </div>
              	</form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
    @else
    <div class="row">
  		<div class="col-sm-10"><h1>{{ Auth::user()->name }}</h1></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="{{url('uploads/profile')}}/{{$info->picture}}" class="avatar img-circle img-thumbnail" alt="avatar">
      </div><br>
          <div class="panel panel-default">
          </div>
          
          
          <ul class="list-group">
          </ul> 
               
          <div class="panel panel-default">
          </div>
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                <div class="form-group">
                          <div class="col-xs-6">
                            <input class="form-control" type="hidden" name="email" id="email" value="{{ Auth::user()->email }}">
                              <label for="age"><h4>Nama :</h4></label>
                              <br>
                              <h5>{{ Auth::user()->name }}</h5>
                           </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                            <input class="form-control" type="hidden" name="email" id="email" value="{{ Auth::user()->email }}">
                              <label for="age"><h4>Email :</h4></label>
                              <br>
                              <h5>{{ Auth::user()->email }}</h5>
                           </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                            <input class="form-control" type="hidden" name="email" id="email" value="{{ Auth::user()->email }}">
                              <label for="age"><h4>Alamat :</h4></label>
                              <br>
                              <h5>{{ $info->address }}</h5>
                           </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                            <input class="form-control" type="hidden" name="email" id="email" value="{{ Auth::user()->email }}">
                              <label for="age"><h4>Umur :</h4></label>
                              <br>
                              <h5>{{ $info->age }}</h5>
                           </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="dob"><h4>Tanggal Lahir :</h4></label>
                              <br>
                              <h5>{{ $info->dob }}</h5>
                          </div>
                      </div>
              <hr>
          </div><!--/tab-content-->
        <a href="{{url('profile')}}/{{$info->email}}/update" class="btn btn-lg btn-success">
        Edit
        </a>
        </div><!--/col-9-->
    </div><!--/row-->
    @endif
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