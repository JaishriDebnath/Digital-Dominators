<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="csrf-token" content="{{csrf_token()}}">
<title>HRM SYSTEM</title>

<link rel="shortcut icon" href="{{url('assets/img/hr-logo.png')}}">

<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/all.min.css')}}">

<link rel="stylesheet" href="{{url('assets/css/style.css')}}">

<!-- *for pagination* -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<!-- fontawsome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="{{url('index.html')}}" class="logo">
<img src="{{url('assets/img/logo.png')}}" alt="Logo">
</a>
<a href="{{url('index.html')}}" class="logo logo-small">
<img src="{{url('assets/img/logo-small.png')}}" alt="Logo" width="30" height="30">
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
@foreach($profiles->slice(0,1) as $profile)
@if(!$profile)
<img src="{{url('assets/img/avatar.png')}}" id="photo" style="width:50px;height:50px;">
@else
<img src="/profile/employee/{{$profile->eimage}}" id="photo" style="width:50px;height:50px;">
@endif
@endforeach
<span class="status online"></span>
</span>

</a>
</ul>
</div>
<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div class="sidebar-contents">
<div id="sidebar-menu" class="sidebar-menu">
<div class="mobile-show">
<div class="offcanvas-menu">
<div class="user-info align-center bg-theme text-center">
<span class="lnr lnr-cross  text-white" id="mobile_btn_close">X</span>
<a href="{{url('javascript:void(0)')}}" class="d-block menu-style text-white">
<div class="user-avatar d-inline-block mr-3">
<img src="{{url('assets/img/profiles/avatar-18.jpg')}}" alt="user avatar" class="rounded-circle" width="50">
</div>
</a>
</div>
</div>
<div class="sidebar-input">
<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fas fa-search"></i></button>
</form>
</div>
</div>
 </div>
<ul>
    
<li>
<a href="{{url('/Employee/EmployeeDashboard')}}"><img src="{{url('assets/img/home.svg')}}" alt="sidebar_img"><h3>&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</h3></a>
</li>
<li>
<a href="{{url('/Employee/leaveCreate')}}"><img src="{{url('assets/img/leave.svg')}}" alt="sidebar_img"><h3>&nbsp;&nbsp;&nbsp;&nbsp;Leave</h3></a>
</li>
<li>
<a href="{{url('/Employee/wfh')}}"><img src="{{url('assets/img/leave.svg')}}" alt="sidebar_img"><h3>&nbsp;&nbsp;&nbsp;&nbsp;WFH</h3></a>
</li>
<li>
<a href="{{url('/Employee/company')}}"><img src="{{url('assets/img/report.svg')}}" alt="sidebar_img"><h3>&nbsp;&nbsp;&nbsp;&nbsp;Policies</h3></a>
</li>
<li>
<a href="{{url('/Employee/profileset')}}"><img src="{{url('assets/img/profile.svg')}}" alt="sidebar_img"><h3>&nbsp;&nbsp;&nbsp;&nbsp;Profile</h3></a>
</li>
</ul><br>
<ul class="logout">
<li>
<a href="{{url('/Employee/logout')}}"><img src="{{url('assets/img/logout.svg')}}" alt="sidebar_img"><h3>&nbsp;&nbsp;&nbsp;&nbsp;Log out</h3></a>
</li>
</ul>
</div>
</div>
</div>
</div>


<script src="{{url('assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{url('assets/js/popper.min.js')}}"></script>
<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/js/feather.min.js')}}"></script>

<script src="{{url('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<script src="{{url('assets/plugins/apexchart/apexcharts.min.js')}}"></script>
<script src="{{url('assets/plugins/apexchart/chart-data.js')}}"></script> 
<script src="{{url('assets/js/script.js')}}"></script>
</body>
</html>