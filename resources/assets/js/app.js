
require('./bootstrap');
var Vue = require('vue');
window.Vue = Vue;

import VueResource from 'vue-resource';

Vue.use(VueResource)
import VueValidate from 'vee-validate';
Vue.use(VueValidate);


           
 

Vue.component('example', require('./components/Example.vue'));
Vue.component('person', require('./components/Person.vue'));
Vue.component('addperson', require('./components/Addperson.vue'));

//Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('content');
const app = new Vue({
    el: '#app'
    
    
    
});
