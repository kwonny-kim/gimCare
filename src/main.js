import Vue from 'vue';
import App from './App.vue';
import router from './router';

Vue.config.productionTip = false;

new Vue({
  render: h => h(App),

  //라우터 객체 넘겨주기
  router
}).$mount('#app');
