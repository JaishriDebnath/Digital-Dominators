<!doctype html>
<html lang="en">
@include('layouts.loginheader')

@yield('content')
<body>
<div class="content">
<div class="container">
<div class="row">
<div class="col-md-6">
<img src="{{url('Lassets/images/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid">
</div>
<div class="col-md-6 contents">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="mb-4">
   <center>
<h1>Sign Up</h1>
   </center>
</div>
@if(Session::has('error'))
<p class="text-danger">
   {{Session::get('error')}}
</p>
@endif

@if(Session::has('success'))
<p class="text-success">
   {{Session::get('success')}}
</p>
@endif

<form action="registerstore" method="POST">
   @csrf
<div class="form-group first">
<label for="name">Name</label>
<input type="text" class="form-control" name="name">
@if($errors->has('name'))
<p class="text-danger">
   {{$errors->first('name')}}
</p>
@endif
</div><br>
<div class="form-group first">
<label for="Employee ID">Employee ID</label>
<input type="text" class="form-control" name="emp_id">
@if($errors->has('emp_id'))
<p class="text-danger">
   {{$errors->first('emp_id')}}
</p>
@endif
</div><br>
<div class="form-group first">
<label for="username">Username</label>
<input type="hidden" class="form-control" name="role" value="1">
<input type="text" class="form-control" name="email">
@if($errors->has('email'))
<p class="text-danger">
   {{$errors->first('email')}}
</p>
@endif
</div><br>
<div class="form-group last mb-4">
<label for="password">Password</label>
<input type="password" class="form-control" name="password">
@if($errors->has('password'))
<p class="text-danger">
   {{$errors->first('password')}}
</p>
@endif
</div>
<div class="form-group last mb-4">
<label for="password">Confirm Password</label>
<input type="password" class="form-control" name="password_confirmation" minlength="6">
@if($errors->has('password_confirmation'))
<p class="text-danger">
   {{$errors->first('password_confirmation')}}
</p>
@endif
</div>

<input type="submit" value="Sign Up" class="btn btn-block btn-primary"><br>
</div>
</form>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="col-md-8">
<span class="ml-auto">
<a href="/auth" class="forgot-pass"><h5>Already have an account? Sign In
</h5></a></span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="{{url('Lassets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('Lassets/js/popper.min.js')}}"></script>
<script src="{{url('Lassets/js/bootstrap.min.js')}}"></script>
<script src="{{url('Lassets/js/main.js')}}"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vedd3670a3b1c4e178fdfb0cc912d969e1713874337387" integrity="sha512-EzCudv2gYygrCcVhu65FkAxclf3mYM6BCwiGUm6BEuLzSb5ulVhgokzCZED7yMIkzYVg65mxfIBNdNra5ZFNyQ==" data-cf-beacon='{"rayId":"87ff8b9d1f8c595d","b":1,"version":"2024.4.1","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>

</html>