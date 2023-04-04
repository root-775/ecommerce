import { createRouter, createWebHistory } from "vue-router";
import usersRoutes from './user.routes';

const router = createRouter({
    history: createWebHistory(),
    base : "http://127.0.0.1:8000",
    linkActiveClass: "active",
    linkExactActiveClass: "exact-active",
    routes: [
        {
            path: "/",
            name: "home",
            component: () => import("../views/Home.vue"),
        },
        {
            path: "/contact-us",
            name: "contactUs",
            component: () => import("../views/ContactUs.vue"),
        },
        {
            path: "/products",
            name: "products",
            component: () => import("../views/Products.vue"),
        },
        {
            path: "/about-us",
            name: "aboutUs",
            component: () => import("../views/AboutUs.vue"),
        },
        {
            path: "/:slug",
            name: "singleCategory",
            component: () => import("../views/SingleCategory.vue"),
        },
        {
            path: "/product/:slug/:id",
            name: "productDetails",
            component: () => import("../views/ProductDetails.vue"),
        },
        ...usersRoutes ,
    ],
});

// router.beforeEach((to, from, next) => {
//     const authenticatedUser = sessionStorage.getItem('accessToken');
//     const requiresAuth = to.matched.some(record => record.meta.requiresAuth);

//     if (requiresAuth && ! authenticatedUser) next('/')
//     else next();
//   });
export default router;
