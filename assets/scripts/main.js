import "babel-polyfill";
require('./bootstrap');

Vue.component('example', require('./components/Example.vue'));

var app = new Vue({
  el: '#app'
});