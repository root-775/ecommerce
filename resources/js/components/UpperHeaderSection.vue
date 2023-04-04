<script setup>
import { storeToRefs } from 'pinia';
import { useAuthStore } from '../stores';

const authStore = useAuthStore();
const { user } = storeToRefs(authStore);
// console.log(authStore.is_login);


</script>
<template>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="topNav">
            <div class="container">
                <div class="alignR">
                    <div class="pull-left socialNw">
                        <a href="#"><span class="icon-twitter"></span></a>
                        <a href="#"><span class="icon-facebook"></span></a>
                        <a href="#"><span class="icon-youtube"></span></a>
                        <a href="#"><span class="icon-tumblr"></span></a>
                    </div>
                    <router-link :to="{ name: 'home'}" class-active="active"><span class="icon-home"></span> Home</router-link>
                    <router-link v-if="authStore.is_login" :to="{ name: 'myAccount'}"><span class="icon-user"></span> My Account</router-link>
                    <router-link :to="{ name: 'register'}" class-active="active"><span class="icon-edit"></span> Free Register</router-link>
                    <router-link :to="{ name: 'contactUs'}" class-active="active"><span class="icon-envelope"></span> Contact us</router-link>
                    <a href="cart.html"><span class="icon-shopping-cart"></span> 2 Item(s) - <span
                            class="badge badge-warning"> $448.42</span></a>
                </div>
            </div>
        </div>
    </div>
</template>
