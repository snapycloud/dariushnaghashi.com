<template>
  <form  method="post" id="booking-now" @submit="bookingNow">
                <div class="row text-center">
                  <div class="col-md-6 pr-10">
                    <div class="form-group">
                      <input type="text" class="form-control" v-model="data.name" placeholder="Your name" required="required">
                    </div>
                    <!--/.form-group --> 
                  </div>
                  <!--/column -->
                  <div class="col-md-6 pl-10">
                    <div class="form-group">
                      <input type="email" class="form-control" v-model="data.email" placeholder="Your e-mail" required="required">
                    </div>
                    <!--/.form-group --> 
                  </div>
                  <!--/column -->
                  <div class="col-md-6 pr-10">
                    <div class="form-group">
                      <input type="tel" class="form-control" v-model="data.tel" placeholder="Phone">
                    </div>
                    <!--/.form-group --> 
                  </div>
                  <!--/column -->
                  <div class="col-md-6 pl-10">
                    <div class="form-group">
                      <input type="text" class="form-control" v-model="data.subject" placeholder="Subject">
                    </div>
                    <!--/.form-group --> 
                  </div>
                  <!--/column -->
                  <div class="col-12">
                    <textarea v-model="data.message" class="form-control" rows="3" placeholder="Type your message here..." required></textarea>
                    <div class="space20"></div>
                    <button type="submit" class="btn btn-full-rounded btn-white" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">Booking Now</button>
                    <footer class="notification-box"></footer>
                  </div>
                  <!--/column --> 
                </div>
                <!--/.row -->
              </form>
</template>

<script>
    export default {
        mounted() {
            
        },
        data: function () {
            return {
              data: {
                name: '',
                email: '',
                tel: '',
                subject: '',
                message: '',
              }
            }
         },
        methods: {
            bookingNow(){
                console.log(this.data);

                this.$axios.post('/booking', this.data).the(function (res){
                  console.log(res)
                }).catch(function(err){
                  console.log(err)
                })
                
            }
        }
    }
</script>
