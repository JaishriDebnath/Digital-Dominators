@include('layouts.Main')
<head> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    
    <link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">

    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<style>
.one-img{  background: url(../images/b1.jpg)no-repeat center;}
.two-img{  background: url(../images/b2.jpg)no-repeat center;}
.three-img{  background: url(../images/b3.jpg)no-repeat center;} 
.slider-img{  background-size: cover;min-height: 800px;}  
.rslides {
position: relative;
list-style: none;
overflow: hidden;
width: 100%;
padding: 0;
margin: 0;
}
.rslides li {
visibility: hidden;
position: absolute;
display: none;
width: 100%;
left: 0;
top: 0;
}
.rslides li:first-child {
position: relative;
display: block;
float: left;
}
.rslides img {
display: block;
height: auto;
float: left;
width: 100%;
border: 0;
}
/*-- //banner Slider --*/
.rslides {
margin: 0 auto 40px;
}
#slider2,
#slider3 {
box-shadow: none;
-moz-box-shadow: none;
-webkit-box-shadow: none;
margin: 0 auto;
}
.rslides_tabs {
list-style: none;
padding: 0;
background: rgba(0,0,0,.25);
box-shadow: 0 0 1px rgba(255,255,255,.3), inset 0 0 5px rgba(0,0,0,1.0);
-moz-box-shadow: 0 0 1px rgba(255,255,255,.3), inset 0 0 5px rgba(0,0,0,1.0);
-webkit-box-shadow: 0 0 1px rgba(255,255,255,.3), inset 0 0 5px rgba(0,0,0,1.0);
font-size: 18px;
list-style: none;
margin: 0 auto 50px;
max-width: 540px;
padding: 10px 0;
text-align: center;
width: 100%;
}
.rslides_tabs li {
display: inline;
float: none;
margin-right: 1px;
}
.rslides_tabs a {
width: auto;
line-height: 20px;
padding: 9px 20px;
height: auto;
background: transparent;
display: inline;
}
.rslides_tabs li:first-child {
margin-left: 0;
}
.rslides_tabs .rslides_here a {
background: rgba(255,255,255,.1);
color: #fff;
font-weight: bold;
}
a {
color: #fff;
text-decoration: none;
}
</style>
</head>
<div class="header-outs" id="home">
         <div class="header-w3layouts">
            <!--//navigation section -->
            <div class="headr-title text-center">
               <h1><a class="navbar-brand" href="/"><span class="fab fa-servicestack"></span>Employ</a></h1>
               <div class="clearfix"></div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse  nav-fill " id="navbarSupportedContent">
                  <ul class="navbar-nav nav-pills nav-fill">
                     <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                     </li>
                    <li class="nav-item">
                        <a href="/service" class="nav-link ">Service</a>
                     </li>
                     <li class="nav-item">
                        <a href="/gallery" class="nav-link">Gallery</a>
                     </li>

                     <li class="nav-item">
                        <a href="/contact" class="nav-link">Contact</a>
                     </li>
                     <li class="nav-item">
                        <a href="/about" class="nav-link ">About</a>
                     </li>
                     <li class="nav-item ">
                     <a class="nav-link " id="auth_btn">
                       Sign Up
                        </a>
                     </li>
               
                  </ul>
               </div>
            </nav>
         </div>
</div>
         <!-- Sign Up -->

<div class="container mt-3">
<!-- The Modal -->
<div class="modal" id="Auth">
  <div class="modal-dialog">
    <div class="modal-content">

     <form id="form_tag">
      <div class="modal-header">
        <h4 class="modal-title" id="modal_title"></h4>
        <div id="msg"></div>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <input type="hidden" id="id" name="id">
        <input type="email" id="email" name="email" placeholder="Enter data username..." class="form-control"><br>
        <input type="text" id="password" name="password" placeholder="Enter data password..." class="form-control">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary" >Submit</button>
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
     </form>
    </div>
  </div>
         <!-- //Navigation -->
         <!-- Slideshow 4 -->
         <div class="slider">
            <div class="callbacks_container">
               <ul class="rslides" id="slider4">
                  <li>
                     <div class="slider-img one-img">
                        <div class="container">
                           <div class="slider-info ">
                              <div class="upper-info text-left">
                                 
                                 <h5>Follow Your Dream</h5>
                                 <div class="bottom-info">
                                    <h4>Build Your Future</h4>
                                 </div>
                              </div>
                              <div class="outs_more-buttn">
                                 <a href="/about">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img two-img">
                        <div class="container">
                           <div class="slider-info ">
                              <div class="upper-info text-left">
                                 <h5>Share Your Ideas </h5>
                                 <div class="bottom-info">
                                    <h4>Funding And Aims</h4>
                                 </div>
                              </div>
                              <div class="outs_more-buttn">
                                 <a href="/about">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img three-img">
                        <div class="container">
                           <div class="slider-info">
                              <div class="upper-info text-left">
                                 <h5>Face Your Challenge</h5>
                                 <div class="bottom-info">
                                    <h4>
                                       Become a Winner
                                    </h4>
                                 </div>
                              </div>
                              <div class="outs_more-buttn">
                                 <a href="/about">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <!-- This is here just to demonstrate the callbacks -->
            <!-- <ul class="events">
               <li>Example 4 callback events</li>
               </ul>-->
            <div class="clearfix"></div>
         </div>
      </div>
      <!-- //banner -->
      <!--about -->
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
		 <!---728x90--->

            <h3 class="title text-center mb-lg-5 mb-md-4  mb-sm-4 mb-3">BriefLy Us</h3>
         <!---728x90--->           
		   <div class="agile-abt-info ">
               <div class="info-sub-w3 pb-lg-3 pb-md-2 pb-2">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                  </p>
               </div>
            </div>
            <!--text slider -->
            <div class="slider-about rounded my-lg-4 my-md-3 my-sm-3 my-3">
               <div class="flexslider">
                  <ul class="slides">
                     <li>
                        <div class="row">
                           <div class="col-lg-3 about-wls-text-left">
                              <h5>Dolor ipsum</h5>
                           </div>
                           <div class="col-lg-9 about-text-right">
                              <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et
                                 Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                 Lorem ipsum dolor sit amet
                              </p>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="row">
                           <div class="col-lg-3 about-wls-text-left">
                              <h5>Lorem ipsum</h5>
                           </div>
                           <div class="col-lg-9 about-text-right">
                              <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                 Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                 Lorem ipsum dolor sit amet
                              </p>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="row">
                           <div class="col-lg-3 about-wls-text-left">
                              <h5>Consectetur</h5>
                           </div>
                           <div class="col-lg-9 about-text-right">
                              <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                 Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                 Lorem ipsum dolor sit amet
                              </p>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="row">
                           <div class="col-lg-3 about-wls-text-left">
                              <h5>Adipiscing</h5>
                           </div>
                           <div class="col-lg-9 about-text-right">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                 Lorem ipsum dolor sit amet
                              </p>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
            <!--//text slider  -->
            <div class="row">
               <div class=" col-lg-6 col-md-6 wrapper">
                  <canvas id='c' class="about-chat"></canvas>
                  <div class="label">text</div>
               </div>
               <div class="col-lg-6 col-md-6 jst-wthree-text">
                  <h2>Why we Are Best <br>
                     To Others
                  </h2>
                  <div class="about-text-right ">
                     <p class="clr-black">Lorem ipsum dolor sit amet, consectetur<br>adipiscing elit</p>
                  </div>
               </div>
            </div>
         </div>
		 <!---728x90--->
      </section>
      <!--//about -->
      <!--services-->
      <section class="service py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4  mb-sm-4 mb-3">services</h3>
            <div class="row agile-service-grids-all">
               <div class="col-lg-4 w3layouts-service-list">
                  <div class="row white-shadow rounded p-lg-4 p-md-4 p-sm-3 p-3 mb-3 clr-one">
                     <div class="col-md-3 col-sm-3 white-left">
                        <span class="fas fa-lightbulb banner-icon"></span>
                     </div>
                     <div class="col-md-9 col-sm-9 white-right">
                        <h4>Service 1</h4>
                        <p>delectus reiciendis maiores alias consequatur aut.maiores alias consequatur aut.</p>
                     </div>
                  </div>
                  <div class="row white-shadow rounded p-lg-4 p-md-4 p-sm-3 p-3 mb-3 clr-two">
                     <div class="col-md-3 col-sm-3 white-left">
                        <span class="fas fa-chart-pie banner-icon"></span>
                     </div>
                     <div class="col-md-9 col-sm-9 white-right">
                        <h4>Service 2</h4>
                        <p>delectus reiciendis maiores alias consequatur aut.maiores alias consequatur aut.</p>
                     </div>
                  </div>
                  <div class="row white-shadow rounded p-lg-4 p-md-4 p-sm-3 p-3 clr-three">
                     <div class="col-md-3 col-sm-3 white-left">
                        <span class="fab fa-slideshare banner-icon"></span>
                     </div>
                     <div class="col-md-9 col-sm-9 white-right">
                        <h4>Service 3</h4>
                        <p>delectus reiciendis maiores alias consequatur aut.maiores alias consequatur aut.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4  w3layouts-service-list">
                  <div class="white-pie-chart ">
                     <!-- pie-chart -->
                     <div class="area-grids">
                        <div class="area-grids-heading">
                        </div>
                        <div id="graph4"></div>
                     </div>
                     <!-- //pie-chart -->
                  </div>
               </div>
               <div class="col-lg-4  w3layouts-service-list">
                  <div class="row white-shadow rounded p-lg-4 p-md-4 p-sm-3 p-3 mb-3 clr-four">
                     <div class="col-md-3 col-sm-3 white-left">
                        <span class="fas fa-chart-line banner-icon"></span>
                     </div>
                     <div class="col-md-9 col-sm-9 white-right">
                        <h4>Service 4</h4>
                        <p>delectus reiciendis maiores alias consequatur aut.maiores alias consequatur aut.</p>
                     </div>
                  </div>
                  <div class="row white-shadow rounded p-lg-4 p-md-4 p-sm-3 p-3 mb-3 clr-five">
                     <div class="col-md-3 col-sm-3 white-left">
                        <span class="fab fa-cloudscale banner-icon"></span>
                     </div>
                     <div class="col-md-9 col-sm-9 white-right">
                        <h4>Service 5</h4>
                        <p>delectus reiciendis maiores alias consequatur aut.maiores alias consequatur aut.</p>
                     </div>
                  </div>
                  <div class="row white-shadow rounded p-lg-4 p-md-4 p-sm-3 p-3 clr-six">
                     <div class="col-md-3 col-sm-3 white-left">
                        <span class="fas fa-users banner-icon"></span>
                     </div>
                     <div class="col-md-9 col-sm-9 white-right">
                        <h4>Service 6</h4>
                        <p>delectus reiciendis maiores alias consequatur aut.maiores alias consequatur aut.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//services-->
      <!--latest newa-->
      <section class="blog py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Latest News</h3>
            <div class="row blog-top-grids">
               <div class="col-lg-6 left-side-agile mb-3">
                  <div class="least-w3layouts-text-gap">
                     <div class="row  py-3">
                        <div class="col-md-4 col-sm-4 news-img">
                           <img src="{{('assets/images/l1.jpg')}}" alt="" class="image-fluid">
                        </div>
                        <div class="col-md-8 col-sm-8 news-agile-text ">
                           <h4>Lorem ipsum dolor sit amet, consectetur 
                           </h4>
                           <div class="news-date my-3">
                              <ul>
                                 <li><span class="far fa-calendar-check" ></span><a href="#">12/4/2019</a></li>
                                 <li><span class="fas fa-tags"></span><a href="#">5 Tags</a></li>
                                 <li><span class="far fa-comments"></span><a href="#">5 Comments</a></li>
                              </ul>
                           </div>
                           <p class="groom-right text-left">velit sagittis vehicula. Duis posuere 
                              ex in mollis iaculis. Suspendisse tincidunt ut velit id euismod.vulputate turpis porta
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 left-side-agile">
                  <div class="least-w3layouts-text-gap">
                     <div class="row py-3">
                        <div class=" col-md-4 col-sm-4 news-img">
                           <img src="{{('assets/images/l2.jpg')}}" alt="" class="image-fluid">
                        </div>
                        <div class=" col-md-8 col-sm-8 news-agile-text ">
                           <h4>Lorem ipsum dolor sit amet, consectetur 
                           </h4>
                           <div class="news-date my-3">
                              <ul>
                                 <li><span class="far fa-calendar-check" ></span><a href="#">12/4/2019</a></li>
                                 <li><span class="fas fa-tags"></span><a href="#">5 Tags</a></li>
                                 <li><span class="far fa-comments"></span><a href="#">5 Comments</a></li>
                              </ul>
                           </div>
                           <p class="groom-right text-left">velit sagittis vehicula. Duis posuere 
                              ex in mollis iaculis. Suspendisse tincidunt ut velit id euismod.vulputate turpis porta
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row blog-top-grids">
               <div class="col-lg-6 left-side-agile mb-3">
                  <div class="least-w3layouts-text-gap">
                     <div class="row py-3">
                        <div class=" col-md-4 col-sm-4 news-img">
                           <img src="{{('assets/images/l3.jpg')}}" alt="" class="image-fluid">
                        </div>
                        <div class=" col-md-8 col-sm-8 news-agile-text ">
                           <h4>Lorem ipsum dolor sit amet, consectetur 
                           </h4>
                           <div class="news-date my-3">
                              <ul>
                                 <li><span class="far fa-calendar-check" ></span><a href="#">12/4/2019</a></li>
                                 <li><span class="fas fa-tags"></span><a href="#">5 Tags</a></li>
                                 <li><span class="far fa-comments"></span><a href="#">5 Comments</a></li>
                              </ul>
                           </div>
                           <p class="groom-right text-left">velit sagittis vehicula. Duis posuere 
                              ex in mollis iaculis. Suspendisse tincidunt ut velit id euismod.vulputate turpis porta
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 left-side-agile">
                  <div class="least-w3layouts-text-gap">
                     <div class="row py-3">
                        <div class=" col-md-4 col-sm-4 news-img">
                           <img src="{{url('assets/images/l4.jpg')}}" alt="" class="image-fluid">
                        </div>
                        <div class=" col-md-8 col-sm-8 news-agile-text ">
                           <h4>Lorem ipsum dolor sit amet, consectetur 
                           </h4>
                           <div class="news-date my-3">
                              <ul>
                                 <li><span class="far fa-calendar-check" ></span><a href="#">12/4/2019</a></li>
                                 <li><span class="fas fa-tags"></span><a href="#">5 Tags</a></li>
                                 <li><span class="far fa-comments"></span><a href="#">5 Comments</a></li>
                              </ul>
                           </div>
                           <p class="groom-right text-left">velit sagittis vehicula. Duis posuere 
                              ex in mollis iaculis. Suspendisse tincidunt ut velit id euismod.vulputate turpis porta
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--latest news-->
      <!-- Team -->
      <section class="team py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title text-center clr mb-lg-5 mb-md-4 mb-sm-4 mb-3">Our Team</h3>
            <div class="row">
               <!-- Team member -->
               <div class="col-lg-4 team-list-one">
                  <div class="image-flip">
                     <div class="mainflip">
                        <div class="frontside">
                           <div class="card">
                              <div class="card-body text-center">
                                 <p><img src="{{('assets/images/l2.jpg')}}" alt="" class="image-fluid"></p>
                                 <h4 class="card-title mt-3">Max Willness</h4>
                                 <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
                                 <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="backside">
                           <div class="card">
                              <div class="card-body text-center mt-4">
                                 <h4 class="card-title ">Max Willness</h4>
                                 <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                                 <ul class="list-inline">
                                    <li class="list-inline-item">
                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                       <span class="fab fa-facebook-f"></span>
                                       </a>
                                    </li>
                                    <li class="list-inline-item">
                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                       <span class="fab fa-google-plus-g"></span>
                                       </a>
                                    </li>
                                    <li class="list-inline-item">
                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                       <span class="fab fa-twitter"></span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ./Team member -->
               <!-- Team member -->
               <div class="col-lg-4 team-list-two">
                  <div class="image-flip">
                     <div class="mainflip">
                        <div class="frontside">
                           <div class="card">
                              <div class="card-body text-center">
                                 <p><img src="{{url('assets/images/l1.jpg')}}" alt="" class="image-fluid"></p>
                                 <h4 class="card-title mt-3">Rose Will</h4>
                                 <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
                                 <a href="#" class="btn btn-primary btn-sm"><span class="fa fa-plus"></span></a>
                              </div>
                           </div>
                        </div>
                        <div class="backside">
                           <div class="card">
                              <div class="card-body text-center mt-4">
                                 <h4 class="card-title ">Rose Will</h4>
                                 <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                                 <ul class="list-inline">
                                    <li class="list-inline-item">
                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                       <span class="fab fa-facebook-f"></span>
                                       </a>
                                    </li>
                                    <li class="list-inline-item">
                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                       <span class="fab fa-google-plus-g"></span>
                                       </a>
                                    </li>
                                    <li class="list-inline-item">
                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                       <span class="fab fa-twitter"></span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ./Team member -->
               <!-- Team member -->
               <div class="col-lg-4 team-list-three">
                  <div class="image-flip">
                     <div class="mainflip">
                        <div class="frontside">
                           <div class="card">
                              <div class="card-body text-center">
                                 <p><img src="{{url('assets/images/l3.jpg')}}" alt="" class="image-fluid"></p>
                                 <h4 class="card-title mt-3">Bruce Wally</h4>
                                 <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
                                 <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="backside">
                           <div class="card">
                              <div class="card-body text-center mt-4">
                                 <h4 class="card-title ">Bruce Wally</h4>
                                 <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                                 <ul class="list-inline">
                                    <li class="list-inline-item">
                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                       <span class="fab fa-facebook-f"></span>
                                       </a>
                                    </li>
                                    <li class="list-inline-item">
                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                       <span class="fab fa-google-plus-g"></span>
                                       </a>
                                    </li>
                                    <li class="list-inline-item">
                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                       <span class="fab fa-twitter"></span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ./Team member -->
            </div>
         </div>
      </section>
      <!--//team -->


      <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript">//set 4click 1sbumit
$(document).ready(function () {
    $.ajaxSetup({ //cmat
        headers:{
            'x-csrf-token': $('meta[name="csrf-token"]').attr('content') 
        }
    });
});

$("#auth_btn").on('click', function () {
    $("#Auth").modal('show');
    $("#form_tag").trigger('reset');
    $("#modal_title").html('Login Form');
});

$("form").on("submit", function () {
  $.ajax({
    type: "POST",
    url: "auths/welstore/",
    data: $("#form_tag").serialize().done(function (response) {
      $("#msg").text('submitted');
      $("#form_tag").trigger('reset');
      $("#Auth").modal('hide');
    })
  });


});

</script>
      
      @include('layouts.MainFooter')
      </html>