<template>
<header>
  <nav class="main-nav">
    <span class="main-logo"><img src="@/assets/img/icon-logo.png" /></span>
    <ul class="nav-ul">
      <li>
        홈
      </li>
      <li>
        예약
      </li>
      <li>
        예약조회
      </li>
      <li>
        이벤트
      </li>
      <li>
        고객센터
      </li>

        <span class="icon-country">
          <img src="@/assets/img/icon-korea.png"/>
        </span>
        <span class="icon-country">
          <img src="@/assets/img/icon-japan.png"/>
        </span>
        <span class="icon-country">
          <img src="@/assets/img/icon-english.png"/>
        </span>
        <span class="icon-country">
          <img src="@/assets/img/icon-china.png"/>
        </span>

    </ul>

  </nav>
</header>

</template>
<script>
export default {
  name: 'Header',
  props: {
    msg: String
  }
}
</script>
<style scoped lang='scss'>
.main-nav{
  position: absolute;
  background: #fff;
  width: 100%;
  height: 72px;
  color:#7d7d7d;
  font-size: 1rem;
  font-weight: 500;
  padding: 1% 15%;
// padding: 2% 15%;
}
.main-nav .main-logo {
  width: 5%;
  position: relative;
  display: inline-block;
}
.main-nav img {
  width: 100%;
  position: relative;
  display: inline-block;
}

.nav-ul {
  position: relative;
  float: right;
  width: 50%;
  bottom:15px;
}
.nav-ul li {
  display: inline-block;
  margin:0 2%;
  // width: 100%;

}
.icon-country {
  position: relative;
  display: inline-block;
  // float: left;
  top:10px;
  width: 36px;
  height: 36px;
  margin: 5px 5px;
}
.icon-country img{
  position: relative;
  display: inline-block;
  // float: left;
  width: 100%;
}


</style>
