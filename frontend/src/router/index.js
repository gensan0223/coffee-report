import { createRouter, createWebHistory } from 'vue-router';
import Home from '../pages/Home.vue';
import Search from '../pages/Search.vue';
import Add from '../pages/Order.vue';
import Notification from '../pages/Notification.vue';
import Profile from '../pages/Profile.vue';

const routes = [
    {
        path: '/home',
        name: 'Home',
        component: Home,
    },
    {
        path: '/search',
        name: 'Search',
        component: Search,
    },
    {
        path: '/add',
        name: 'Add',
        component: Add,
    },
    {
        path: '/notification',
        name: 'Notification',
        component: Notification,
    },
    {
        path: '/profile',
        name: 'Profile',
        component: Profile,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;