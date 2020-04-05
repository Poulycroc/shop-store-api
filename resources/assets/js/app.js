window.Vue = require('vue');
import Vue from 'vue';
import { BootstrapVue } from 'bootstrap-vue';
import Argon from "./plugins/argon/argon-kit";

Vue.use(BootstrapVue);
Vue.use(Argon);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

new Vue({
	el: '#app'
});
