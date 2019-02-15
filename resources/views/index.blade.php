@extends('layout.master')

@section('header')
    @include('components.rev_slider_wrapper')
@stop

@section('body')
  
    @each('components.swiper_slide', $galleries, 'gallery')

    @include('components.contact')
    @include('components.about')
  
@stop