  <section id="contact">
    <div class="wrapper dark-wrapper inverse-text">
      <div class="container inner">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <h2 class="section-title text-center">Get in Touch</h2>
            <p class="text-center">Contact me to get your photo session scheduled and to discuss your ambitions. Send questions about rates, packages and image licensing. I look forward to creating your amazing photographs that will elevate your presence! –Remember, these photos are about you. Choose your adventure!.</p>
            <div class="space20"></div>
            <div class="row text-center">
              <div class="col-md-4"> <span class="icon icon-color color-white fs-48 mb-10"><i class="si-camping_map"></i></span>
                <p>Tehran, Iran<br>Shahrake Gharb</p>
              </div>
              <!--/column -->
              <div class="col-md-4"> <span class="icon icon-color color-white fs-48 mb-10"><i class="si-phone_phone-ringing"></i></span>
                <p>(98) 912 000 00 00<br>
                  (98) 912 000 00 00 </p>
              </div>
              <!--/column -->
              <div class="col-md-4"> <span class="icon icon-color color-white fs-48 mb-10"><i class="si-mail_mail-2"></i></span>
                <p><a class="nocolor" href="mailto:dariush.naghashi@gmail.com ">dariush.naghashi@gmail.com </a></p>
              </div>
              <!--/column --> 
            </div>
            <!--/.row -->
            <div class="space30"></div>
            <div class="form-container">
               @if($errors->any())
               <div class="alert alert-danger" role="alert"> 
                  <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
               </div>
                    
                  {{--   <div class="box small rounded bkg-red color-white  rtl">
                    <span class="order-number  opacity-07">اطلاعات وارد شده اشتباه است</span>
                  </div> --}}
                @endif

              <booking></booking>
              <!--/.vanilla-form --> 
            </div>
            <!--/.form-container --> 
          </div>
          <!-- /column --> 
        </div>
        <!-- /.row --> 
      </div>
      <!-- /.container --> 
    </div>
    <!-- /.wrapper --> 
  </section>