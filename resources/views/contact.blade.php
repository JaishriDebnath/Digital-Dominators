@include('layouts.Main')
@include('layouts.MainHeader')


<!-- //short-->
      <!--contact -->
      
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
		 <!---728x90--->

            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Contact US</h3>
			<!---728x90--->
            <div class="agile-info-para">
               <!--contact-map -->
               <div class="address_mail_footer_grids">
                  <iframe src="{{url('https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3539.812628729253!2d153.014155!3d-27.4750921!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a0835840a2f%3A0xdd5e3f5c208dc0e1!2sMelbourne+St%2C+South+Brisbane+QLD+4101%2C+Australia!5e0!3m2!1sen!2sin!4v1492257477691')}}"></iframe>
               </div>
               <!--//contact-map -->
               <!--contact-form-->
               <div class="contact-form pt-lg-4 pt-md-3 pt-sm-3 pt-3">
                  <form>
                     <div class="row contact-wls-detail">
                        <div class="col-md-6 agile-wls-contact-mid">
                           <div class="form-group contact-forms">
                              <label class="sub-title-w3layouts">Your Name</label>
                              <input type="text" class="form-control" placeholder="Name">
                           </div>
                           <div class="form-group contact-forms">
                              <label class="sub-title-w3layouts">Enter Email</label>
                              <input type="email" class="form-control" placeholder="Enter" style="height:69px">
                           </div>
                           <div class="form-group contact-forms">
                              <label class="sub-title-w3layouts">Phone</label>
                              <input type="text" class="form-control" placeholder="Phone">
                           </div>
                        </div>
                        <div class="col-md-6 countact-text">
                           <div class="form-group contact-forms">
                              <label class="sub-title-w3layouts">Meassage</label>
                              <textarea class="form-control" rows="3"></textarea>
                           </div>
                           <button type="submit" class="btn btn-block sent-butnn">Submit</button>
                        </div>
                     </div>
                  </form>
               </div>
               <!--//contact-map -->
            </div>
         </div>
		
      @include('layouts.MainFooter')
      </html>