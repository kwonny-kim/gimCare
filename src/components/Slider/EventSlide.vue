<template>
  <div class="slider">
    <hooper :itemsToShow="3" :infiniteScroll="true" :itemsToSlide="3">
      <slide>
        <div class="slider-img1">
          <span class="slider-text">디스커버 서울 패스 전용관</span><br />
          <span class="slider-text">DISCOVER SEOUL PASS</span>

        </div>
      </slide>
      <slide>
        <div class="slider-img2">
          <span class="slider-text">코리아 그랜드 세일</span><br />
          <span class="slider-text">KOREA GRAND SALE</span>

        </div>
      </slide>
      <slide>
        <div class="slider-img3">
          <span class="slider-text">디스커버 서울 패스 전용관</span><br />
          <span class="slider-text">DISCOVER SEOUL PASS</span>
        </div>
      </slide>
      <hooper-navigation slot="hooper-addons"></hooper-navigation>
    </hooper>
  </div>
</template>
<script>
  import {
    Hooper,
    Slide,
    Navigation as HooperNavigation
  } from 'hooper';
  import 'hooper/dist/hooper.css';

  export default {
    name: 'App',
    components: {
      Hooper,
      Slide,
      HooperNavigation
    }
  }

</script>
<style scoped>
  .slider{
    width: 100%;
    height: 0;
    padding-top: calc(1080 / 1920 * 100%);
    margin:0 auto;
    padding: 0% 10%;
  }
  .slider-img1{
    background: rgba(0,0,0,.5);
    background-image: url("../../assets/img/img-event-1.png");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    height: 100%;
  }
  .slider-img2{
    background: rgba(0,0,0,.5);
    background-image: url("../../assets/img/img-event-2.png");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    height: 100%;
  }
  .slider-img3{
    background: rgba(0,0,0,.5);
    background-image: url("../../assets/img/img-event-1.png");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    height: 100%;
  }
  .slider-text{
    position: relative;
    top:32%;
    color:#fff;
    font-size: 2.5rem;
    font-weight: bold;
    margin: 0 auto;

  }



</style>
