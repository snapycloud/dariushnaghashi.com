<template>
    <div v-if="status">
        <ul class="social social-mute social-m">
            <li>
                <a href="#" class="">
                    <i class="fa fa-shopping-bag">
                        <span class="badge badge-cutsom">{{count}}</span>
                    </i>
                </a>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
              status: false,
              count: 0
            }
         },
        methods: {
            getList(){
                
            }
        }
    }
</script>
<style>
    .badge-cutsom {
        font-size: 20px
    }
</style>