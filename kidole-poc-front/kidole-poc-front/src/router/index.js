import { createRouter, createWebHistory } from 'vue-router'
import PanneauxView from '../views/PanneauxView.vue'
import PanneauDetailView from '@/views/PanneauDetailView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: PanneauxView 
    }, {
        path: '/panneau/:id',
        name : 'panneau-detail',
        component : PanneauDetailView
    }
  ]
})

export default router