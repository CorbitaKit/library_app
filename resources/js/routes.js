import Vue from 'vue';
import VueRouter from 'vue-router'

import DashboardLayout from './components/dashboard/DashboardComponent'
import LibraryListLayout from './components/dashboard/library/LibraryListComponent'
import UserListLayout from './components/dashboard/user/UserListComponent'
import AddUserLayout from './components/dashboard/user/AddUserComponent'
import BookListLayout from './components/dashboard/book/BookListComponent'
import AddBookLayout from './components/dashboard/book/AddBookComponent'
import BookDetailsLayout from './components/dashboard/book/BookDetailsComponent'
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
        path : '/user-list/',
        component : UserListLayout
    },
    {
        path : '/add-user/:user_id?',
        component : AddUserLayout,
        props : true

    },
    {
        path : '/book-list',
        component : BookListLayout
    },
    {
        path : '/add-book',
        component : AddBookLayout
    },
    {
        path : '/book-details/:book_id',
        component : BookDetailsLayout,
        props : true
    }


]


export default new VueRouter({routes,mode:'history',base : __dirname})
