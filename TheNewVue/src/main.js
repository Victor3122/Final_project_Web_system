import { createApp } from 'vue'
import router from "./router";
import { createRouter, createWebHistory } from 'vue-router'
import "./style.css";
import App from './App.vue'
import { library } from "@fortawesome/fontawesome-svg-core";
import { faPhone } from "@fortawesome/free-solid-svg-icons";



createApp(App).use(router).mount('#app');