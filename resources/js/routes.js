import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import HomeComp from './components/pages/HomeComp';
import MenuComp from './components/pages/MenuComp';
import ProvaComp from './components/pages/prova/ProvaComp'

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
            path: '/Prova',
            name: 'prova',
            component: ProvaComp
        },
        {
            path: '/menu/:slug',
            name: 'menu',
            component: MenuComp
        }
    ]
});

export default router;
