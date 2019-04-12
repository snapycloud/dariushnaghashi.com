@extends('layout.master')

@section('header')
    <div class="wrapper image-wrapper bg-image inverse-text" data-image-src="{{ asset('style/images/art/slider-bg6.jpg') }}" style="background-image: url({{ asset('style/images/art/slider-bg6.jpg') }})">
    <div class="container inner pt-120 pb-120 text-center">
      <h1 class="heading mb-0">SHOP CARD TEST</h1>
    </div>
    <!-- /.container --> 
  </div>
@stop

@section('body')
  	<shop-list></shop-list>

    @include('components.contact')
    @include('components.about')
  
@stop