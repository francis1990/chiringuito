require('./bootstrap');

window.Vue = require('vue');


Vue.component('product-component', require('./components/ProductComponent.vue'));
Vue.component('products-component', require('./components/ProductsComponent.vue'));
var datos_SERVER = {
    url_server: 'http://chiringuito.test/',
    //token: $('#token_server').attr('data_token')
};
const app = new Vue({
    el: '#app'
});
