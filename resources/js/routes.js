import Vue from 'vue';
import VueRouter from 'vue-router'

import DashboardLayout from './components/dashboard/DashboardComponent.vue'

Vue.use(VueRouter)

const routes = [

    {
        path : '/dashboard',
        component : DashboardLayout
    }


]


export default new VueRouter({routes,mode:'history',base : __dirname})
