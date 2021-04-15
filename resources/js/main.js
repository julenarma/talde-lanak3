
import App from './components/proyectos/Listuser.vue'
import Vue from 'vue'
import router from './router'
import Vuetify from 'vuetify'

Vue.config.productionTip = false
Vue.use(Vuetify)
export default new Vuetify({ })

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  vuetify: new Vuetify(),
  components: { App },
  template: '<App/>'
})