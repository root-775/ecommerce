import './bootstrap';
import vuetify from './plugins/vuetify.js';
import {createApp} from 'vue';
import { createPinia } from 'pinia';

import App from './App.vue'
import router from './router/index.js'

const app = createApp(App);

app.use(vuetify)
app.use(router)
app.use(createPinia())
app.config.globalProperties = {
    url: window.website.url,
};
app.mount("#app")
