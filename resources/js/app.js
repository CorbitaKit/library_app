import router from './routes.js';
import ElementUI from 'element-ui';
import Vue from 'vue';



require('./bootstrap');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.use(ElementUI);


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
