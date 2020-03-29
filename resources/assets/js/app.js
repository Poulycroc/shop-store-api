window.Vue = require('vue');
import Vue from 'vue';
import { BootstrapVue } from 'bootstrap-vue';
Vue.use(BootstrapVue);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

new Vue({
	el: '#app'
});
