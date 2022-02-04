import Vue from 'vue';
import VueRouter from 'vue-router'

import DashboardLayout from './components/dashboard/DashboardComponent.vue'
import LibraryListLayout from './components/dashboard/library/LibraryListComponent.vue'
import UserListLayout from './components/dashboard/user/UserListComponent.vue'
Vue.use(VueRouter)

const routes = [

    {
        path : '/dashboard',
        component : DashboardLayout
    },
    {
        path : '/library',
        component : LibraryListLayout
    },
    {
        path : '/user',
        component : UserListLayout
    }


]


export default new VueRouter({routes,mode:'history',base : __dirname})
