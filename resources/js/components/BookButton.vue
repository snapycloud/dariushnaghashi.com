<template>
    <div>
        <button v-if="status" class="btn booking-btn btn-full-rounded hover" @click="" style="display: none">book me</button>
    </div>
</template>

<script>
    export default {
        mounted() {
        },
        data: function () {
            return {
                status: true
            }
         },
        methods: {
            goBooking(){
                document.getElementById("contact").scrollIntoView()
                this.status = false    
            }
        }
    }
</script>

<style>

/* Smartphones (portrait) ----------- */
@media (min-width:320px)  { 
    .booking-btn {
        position: fixed;
        z-index: 999999999;
        bottom: 20px;
        left: 20px;
        width: 90%;
        color: white;
        display: block !important;
    }
}


@media (min-width:480px)  { 
  .booking-btn {
        position: fixed;
        z-index: 999999999;
        bottom: 20px;
        left: 20px;
        width: 90%;
        color: white;
        display: block !important;
  }
}
</style>
