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
        created: function() {
            this.getShopCount();
            setInterval(this.getShopCount, 500)
        },
        mounted() {

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
                
            },
            getShopCount(){
                this.$session.start()
                this.key = 'client-' + this.clientIp;
                var shop = this.$session.get(this.key)
                // var value = $('.badge').eq(1).text()
                if(shop) {
                    $('.badge').eq(0).text(shop.length)
                    this.count = shop.length
                }
            }
        }
    }
</script>
<style>
    .badge-cutsom {
        font-size: 20px
    }
</style>