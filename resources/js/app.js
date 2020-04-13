
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
require('vue2-animate/dist/vue2-animate.min.css');
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('videos-component', require('./components/VideosComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data(){
      return{
        baseUrl:window.axios.defaults.baseURL
      }
    },
    mounted() {
  let recaptchaScript = document.createElement('script')
  recaptchaScript.setAttribute('src', this.baseUrl+'/js/nav-bar.js')
  document.head.appendChild(recaptchaScript)
  // let recaptchaScript2 = document.createElement('script')
  // recaptchaScript2.setAttribute('src', this.baseUrl+'/js/scroll.js')
  // document.head.appendChild(recaptchaScript2)
}
});
