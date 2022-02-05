import router from './routes.js';

import Vue from 'vue';
import vSelect from 'vue-select'
import "vue-select/src/scss/vue-select.scss";

require('./bootstrap');

window.Vue = require('vue');
Vue.component('v-select', vSelect)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);




const app = new Vue({
    router,

    computed:{
        currentPage(){
            return this.$route.path
        }
    },

    beforeRouteUpdate(to, from, next){
		const toDepth = to.path.split('/').length
		const fromDepth = from.path.split('/').length
		this.transitionName = toDepth < fromDepth ? 'slide-right' : 'slide-left'
		next()
	}
}).$mount('#app');
