import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import HomeComp from './components/pages/HomeComp';
import ProvaComp from './components/pages/ProvaComp';

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
            path: '/prova',
            name: 'prova',
            component: ProvaComp
        }
    ]
});

export default router;
