import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router';
import DashboardPage from '../Pages/Dashboard/DashboardPage.vue';

const routes: RouteRecordRaw[] = [
  {
    path: '/',
    redirect: '/dashboard',
  },
  {
    path: '/dashboard',
    name: 'dashboard',
    component: DashboardPage,
  },
  {
    path: '/tarjetas',
    name: 'cards',
    component: DashboardPage,
  },
  {
    path: '/pago-tarjetas',
    name: 'card-payments',
    component: DashboardPage,
  },
  {
    path: '/presupuesto',
    name: 'budget',
    component: DashboardPage,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
