import { createApp } from 'vue';
import MainLayout from './core/layouts/MainLayout.vue';
import router from './router';

const app = createApp(MainLayout);

app.use(router);
app.mount('#app');
