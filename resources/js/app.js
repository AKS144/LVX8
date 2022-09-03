require('./bootstrap');

window.Vue = require('vue').default;


Vue.component('example-component', require('./components/ExampleComponents.vue').default);
Vue.component('category-component', require('./components/CategoryComponents.vue').default);
Vue.component('product-add', require('./components/ProductAdd.vue').default);


import store from './store'

const app = new Vue({
    el: '#app',
    store
});
