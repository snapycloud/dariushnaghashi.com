  <section id="{{ $gallery->slug }}">
    <div class="wrapper dark-wrapper inverse-text">
      <div class="inner">
        <h1 class="section-title mb-30 text-center">{{ $gallery->name }}</h1>
        <div class="swiper-container-wrapper swiper-auto light-gallery">
          <div class="swiper-container text-center">
            <div class="swiper-wrapper">
              @foreach($gallery->product as $item)
              <div class="swiper-slide">
                <img src="{{ route('image', $item->cover_id) }}" alt="" />
                <div class="link-wrapper">
                  <div class="link lightbox"><a href="{{ route('image', $item->id) }}"></a></div>
                  <div class="link lightbox"><a href="#{{$item->id}}"></a></div>
                </div>
              </div>
              @endforeach
              
            </div>
            <!-- .swiper-wrapper --> 
          </div>
          <!-- .swiper-container -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <!-- .swiper-container-wrapper --> 
      </div>
      <!-- /.inner --> 
    </div>
    <!-- /.wrapper --> 
  </section>