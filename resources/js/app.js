import './bootstrap';
import { createApp } from 'vue';
import GamesList from './components/Games/List.vue';
import { ZiggyVue } from 'ziggy';
import { Ziggy } from './ziggy';

const app = createApp().use(ZiggyVue, Ziggy);

app.component('games-list', GamesList)

app.mount('#app')
