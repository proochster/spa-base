import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes'; // Loads declared routes

Vue.use(VueRouter); // Load VueRouter as a component

let app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
});
