@extends('layout.master')

@section('header')
    @include('components.rev_slider_wrapper')
@stop

@section('body')
	
	@include('components.home_video_wrapper')

    @each('components.swiper_slide', $jobs, 'job')

  @include('components.contact')
  @include('components.about')

@stop