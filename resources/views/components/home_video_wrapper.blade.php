
    <div class="wrapper dark-wrapper inverse-text">
    <div class="container inner">
      <div class="row">
        <div class="col-md-8">
          <div data-aos="fade">
            <video class="js-player" poster="{{ asset('style/media/video.jpg') }}" controls preload="none">
              <source src="{{ route('image', $video->attachment->first()->id) }}" type="video/mp4">
            </video>
          </div>
        </div>
        <!--/column -->
        <div class="col-md-4 pl-md-5">
          <h2 class="section-title">Featured</h2>
          <div class="meta larger">Darush Naghashi</div>
          <div class="space10"></div>
          <p>I BELIEVE GREAT SERVICE IS GREAT FOR BUSINESS. SO I BUILT A PRODUCTION COMPANY THAT DELIVERS OUTSTANDING CONTENT WITH AMAZING SERVICE</p>
          <div class="space10"></div>
          <a href="{{ route('videos') }}" class="btn btn-full-rounded btn-white">Check All Videos</a> </div>
        <!--/column --> 
      </div>
      <!--/.row --> 
    </div>
    <!-- /.container --> 
  </div>