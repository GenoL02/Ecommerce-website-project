import { createApp } from 'vue'
import App from './App.vue'
import router from './router/index'
import Toastification from 'vue-toastification';
import 'vue-toastification/dist/index.css'
import { createI18n } from 'vue-i18n'
import en from './locales/en.json'
import vi from './locales/vi.json'

const messages = {
  en: en,
  vi: vi
}

const i18n = createI18n({
  locale: 'vi', // set locale
  messages, // set locale messages
})

createApp(App).use(router).use(i18n).use(Toastification).mount('#app')
