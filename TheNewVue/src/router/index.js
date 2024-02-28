import { createRouter, createWebHistory } from 'vue-router';

//import Home from '../views/Home.vue';
//import About from '../views/About.vue';
//import Posters from '../views/Poster.vue';
//import Service from '../views/Service.vue';
//import Contact from '../views/Contact.vue';

const Home = () => import('../views/Home.vue');

const routes = [
  { path: "/", name: "Home", component: Home },
  { path: "/about", name: "About", component: () => import('../views/About.vue') },
  { path: "/poster", name: "PosterList", component: () => import('../views/Poster.vue')},
  { path: "/random", name: "RandomProduct", component: () => import('../views/RandomProduct.vue')},
  { path: "/location", name: "Location", component: () => import('../views/Location.vue')},
  { path: "/review", name: "Review", component: () => import('../views/Review.vue')},

  { path: "/:pathMatch(.*)*", name: "NotFound", component: () => import('../views/NotFound.vue')},
  { path: "/service", name: "Service", component: () => import('../views/Service.vue') },
  { path: "/contact", name: "Contact", component: () => import('../views/Contact.vue') },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;