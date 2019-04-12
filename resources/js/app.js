require('./bootstrap');
window.Vue = require('vue');
const requestIp = require('request-ip');
window.requestIp = requestIp
import VueSession from 'vue-session'
Vue.use(VueSession)

Vue.component('add-card', require('./components/AddCard.vue').default);
Vue.component('add-card-gallery', require('./components/AddCardGallery.vue').default);
Vue.component('shop-card', require('./components/ShopCard.vue').default);
Vue.component('shop-list', require('./components/ShopList.vue').default);
Vue.component('booking-buttom', require('./components/BookButton.vue').default);


const app = new Vue({
    el: '#app'
});
