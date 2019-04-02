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
  	<div class="container inner">
  <div class="table-cart">
        <table class="table table-responsive-lg mb-0">
          <thead>
            <tr>
              <th class="cart-thumbnail color-dark">Product</th>
              <th class="cart-description color-dark">Description</th>
              <th class="cart-price color-dark">Unit Price</th>
              <th class="cart-subtotal color-dark">Total</th>
              <th class="cart-remove color-dark"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="cart-thumbnail"><a href="#"> <img src="https://dariushnaghashi.com/image/5ca117118c464c618" alt=""> </a></td>
              <td class="cart-description">
              	<h5 class="mb-0">Hadi chopan</h5>
                <p class="mb-0">Ref/5ca117118c464c618</p>
            </td>
              <td class="cart-price"><span class="amount">12000 IIR</span></td>             
              <td class="cart-subtotal"><span class="amount">12000 IIR</span></td>
              <td class="cart-remove"><a href="#" class="btn-close"></a></td>
            </tr>
          </tbody>
        </table>
      </div>


      <div class="space30"></div>

      <div class="row">
        <div class="col-md-6">
          <h3>Personal Information</h3>
          <form>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="firstName" name="firstName">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="lastName" name="lastName">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email" name="email">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Phone" name="tel">
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- /column -->
        <div class="col-md-6">
          <h3>Order Total</h3>
          <div class="table-responsive">
            <table class="table table-order">
              <tbody>
                <tr>
                  <td><strong class="color-dark">Subtotal</strong></td>
                  <td class="text-right">12000 IIR</td>
                </tr>
                <tr>
                  <td><strong class="color-dark">Total</strong></td>
                  <td class="text-right">12000 IIR</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="text-md-right"> <a class="btn btn-full-rounded" href="#">Proceed to Checkout</a> </div>
          <!-- /.text-right --> 
        </div>
        <!-- /column --> 
      </div>
    </div>

    @include('components.contact')
    @include('components.about')
  
@stop