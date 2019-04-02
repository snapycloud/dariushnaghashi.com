<div class="wrapper dark-wrapper inverse-text">    

    <div class="container inner pb-0">
      <h2 class="section-title text-center">{{ $gallery->name }}</h2>
    </div>


    <div class="collage-wrapper">
      <div id="collage-large" class="collage effect-parent light-gallery">

        @foreach($gallery->product as $item)
          <div class="collage-image-wrapper">
            <div class="overlay overlay2">
              <a href="{{ route('image', $item->cover_id) }}" data-sub-html="">
                <img src="{{ route('image', $item->cover_id) }}"  alt="" />
              </a>
              <add-card-gallery id="{{ $item->id }}" price="{{ $item->cost_price }}" ></add-card-gallery>
            </div>
          </div>
        @endforeach

      </div>
    </div>
    <div class="space10"></div>
  </div>
