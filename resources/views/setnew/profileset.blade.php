

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="csrf-token" content="{{csrf_token()}}">
<title>HRM SYSTEM</title>
<link rel="shortcut icon" href="{{url('assets/img/hr-logo.png')}}">
<!-- it dont let the dropdown show -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
 <!-- *for pagination*  -->

 <link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/all.min.css')}}">

<link rel="stylesheet" href="{{url('assets/css/style.css')}}">


  <link rel="stylesheet" href="{{url('assets/tcss/profile.css')}}">

</head>

<div class="content container-fluid">
<div class="row">
<div class="col-xl-12 col-sm-12 col-12">
<div class="breadcrumb-path mb-4">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html"><img src="{{url('assets/img/dash.png')}}" class="mr-2" alt="breadcrumb" />Home</a>
</li>
<li class="breadcrumb-item active"> Settings</li>
</ul>
<h3>Settings</h3>
</div>
</div>

<div class="col-xl-12 col-sm-12 col-12 ">
<div class="row">
<div class="col-xl-12 col-sm-12 col-12">
<div class="card ">

<div class="card-header">
<a href="/Home/HrDashboard"><img src="{{url('assets/images/return.png')}}" style="width: 50px;height:50px"></a>
<center>
<h2 class="card-titles">HR Photo</h2>
</center>
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

</div>
@endif
@if(session('error'))
<div class="alert alert-success">
    {{session('error')}}
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

</div>
@endif
</div>
<div class="card-body">
  <div class="wrapper">
<div class="profile-pic-div"> 
@if(!$profiles)
<img src="{{url('assets/img/avatar.png')}}" id="photo">
@else
<img src="/profile/{{$profiles->image}}" id="photo">
@endif

<form action="/setnew/profilePic" method="POST" enctype="multipart/form-data">
    @csrf

  <input type="file" id="file" name="image"> 
  <label for="file" id="uploadBtn">Change Photo</label>
  </div>
</div>

</div>
<div class="card-footer">
<h2 class="card-titles">

<center>
<div class="form-btn">
<input type="submit" id="savebtn" class="btn btn-success" value="Save Change" style="height:65px;width:220px;border:#fff;border-radius:10px;font-size:22px;">
</form>
</div>
</center>
</h2>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>

</div>

<script src="{{url('assets/tjs/app.js')}}"></script>


@include('layouts.footer')

</html>