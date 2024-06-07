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
<h1>Admin Log In</h1>
   </center>
</div>
@if(Session::has('error'))
<p class="text-danger">
   {{Session::get('error')}}
</p>
@else
<p class="text-danger">
   {{Session::get('success')}}
</p>
@endif

<form action="{{url('loginstore')}}" method="POST">
   @csrf
<div class="form-group first">
<input type="hidden" class="form-control" name="role" value="2">
<label for="username">Username</label>
<input type="text" class="form-control" name="email">
@if($errors->has('username'))
<p class="text-danger">
   {{$errors->first('username')}}
</p>
@endif
</div><br>
<div class="form-group last mb-4">
<label for="password">Password</label>
<input type="password" class="form-control" name="password" minlength="6">
@if($errors->has('password'))
<p class="text-danger">
   {{$errors->first('password')}}
</p>
@endif
</div>

<input type="submit" value="Log In" class="btn btn-block btn-primary">
</div>
</form>
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