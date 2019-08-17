require('./bootstrap');

import VueRouter from 'vue-router';
import Vuex from 'vuex';
import { Form, HasError, AlertError } from 'vform'
import moment from 'moment';
import VueProgressBar from 'vue-progressbar';
import Swal from 'sweetalert2';

window.Form = Form;
window.Swal = Swal;

Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

import { routes } from './routes';

Vue.use(VueRouter);
Vue.use(Vuex);


const router = new VueRouter({
    mode: 'history',
    routes
});
  

//Filters 

Vue.filter('upText', (text) => {
    return text.charAt(0).toUpperCase() + text.slice(1);
});

Vue.filter('dateFormat', (myDate) => {
    return moment(myDate).format('MMMM Do YYYY');
});

// ProgressBar

const options = {
    color: '#0f9b0f',
    failedColor: '#c31432',
    thickness: '4px',
    transition: {
      speed: '0.2s',
      opacity: '0.6s',
      termination: 300
    },
    autoRevert: true,
    location: 'top',
    inverse: false
  }
  
Vue.use(VueProgressBar, options);
  

// sweetalert2

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

window.Toast = Toast;

// new instance from Vue to make global custom event

window.Fire = new Vue();


const app = new Vue({
    el: '#app',
    router
});
