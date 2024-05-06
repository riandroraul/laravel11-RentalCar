import { createRouter, createWebHistory } from "vue-router";

import Home from "../components/Home.vue";
import About from "../components/About.vue";
import NotFound from "../components/NotFound.vue";
import Register from "../components/Register.vue";

const routes = [
    {
        path: "/",
        component: Home,
    },
    {
        path: "/about",
        component: About,
    },
    {
        path: "/:pathMatch(.*)*",
        component: NotFound,
    },
    {
        path: "/register",
        component: Register,
    },
];

const router = createRouter({
    history: createWebHistory(),
    linkExactActiveClass: "active",
    routes,
});

export default router;
