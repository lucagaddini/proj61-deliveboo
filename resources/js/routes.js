import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import HomeComp from './components/pages/HomeComp';
import MenuComp from './components/pages/MenuComp';

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
        }
    ]
});

export default router;
