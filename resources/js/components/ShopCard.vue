<template>
    <div v-if="status">
        <ul class="social social-mute social-m">
            <li>
                <a href="/shop/card" class="">
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
        mounted() {
            this.$session.start()
            this.key = 'client-' + this.clientIp;
            var shop = this.$session.get(this.key)
            this.count = selected.length
        },
        data: function () {
            return {
              status: true,
              count: 0,
              key: false,
              clientIp: '127.0.0.1'
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