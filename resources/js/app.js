import './bootstrap';
import { createApp } from 'vue'
import GamesList from './components/GamesList.vue'

const app = createApp();

app.component('games-list', GamesList)

app.mount('#app')
