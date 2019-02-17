@extends('layout.master')

@section('header')
    @include('components.video_wrapper')
@stop

@section('body')
  
  <div class="wrapper light-wrapper">
    <div class="container inner">

    	@foreach($videos as $video)

      <p class="lead2 text-center">{{ $video->name }}</p>
      <div class="space30"></div>
      <div class="tabs-wrapper filtered">
        <!-- /.nav-tabs -->
        <div class="space10"></div>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="tab1-1">
            <div data-aos="fade">
              <div class="tiles">
                <div class="items row">
				@foreach($video->attachment as $attachment)
                  <div class="item col-lg-6">
                    <video class="js-player" poster="../media/v1.jpg" controls preload="none">
                      <source src="{{ route('image', $attachment->id) }}" type="video/mp4">
                    </video>
                  </div>
                  @endforeach

                </div>
                <!--/.row --> 
              </div>
              <!-- /.tiles --> 
            </div>
          </div>
        </div>
        <!-- /.tab-content --> 
      </div>
      
      @endforeach

    </div>
    <!-- /.container --> 
  </div>
  
@stop