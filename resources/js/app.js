require('./bootstrap');
import Alpine from 'alpinejs';

import {createApp} from "vue";
import {createRouter, createWebHistory} from "vue-router";
import routes from "./routes";


const app = createApp({})

const router = createRouter({
	history: createWebHistory(),
	routes
})

app.use(router)
app.mount('#app')

window.Alpine = Alpine;

Alpine.start();
