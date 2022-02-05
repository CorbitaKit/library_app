import Vue from 'vue';
import VueRouter from 'vue-router'

import DashboardLayout from './components/dashboard/DashboardComponent.vue'
import LibraryListLayout from './components/dashboard/library/LibraryListComponent.vue'
import UserListLayout from './components/dashboard/user/UserListComponent.vue'
import AddUserLayout from './components/dashboard/user/AddUserComponent.vue'
import BookListLayout from './components/dashboard/book/BookListComponent'
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

    },
    {
        path : '/book-list',
        component : BookListLayout
    }


]


export default new VueRouter({routes,mode:'history',base : __dirname})
