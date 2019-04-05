require('./bootstrap');
window.Vue = require('vue');
const requestIp = require('request-ip');
import VueSession from 'vue-session'
Vue.use(VueSession)

Vue.component('add-card', require('./components/AddCard.vue').default);
Vue.component('add-card-gallery', require('./components/AddCardGallery.vue').default);
Vue.component('shop-card', require('./components/ShopCard.vue').default);


const app = new Vue({
    el: '#app'
});
