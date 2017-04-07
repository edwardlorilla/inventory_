
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));
// Vue.component('my-vuetable', require('./components/MyVuetable.vue'));
Vue.component('users', require('./components/Users/index.vue'));
Vue.component('products', require('./components/Products/index.vue'));
Vue.component('locations', require('./components/Locations/index.vue'));
Vue.component('manufactures', require('./components/Manufactures/index.vue'));
Vue.component('categories', require('./components/Categories/index.vue'));
Vue.component('departments', require('./components/Departments/index.vue'));
Vue.component('brands', require('./components/Brands/index.vue'));
const app = new Vue({
    el: '#app'
});
