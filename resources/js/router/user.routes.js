
export default [
    {
        path: "/register",
        name: "register",
        component: () => import("../views/User/Register.vue"),
    },
    {
        path: "/login",
        name: "login",
        component: () => import("../views/User/Login.vue"),
    },
    {
        path: '/my-account',
        name: "myAccount",
        component: () => import("../views/MyAccount.vue"),
    }
];
