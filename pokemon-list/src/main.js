import Vue from 'vue'
import BootstrapVue from "bootstrap-vue"
import App from './App.vue'
import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap-vue/dist/bootstrap-vue.css"
import RestService from "./services/RestService";

Vue.use(RestService)
Vue.use(BootstrapVue)
Vue.component('hello', require('./components/Hello.vue').default)

new Vue({
  el: '#app',
  render: h => h(App)
})
