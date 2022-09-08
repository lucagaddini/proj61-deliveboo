
require('./bootstrap');

window.Vue = require('vue');

import App from './App.vue';
import router from './routes';

import { ValidationProvider } from 'vee-validate/dist/vee-validate.full.esm';
import {  ValidationObserver } from 'vee-validate';

Vue.component('ValidationProvider', ValidationProvider);
Vue.component('ValidationObserver', ValidationObserver);

import { extend } from 'vee-validate';
import * as rules from 'vee-validate/dist/rules';

const app = new Vue({

    el: '#app',
    router,

    render: h => h(App)

});

