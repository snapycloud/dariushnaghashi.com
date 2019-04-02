@extends('layout.master')

@section('header')
    <div class="wrapper image-wrapper bg-image inverse-text" data-image-src="style/images/art/bg2.jpg" style="background-image: url(&quot;style/images/art/bg2.jpg&quot;);">
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
              <th class="cart-size color-dark">Size</th>
              <th class="cart-price color-dark">Unit Price</th>
              <th class="cart-quantity color-dark">Quantity</th>
              <th class="cart-subtotal color-dark">Total</th>
              <th class="cart-remove color-dark"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="cart-thumbnail"><a href="#"> <img src="style/images/art/a1.jpg" alt=""> </a></td>
              <td class="cart-description"><h5 class="mb-0">Pharetra Vehicula Ornare</h5>
                <p class="mb-0">Ref. 1786/94</p></td>
              <td class="cart-size"><div class="picker size-picker"><span>XS</span></div></td>
              <td class="cart-price"><span class="amount">$29.99</span></td>
              <td class="cart-quantity"><div class="form-group product-quantity">
      	          <input type="button" value="-">
      	          <input type="text" name="quantity" value="1" class="qty">
      	          <input type="button" value="+">
      	        </div></td>
              <td class="cart-subtotal"><span class="amount">$29.99</span></td>
              <td class="cart-remove"><a href="#" class="btn-close"></a></td>
            </tr>
            <tr>
              <td class="cart-thumbnail"><a href="#"> <img alt="" src="style/images/art/a2.jpg"> </a></td>
              <td class="cart-description"><h5 class="mb-0">Fringilla Ridiculus</h5>
                <p class="mb-0">Ref. 6749/86</p></td>
              <td class="cart-size"><div class="picker size-picker"><span>L</span></div></td>
              <td class="cart-price"><span class="amount">$15.99</span></td>
              <td class="cart-quantity"><div class="form-group product-quantity">
      	          <input type="button" value="-">
      	          <input type="text" name="quantity" value="1" class="qty">
      	          <input type="button" value="+">
      	        </div></td>
              <td class="cart-subtotal"><span class="amount">$15.99</span></td>
              <td class="cart-remove"><a href="#" class="btn-close"></a></td>
            </tr>
            <tr>
              <td class="cart-thumbnail"><a href="#"> <img src="style/images/art/a3.jpg" alt=""> </a></td>
              <td class="cart-description"><h5 class="mb-0">Amet Fringilla Parturient</h5>
                <p class="mb-0">Ref. 7563/67</p></td>
              <td class="cart-size"><div class="picker size-picker"><span>M</span></div></td>
              <td class="cart-price"><span class="amount">$12.99</span></td>
              <td class="cart-quantity"><div class="form-group product-quantity">
      	          <input type="button" value="-">
      	          <input type="text" name="quantity" value="1" class="qty">
      	          <input type="button" value="+">
      	        </div></td>
              <td class="cart-subtotal"><span class="amount">$25.98</span></td>
              <td class="cart-remove"><a href="#" class="btn-close"></a></td>
            </tr>
          </tbody>
        </table>
      </div>


      <div class="space30"></div>

      <div class="row">
        <div class="col-md-6">
          <h3>Calculate Shipping</h3>
          <form>
            <div class="form-group custom-select-wrapper">
              <select class="custom-select">
                <option selected="">Select Country</option>
                <option value="country1">Country 1</option>
                <option value="country2">Country 2</option>
                <option value="country3">Country 3</option>
                <option value="country4">Country 4</option>
              </select>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="State*">
                </div>
              </div>
              <!--/column -->
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Postcode / ZIP*">
                </div>
              </div>
              <!--/column --> 
            </div>
            <!--/.row -->
            <button type="submit" class="btn btn-full-rounded">Update Totals</button>
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
                  <td class="text-right">$71.96</td>
                </tr>
                <tr>
                  <td><strong class="color-dark">Tax (5%)</strong></td>
                  <td class="text-right">$3.6</td>
                </tr>
                <tr>
                  <td><strong class="color-dark">Shipping</strong></td>
                  <td class="text-right">$10</td>
                </tr>
                <tr>
                  <td><strong class="color-dark">Grand Total</strong></td>
                  <td class="text-right">$76.56</td>
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