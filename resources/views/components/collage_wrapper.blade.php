<div class="wrapper dark-wrapper inverse-text">    

    <div class="container inner pb-0">
      <h2 class="section-title text-center">{{ $gallery->name }}</h2>
    </div>


    <div class="collage-wrapper">
      <div id="collage-large" class="collage effect-parent light-gallery">

        @foreach($gallery->attachment as $item)
          <div class="collage-image-wrapper">
            <div class="overlay overlay2"><a href="{{ route('image', $item->id) }}" data-sub-html="">
              <img src="{{ route('image', $item->id) }}" style="width:675px; height:450px;" alt="" /></a>
            </div>
          </div>
        @endforeach

      </div>
    </div>
    <div class="space10"></div>
  </div>
