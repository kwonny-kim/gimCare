<template>
  <div id="app">
    <Header/>
    <div id="container">
      <Home/>

    </div>
    <Footer/>
  </div>
</template>

<script>
import Home from './components/Main.vue'
import Header from './components/Header/Header.vue'
import Footer from './components/Footer/Footer.vue'

export default {
  name: 'app',
  components: {
    Home,
    Header,
    Footer
  }
}
</script>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 나눔고딕, NanumGothic, "나눔 고딕", "Nanum Gothic";
}
a {
  color: inherit;
  cursor: pointer;
  text-decoration: none;
}
ul {
  list-style: none;
}
img {
  border: none;
}
table {
  border-collapse: collapse;
}
input[type="submit"],
button[type="submit"] {
  cursor: pointer;
}

.clear {
  clear: both;
}
</style>
<style lang="scss" scoped>
#container {
  position: relative;
  top:72px;
  min-width: 480px;
  // max-width: 1920px;
  width: 100%;
  margin: 0 auto;
  // padding:0 15%;

  // width: 1440px;
  // margin: 50px auto;
}

#app {
  min-width: 480px;
  // max-width: 1920px;
  width: 100%;
  height: 100%;
  // background: #eee;
}
</style>
