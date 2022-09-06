import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import HomeComp from './components/pages/HomeComp';
import MenuComp from './components/pages/MenuComp';
import CheckOut from './components/pages/CheckOut';

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '/',
            name: 'search',
            component: HomeComp
        },
        {
            path: '/menu/:slug',
            name: 'menu',
            component: MenuComp
        },
        {
            path: '/checkout',
            name: 'checkout',
            component: CheckOut
        }
    ]
});

export default router;
