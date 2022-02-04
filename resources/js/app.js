import router from './routes.js';

require('./bootstrap');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);



const app = new Vue({
    router
}).$mount('#app');
