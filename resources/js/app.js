import './bootstrap';

require('./bootstrap');

import Vue from 'vue'

import profile from './frontend/components/Profile.vue';

Vue.component('profile', profile);

import VueRouter from 'vue-router'
Vue.use(VueRouter);

import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue);

const app = new Vue({
    el: '#app',
});
