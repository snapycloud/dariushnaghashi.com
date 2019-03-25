require('./bootstrap');
window.Vue = require('vue');

Vue.component('add-card', require('./components/AddCard.vue').default);
Vue.component('shop-card', require('./components/ShopCard.vue').default);


const app = new Vue({
    el: '#app'
});
