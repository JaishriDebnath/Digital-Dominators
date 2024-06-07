@include('layouts.Main')
@include('layouts.MainHeader')
      <!-- //short-->
      <!--Gallery-->
      <section class="gallery py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
		 <!---728x90--->

            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3"><b>Our Gallery</b></h3>
         <!---728x90--->
         <div class="row ">    
@foreach($gallaries as $gallary)
		   
               <div class="col-lg-6 col-md-6 ">
                  <figure class="effect-julia">
                     <img src="/Gallary/{{$gallary->gallary}}" alt="gallary img" style="width:675px;height: 380px;">
                  </figure>
               </div>
            
@endforeach
         </div>
         </div>
		 <!---728x90--->
      </section>
      <!--//Gallery-->
 @include('layouts.MainFooter')
      </html>