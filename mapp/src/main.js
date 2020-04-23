import Vue from 'vue'
import App from './App.vue'
import Navbar from './components/Navbar.vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);
Vue.component('app-nav',Navbar);

new Vue({
  el: '#app',
  render: h => h(App)
})
