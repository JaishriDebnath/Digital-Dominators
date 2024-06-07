<!--Footer -->
<section class="buttom-footer py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
            <div class="pt-lg-5 pt-md-5 pt-sm-4 pt-3">
               <div class="row footer-agile-grids ">
                  <div class="col-lg-4 col-md-4 col-sm-12 wthree-left-right">
                     <h4>Nav Links</h4>
                     <nav class="border-line">
                        <ul class="nav flex-column">
                           <li class="nav-item ">
                              <a class="nav-link" href="/index">Home <span class="sr-only">(current)</span></a>
                           </li>
                           <li class="nav-item">
                              <a href="/jobs" class="nav-link">Career</a>
                           </li>
                           <li class="nav-item">
                              <a href="/gallery" class="nav-link">Gallery</a>
                           </li>
                           <li class="nav-item">
                              <a href="/service" class="nav-link">Service</a>
                           </li>
                           <li class="nav-item">
                              <a href="/about" class="nav-link ">About</a>
                           </li>
                           <li class="nav-item">
                              <a href="Sign Up" class="nav-link ">Sign Up</a>
                           </li>
                        </ul>
                     </nav>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 wthree-left-right">
                     <h4>Our Address</h4>
                  
                     <div class="addres-up">
                        <ul>
                           <li  class="d-flex pb-md-3 pb-3">
                              <span class="fas fa-map-marker-alt d-flex"></span>
                              <p class="d-flex">{{$contacts->address}}</p>
                           </li>
                           <li class="d-flex pb-md-3 pb-3">
                              <span class="fas fa-phone-volume d-flex" aria-hidden="true"></span>
                              <p class="d-flex">+91{{$contacts->phone}}</p>
                           </li>
                           <li  class="d-flex pb-md-3 pb-3">
                              <span class="far fa-envelope d-flex"></span>
                              <p class="d-flex"><span>{{$contacts->email}}</span></p>
                           </li>
                           <li class="d-flex pb-md-3 pb-3">
                              <span class="fas fa-fax d-flex"></span>
                              <p class="d-flex">{{$contacts->fax}}</p>
                           </li>
                           <li  class="d-flex">
                              <span class="fab fa-windows d-flex" aria-hidden="true"></span>
                              <p class="d-flex">{{$contacts->url}}</p>
                           </li>
                        </ul>
                     </div>
                     
                     <div class="icons mt-4">
                        <ul>
                           <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                           <li><a href="#"><span class="fas fa-envelope"></span></a></li>
                           <li><a href="#"><span class="fas fa-rss"></span></a></li>
                           <li><a href="#"><span class="fab fa-vk"></span></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="wthree-left-right col-lg-4 col-md-4 col-sm-12">
                     <h4 class="pb-lg-3 pb-3">Our Posts</h4>                     
                     @foreach($gallaries->chunk(3) as $chunk)
                     <div class="row">
                        @foreach($chunk as $gallary)
                    <div class="footer-post d-flex mb-2">
                        <div class="agileinfo_footer_grid1 mr-2">
                        <a href="/gallery">
                           <img src="/Gallary/{{$gallary->gallary}}" alt=" " class="img-fluid" style="width: 100px;height:100px;">
                           </a>
                        </div>
                        </div>
                        @endforeach
                     </div>
                        @endforeach
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--js working-->
      <script data-cfasync="false" src="../../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!--responsiveslides banner-->
      <script src="{{url('assets/tjs/responsiveslides.min.js')}}"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
         	// Slideshow 4
         	$("#slider4").responsiveSlides({
         		auto: true,
         		pager:true,
         		nav: false,
         		speed: 900,
         		namespace: "callbacks",
         		before: function () {
         			$('.events').append("<li>before event fired.</li>");
         		},
         		after: function () {
         			$('.events').append("<li>after event fired.</li>");
         		}
         	});
         
         });
      </script>
      <!--// responsiveslides banner-->	  
      <!--About OnScroll-Number-Increase-JavaScript -->
      <script src="{{url('assets/tjs/jquery.waypoints.min.js')}}"></script>
      <script src="{{url('assets/tjs/jquery.countup.js')}}"></script>
      <script>
         $('.counter').countUp();
      </script>
      <!-- //OnScroll-Number-Increase-JavaScript -->
      <!--FlexSlider-JavaScript -->
      <script defer src="{{url('assets/tjs/jquery.flexslider.js')}}"></script>
      <script>
         $(window).load(function(){
         $('.flexslider').flexslider({
         	animation: "slide",
         	start: function(slider){
         		$('body').removeClass('loading');
         	}
         });
         });
      </script>
      <!-- //FlexSlider-JavaScript -->
      <!--About Chart-JavaScript -->
      <script>
         var label = document.querySelector(".label");
         var c = document.getElementById("c");
         var ctx = c.getContext("2d");
         var cw = c.width =500;
         var ch = c.height = 350;
         var cx = cw / 2,
           cy = ch / 2;
         var rad = Math.PI / 180;
         var frames = 0;
         
         ctx.lineWidth = 1;
         ctx.strokeStyle = "#999";
         ctx.fillStyle = "#ccc";
         ctx.font = "14px monospace";
         
         var grd = ctx.createLinearGradient(0, 0, 0, cy);
         grd.addColorStop(0, "hsla(167,72%,60%,1)");
         grd.addColorStop(1, "hsla(167,72%,60%,0)");
         
         var oData = {
           "2008": 10,
           "2009": 39.9,
           "2010": 17,
           "2011": 30.0,
           "2012": 5.3,
           "2013": 38.4,
           "2014": 15.7,
           "2015": 9.0
         };
         
         var valuesRy = [];
         var propsRy = [];
         for (var prop in oData) {
         
           valuesRy.push(oData[prop]);
           propsRy.push(prop);
         }
         
         
         var vData = 4;
         var hData = valuesRy.length;
         var offset = 50.5; //offset chart axis
         var chartHeight = ch - 2 * offset;
         var chartWidth = cw - 2 * offset;
         var t = 1 / 7; // curvature : 0 = no curvature 
         var speed = 2; // for the animation
         
         var A = {
           x: offset,
           y: offset
         }
         var B = {
           x: offset,
           y: offset + chartHeight
         }
         var C = {
           x: offset + chartWidth,
           y: offset + chartHeight
         }
         
         /*
               A  ^
         	    |  |  
         	    + 25
         	    |
         	    |
         	    |
         	    + 25  
               |__|_________________________________  C
               B
         */
         
         // CHART AXIS -------------------------
         ctx.beginPath();
         ctx.moveTo(A.x, A.y);
         ctx.lineTo(B.x, B.y);
         ctx.lineTo(C.x, C.y);
         ctx.stroke();
         
         // vertical ( A - B )
         var aStep = (chartHeight - 50) / (vData);
         
         var Max = Math.ceil(arrayMax(valuesRy) / 10) * 10;
         var Min = Math.floor(arrayMin(valuesRy) / 10) * 10;
         var aStepValue = (Max - Min) / (vData);
         console.log("aStepValue: " + aStepValue); //8 units
         var verticalUnit = aStep / aStepValue;
         
         var a = [];
         ctx.textAlign = "right";
         ctx.textBaseline = "middle";
         for (var i = 0; i <= vData; i++) {
         
           if (i == 0) {
             a[i] = {
               x: A.x,
               y: A.y + 20,
               val: Max
             }
           } else {
             a[i] = {}
             a[i].x = a[i - 1].x;
             a[i].y = a[i - 1].y + aStep;
             a[i].val = a[i - 1].val - aStepValue;
           }
           drawCoords(a[i], 3, 0);
         }
         
         //horizontal ( B - C )
         var b = [];
         ctx.textAlign = "center";
         ctx.textBaseline = "hanging";
         var bStep = chartWidth / (hData + 1);
         
         for (var i = 0; i < hData; i++) {
           if (i == 0) {
             b[i] = {
               x: B.x + bStep,
               y: B.y,
               val: propsRy[0]
             };
           } else {
             b[i] = {}
             b[i].x = b[i - 1].x + bStep;
             b[i].y = b[i - 1].y;
             b[i].val = propsRy[i]
           }
           drawCoords(b[i], 0, 3)
         }
         
         function drawCoords(o, offX, offY) {
           ctx.beginPath();
           ctx.moveTo(o.x - offX, o.y - offY);
           ctx.lineTo(o.x + offX, o.y + offY);
           ctx.stroke();
         
           ctx.fillText(o.val, o.x - 2 * offX, o.y + 2 * offY);
         }
         //----------------------------------------------------------
         
         // DATA
         var oDots = [];
         var oFlat = [];
         var i = 0;
         
         for (var prop in oData) {
           oDots[i] = {}
           oFlat[i] = {}
         
           oDots[i].x = b[i].x;
           oFlat[i].x = b[i].x;
         
           oDots[i].y = b[i].y - oData[prop] * verticalUnit - 20;
           oFlat[i].y = b[i].y - 25;
         
           oDots[i].val = oData[b[i].val];
           
           i++
         }
         ///// Animation Chart ///////////////////////////
         //var speed = 3;
         function animateChart() {
           requestId = window.requestAnimationFrame(animateChart);
           frames += speed; //console.log(frames)
           ctx.clearRect(60, 0, cw, ch - 60);
           
           for (var i = 0; i < oFlat.length; i++) {
             if (oFlat[i].y > oDots[i].y) {
               oFlat[i].y -= speed;
             }
           }
           drawCurve(oFlat);
           for (var i = 0; i < oFlat.length; i++) {
               ctx.fillText(oDots[i].val, oFlat[i].x, oFlat[i].y - 25);
               ctx.beginPath();
               ctx.arc(oFlat[i].x, oFlat[i].y, 3, 0, 2 * Math.PI);
               ctx.fill();
             }
         
           if (frames >= Max * verticalUnit) {
             window.cancelAnimationFrame(requestId);
             
           }
         }
         requestId = window.requestAnimationFrame(animateChart);
         
         /////// EVENTS //////////////////////
         c.addEventListener("mousemove", function(e) {
           label.innerHTML = "";
           label.style.display = "none";
           this.style.cursor = "default";
         
           var m = oMousePos(this, e);
           for (var i = 0; i < oDots.length; i++) {
         
             output(m, i);
           }
         
         }, false);
         
         function output(m, i) {
           ctx.beginPath();
           ctx.arc(oDots[i].x, oDots[i].y, 20, 0, 2 * Math.PI);
           if (ctx.isPointInPath(m.x, m.y)) {
             //console.log(i);
             label.style.display = "block";
             label.style.top = (m.y + 10) + "px";
             label.style.left = (m.x + 10) + "px";
             label.innerHTML = "<strong>" + propsRy[i] + "</strong>: " + valuesRy[i] + "%";
             c.style.cursor = "pointer";
           }
         }
         
         // CURVATURE
         function controlPoints(p) {
           // given the points array p calculate the control points
           var pc = [];
           for (var i = 1; i < p.length - 1; i++) {
             var dx = p[i - 1].x - p[i + 1].x; // difference x
             var dy = p[i - 1].y - p[i + 1].y; // difference y
             // the first control point
             var x1 = p[i].x - dx * t;
             var y1 = p[i].y - dy * t;
             var o1 = {
               x: x1,
               y: y1
             };
         
             // the second control point
             var x2 = p[i].x + dx * t;
             var y2 = p[i].y + dy * t;
             var o2 = {
               x: x2,
               y: y2
             };
         
             // building the control points array
             pc[i] = [];
             pc[i].push(o1);
             pc[i].push(o2);
           }
           return pc;
         }
         
         function drawCurve(p) {
         
           var pc = controlPoints(p); // the control points array
         
           ctx.beginPath();
           //ctx.moveTo(p[0].x, B.y- 25);
           ctx.lineTo(p[0].x, p[0].y);
           // the first & the last curve are quadratic Bezier
           // because I'm using push(), pc[i][1] comes before pc[i][0]
           ctx.quadraticCurveTo(pc[1][1].x, pc[1][1].y, p[1].x, p[1].y);
         
           if (p.length > 2) {
             // central curves are cubic Bezier
             for (var i = 1; i < p.length - 2; i++) {
               ctx.bezierCurveTo(pc[i][0].x, pc[i][0].y, pc[i + 1][1].x, pc[i + 1][1].y, p[i + 1].x, p[i + 1].y);
             }
             // the first & the last curve are quadratic Bezier
             var n = p.length - 1;
             ctx.quadraticCurveTo(pc[n - 1][0].x, pc[n - 1][0].y, p[n].x, p[n].y);
           }
         
           //ctx.lineTo(p[p.length-1].x, B.y- 25);
           ctx.stroke();
           ctx.save();
           ctx.fillStyle = grd;
           ctx.fill();
           ctx.restore();
         }
         
         function arrayMax(array) {
           return Math.max.apply(Math, array);
         };
         
         function arrayMin(array) {
           return Math.min.apply(Math, array);
         };
         
         function oMousePos(canvas, evt) {
           var ClientRect = canvas.getBoundingClientRect();
           return { //objeto
             x: Math.round(evt.clientX - ClientRect.left),
             y: Math.round(evt.clientY - ClientRect.top)
           }
         }
      </script>
      <!-- //Chart-JavaScript -->
      <!--service pie-charts -->
      <script src="{{url('assets/tjs/raphael-min.js')}}"></script>
      <script src="{{url('assets/tjs/morris.js')}}"></script>
      <script>
         Morris.Donut({
           element: 'graph4',
           data: [
           {value: 20, label: 'Team', formatted: 'at least 20%' },
         	{value: 50, label: 'Start Up', formatted: 'at least 50%' },
         	{value: 10, label: 'Business', formatted: 'approx. 10%' },
         	{value: 10, label: 'Plan', formatted: 'approx. 10%' },
         	{value: 10, label: 'A really really long label', formatted: 'Sucess 10%' }
           ],
           formatter: function (x, data) { return data.formatted; }
         });
      </script>
      <!-- //charts -->
      <!-- //pie-Chart-JavaScript -->
      <!-- start-smoth-scrolling -->
      <script src="{{url('assets/tjs/move-top.js')}}"></script>
      <script src="{{url('assets/tjs/easing.js')}}"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="{{('assets/tjs/bootstrap.min.js')}}"></script>
      <!-- //bootstrap working-->
   
<script>(function(){if (!document.body) return;var js = "window['__CF$cv$params']={r:'87d183f5aa69d5c9',t:'MTcxNDU4NDc5NC45NjUwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../../../../../cdn-cgi/challenge-platform/h/g/scripts/jsd/d0ff3ebede6b/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>

