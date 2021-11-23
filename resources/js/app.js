/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import axios from 'axios'
import Lists from './components/ListsComponent'

Vue.prototype.$axios = axios;

if (window.location.href.indexOf("lists") != -1) {
    const lists = new Vue({
        el: '#lists',
        render: h => h(Lists)
    });
}
