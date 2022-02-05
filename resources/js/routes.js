import Vue from 'vue';
import VueRouter from 'vue-router'

import DashboardLayout from './components/dashboard/DashboardComponent.vue'
import LibraryListLayout from './components/dashboard/library/LibraryListComponent.vue'
import UserListLayout from './components/dashboard/user/UserListComponent.vue'
import AddUserLayout from './components/dashboard/user/AddUserComponent.vue'
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
        path : '/user-list',
        component : UserListLayout
    },
    {
        path : '/add-user',
        component : AddUserLayout

    }


]


export default new VueRouter({routes,mode:'history',base : __dirname})
