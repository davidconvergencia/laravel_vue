import { createApp } from 'vue'
import App from './App.vue'
import vuetify from './plugins/vuetify'
import { loadFonts } from './plugins/webfontloader'
import Vue3FormWizard from 'vue3-form-wizard'
import 'vue3-form-wizard/dist/style.css'
import VueTheMask from 'vue-the-mask'
loadFonts()

createApp(App)
  .use(vuetify)
  .use(Vue3FormWizard).use(VueTheMask)
  .mount('#app')
