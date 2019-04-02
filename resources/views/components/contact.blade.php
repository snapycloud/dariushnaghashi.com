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
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  {{--   <div class="box small rounded bkg-red color-white  rtl">
                    <span class="order-number  opacity-07">اطلاعات وارد شده اشتباه است</span>
                  </div> --}}
                @endif

              <form action="{{ route('booking') }}" method="post">
                {{ csrf_field() }}
                <div class="row text-center">
                  <div class="col-md-6 pr-10">
                    <div class="form-group">
                      <input type="text" class="form-control" name="name" placeholder="Your name" required="required">
                    </div>
                    <!--/.form-group --> 
                  </div>
                  <!--/column -->
                  <div class="col-md-6 pl-10">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="Your e-mail" required="required">
                    </div>
                    <!--/.form-group --> 
                  </div>
                  <!--/column -->
                  <div class="col-md-6 pr-10">
                    <div class="form-group">
                      <input type="tel" class="form-control" name="tel" placeholder="Phone">
                    </div>
                    <!--/.form-group --> 
                  </div>
                  <!--/column -->
                  <div class="col-md-6 pl-10">
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                    <!--/.form-group --> 
                  </div>
                  <!--/column -->
                  <div class="col-12">
                    <textarea name="message" class="form-control" rows="3" placeholder="Type your message here..." required></textarea>
                    <div class="space20"></div>
                    <button type="submit" class="btn btn-full-rounded btn-white" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">Submit</button>
                    <footer class="notification-box"></footer>
                  </div>
                  <!--/column --> 
                </div>
                <!--/.row -->
              </form>
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