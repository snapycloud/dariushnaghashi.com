<template>
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
            <tr v-for="product in products.list">
              <td class="cart-thumbnail" style="width: 100px; padding-right: 20px"><a href="#"> <img v-bind:src="'https://dariushnaghashi.com/image/' + product.coverId" alt=""> </a></td>
              <td class="cart-description">
                <h5 class="mb-0">{{ product.name }}</h5>
                <p class="mb-0">Ref/ {{ product.coverId }}</p>
            </td>
              <td class="cart-price"><span class="amount">{{ product.unitPrice }} IIR</span></td>             
              <td class="cart-subtotal"><span class="amount">{{ product.unitPrice }} IIR</span></td>
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
                  <td class="text-right">{{ getTotal() }} IIR</td>
                </tr>
                <tr>
                  <td><strong class="color-dark">Total</strong></td>
                  <td class="text-right">{{ getTotal() }} IIR</td>
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
</template>

<script>
    export default {
        created: function() {
            this.getList();
        },
        mounted() {

        },
        data: function () {
            return {
              products: false,
              status: true,
              count: 0,
              key: false,
              clientIp: '127.0.0.1'
            }
         },
        methods: {
            getList(){
                this.$session.start()
                this.key = 'client-' + this.clientIp;
                var shop = this.$session.get(this.key)
                axios.post('/shop/card/product', shop).then(res => {
                  this.products = res.data;
                }).catch(err => {
                  console.log(err);
                })
                // var value = $('.badge').eq(1).text()
            },
            getTotal() {
              var sum = 0;
              var products = this.products.list
              console.log(products, this.products.list);
              for (var item in products) {
                console.log(item, item.unitPrice, sum);
                 sum = sum + item.unitPrice;
              }
              return sum;
            }
        }
    }
</script>