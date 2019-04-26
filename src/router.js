import Vue from "vue";
import Vuex from "vuex";
import Axios from "axios";
import Router from "vue-router";
import Home from "./views/Main.vue";

Vue.use(Router);
Vue.use(Vuex);
Vue.use(Axios);

export default new Router({
  mode: "history",
  vase:process.env.BASE_URL,
  routes: [
    {
      path: "/",
      component: Home
    },
    {
      path: "/reserve",
      name: 'Reserve',
      component: () => import("@/views/reserve/reserve.vue"),
    }
  ]
})
