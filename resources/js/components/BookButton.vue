<template>
    <div>
        <button v-if="status" class="btn booking-btn btn-full-rounded hover" @click.prevent="goBooking" style="display: none">book me</button>
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
                document.getElementById("booking-now").scrollIntoView()
                this.status = false    
            }
        }
    }
</script>

<style>
@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 480px)
  and (-webkit-min-device-pixel-ratio: 2) {
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
