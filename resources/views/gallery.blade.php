@extends('layout.master')

@section('header')
    @include('components.video-wrapper')
@stop

@section('body')
  
    @include('components.collage_wrapper')


    @include('components.contact')
    @include('components.about')
  
@stop