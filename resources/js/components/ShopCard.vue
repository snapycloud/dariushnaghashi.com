<template>
    <div v-if="status">
        <div class="navbar-divider"></div>
        <ul class="social social-mute social-m">
          <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
        </ul>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
              status: false
            }
         },
        methods: {
            getList(){
                
            }
        }
    }
</script>
