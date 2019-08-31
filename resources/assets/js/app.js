require('./bootstrap');

window.Vue = require('vue');

/*Product Componentes*/
Vue.component('product_crud_component', require('./product_component/Product_crud_component.vue'));
Vue.component('product_table_list', require('./product_component/Product_table_list.vue'));
Vue.component('product_form', require('./product_component/Product_form.vue'));
Vue.component('prueba', require('./product_component/prueba.vue'));

var datos_SERVER = {
    url_server: 'http://chiringuito.test/',

    //token: $('#token_server').attr('data_token')
};
const mv = new Vue({
    el: '#app'
});
