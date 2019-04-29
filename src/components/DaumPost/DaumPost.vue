<template>
  <div id="app">
    <VueDaumPostcode>


    </VueDaumPostcode>
  </div>

</template>

<script>
import Vue from "vue";
import VueDaumPostcode from "vue-daum-postcode";

Vue.use(VueDaumPostcode), {
  name: "vue-something-daum-postcode"
}
export default{
  name: 'App',
  components: {
    VueDaumPostcode
  }
}
</script>
<style scoped>
div{
  width: 100%;
  height: auto;
}
</style>
