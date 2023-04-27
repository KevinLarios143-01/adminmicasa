import { createRouter, createWebHistory } from 'vue-router';

const routes = [
  {
    path: '/casita',
    name: 'casita',
    component: () => import('../components/pages/casita.vue'),
  },
  {
    path: '/home',
    name: 'home',
    component: () => import('../components/ExampleComponent.vue'),
  },
  {
    path: '/login',
    name: 'login',
    component: () => import('../components/security/login.vue'),
  },
  {
    path: '/register',
    name: 'register',
    component: () => import('../components/security/register.vue'),
  },

]

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes
});
export default router;
