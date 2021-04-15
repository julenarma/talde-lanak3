/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');

 window.Vue = require('vue');

 import Vue from 'vue/dist/vue'



 window.Vue = Vue
 
 
 import VueAxios from 'vue-axios';
 import VueRouter from 'vue-router';
 import axios from 'axios';
 import { routes } from './routes';
 import VueMoment from 'vue-moment'
 import moment from 'moment-timezone'
 import DataTable from 'laravel-vue-datatable';

 Vue.use(DataTable);





 import Swal from 'sweetalert2';

 // src/main.js





 //---------------------ALERT INSERT REALIZADO---------------------------------
 const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
   
  })

  window.Toast=Toast;


  //---------------------ALERT INSERT REALIZADO fin---------------------------------



  Vue.use(VueRouter);
  Vue.use(VueAxios, axios);
   
  Vue.use(VueMoment, {
    moment,
   })

 const router = new VueRouter({
      mode: 'history',
      routes: routes
  });

 const app = new Vue({
     el: '#app',
     router: router,
     
 });









