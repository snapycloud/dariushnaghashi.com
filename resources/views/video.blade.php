@extends('layout.master')

@section('header')
    @include('components.video_wrapper')
@stop

@section('body')
  
  <div class="wrapper dark-wrapper">
    <div class="container inner">

    	@foreach($videos as $video)

    	<div class="container inner pb-0">
      <h2 class="section-title text-center">{{ $video->name }}</h2>
    </div>
      <div class="space30"></div>
      <div class="tabs-wrapper">
        <!-- /.nav-tabs -->
        <div class="space10"></div>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="tab1-1">
            <div data-aos="fade">
              <div class="tiles">
                <div class="items row">
				@foreach($video->attachment as $attachment)
                  <div class="item col-lg-offset-2 col-lg-8">
                    <video style="height: 400px" class="js-player" poster="{{ route('image', $video->cover_id) }}" controls preload="none">
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