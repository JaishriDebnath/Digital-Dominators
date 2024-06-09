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

                  
                     @foreach($gallaries->chunk(3) as $chunk)
                     <div class="row">
                        @foreach($chunk as $gallary)
                    <div class="footer-post d-flex mb-2">
                        <div class="agileinfo_footer_grid1 mr-2">
                        <a href="/gallery">
                           <img src="/Gallary/{{$gallary->gallary}}"  alt="gallary img" style="width:675px;height: 380px;">
                           </a>
                        </div>
                        </div>
                        @endforeach
                     </div>
                        @endforeach
         </div>
         </div>
		 <!---728x90--->
      </section>
      <!--//Gallery-->
 @include('layouts.MainFooter')
      </html>