<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="csrf-token" content="{{csrf_token()}}">
<title>Digital Dominator</title>
<link rel="shortcut icon" href="{{url('assets/img/logo-small.png')}}" >
<!-- fontawsome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- it dont let the dropdown show -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
 <!-- *for pagination*  -->
 <link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/all.min.css')}}">

<link rel="stylesheet" href="{{url('assets/css/style.css')}}">

</head>
<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="{{url('/Home/HrDashboard')}}" class="logo">
<img src="{{url('assets/img/logo.png')}}" alt="Logo">
</a>
<a href="{{url('/Home/HrDashboard')}}" class="logo logo-small">
<img src="{{url('assets/img/logo-small.png')}}" alt="Logo" width="50" height="50">
</a>
<a href="javascript:void(0)" id="toggle_btn">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>
</div>

<ul class="nav user-menu">


<li class="nav-item dropdown has-arrow main-drop">
<a href="/setnew/profileset" >
<span class="user-img">
@if(!$profiles)
<img src="{{url('assets/img/avatar.png')}}" id="photo" style="width:50px;height:50px;">
@else
<img src="/profile/{{$profiles->image}}" id="photo" style="width:50px;height:50px;">
@endif
<span class="status online"></span>
</span>

</a>


</ul>


</div>

