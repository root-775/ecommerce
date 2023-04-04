<template>
    <UpperHeaderSection />
    <div class="container">
		<div id="gototop"></div>
        <LowerHeaderSection />
        <div class="row">
            <BodySidebar />
            <RouterView />
        </div>
        <Client />
        <WebFooter />
    </div>
    <Copyright />
</template>
<script setup>
import { RouterView } from "vue-router";
import UpperHeaderSection from "./components/UpperHeaderSection.vue";
import LowerHeaderSection from "./components/LowerHeaderSection.vue";
import BodySidebar from "./components/BodySidebar.vue";
import Client from "./components/Client.vue";
import WebFooter from "./components/WebFooter.vue";
import Copyright from "./components/Copyright.vue";
// testing
</script>
