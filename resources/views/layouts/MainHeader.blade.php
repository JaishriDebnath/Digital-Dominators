<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="csrf-token" content="{{csrf_token()}}">

<!-- it dont let the dropdown show
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
 *for pagination* -->

 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/all.min.css')}}">

<link rel="stylesheet" href="{{url('assets/css/style.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;  font-family: montserrat}

.topnav {
    background: lightblue;
    height: 45px;
    width: 10000px;
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 25px;
}

.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 25px;    
  border: none;
  outline: none;
  color: white;
  padding: 17px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 10px 12px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: darkblue;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: center;
  }
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
<div class="topnav" id="myTopnav">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse  nav-fill " id="navbarSupportedContent">
                  <ul class="navbar-nav nav-pills nav-fill">
                     <li class="nav-item">
                        <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                        <a href="/gallery" class="nav-link">GALLARY</a>
                     </li>
                     <li class="nav-item">
                        <a href="/service" class="nav-link ">SERVICE</a>
                     </li>
                     <li class="nav-item">
                        <a href="/jobs" class="nav-link ">CAREER</a>
                     </li>
                     
                     <li class="nav-item">
                        <a href="/about" class="nav-link ">ABOUT</a>
                     </li>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <li class="nav-item">
                        <a href="/register" class="nav-link ">SIGN IN</a>
                     </li>
                   
                  </ul>
               </div>
</div>
            </nav>

            <section>
            <div class="container mt-8">

<div class="modal" id="Auth" >
  <div class="modal-dialog" >
    <div class="modal-content">
      
         
            <div class="row">
            <section class="register py-lg-5 py-md-3 py-sm-3 py-3 ">
               <div class=" text-center register-form">
                  <div class="wls-register-form">
                  <div class="container " >
                  <br><br><h4>Login Here...!!!</h4>
                     
                        <div class="log-form mt-8" >
                           <a href="adminauth">
                           <button type="button" class="btn btn-info" style="width: 400px;height:200px;color: white;"><h2>Admin Login</h2>      
                           </button></a>
                           <a href="/register">
                           <br> <button type="button" class="btn btn-danger" style="width: 400px;height:200px;"><h2>Employee Login</h2>       
                           </button></a> 
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      

    </div>
  </div>
</div>
</div>
            </section>
            <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
      <script type="text/javascript">//set 4click 1sbumit

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}



</script>

</body>
</html>
