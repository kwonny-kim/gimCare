import Vue from "vue";
import Router from "vue-router";
import Home from "./views/Main.vue";

Vue.use(Router);

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
      component: () => import("@/views/reserve.vue"),
    }
  ]
})
