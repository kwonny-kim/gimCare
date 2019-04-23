<template>
  <div class="slider">
    <hooper :itemsToShow="4" :infiniteScroll="true" :itemsToSlide="4">
      <slide>
        <div class="slider-back">
          <span class="slider-text">캐리어는 이틀 전 미리 보내고 여권만 챙겨 공항가서 찾고 여행 다녀왔어요.</span>
        </div>
        <span class="review-number">8888님</span>
      </slide>
      <slide>
        <div class="slider-back">
          <span class="slider-text">퇴근 후 바로 출국 시 이용했는데 너무 편했어요 전철타고 바로 공항으로 귀국할 때도 이용했습니다^^</span>
        </div>
        <span class="review-number">6655님</span>
      </slide>
      <slide>
        <div class="slider-back">
          <span class="slider-text">퇴근 후 바로 출국 시 이용했는데 너무 편했어요 전철타고 바로 공항으로 귀국할 때도 이용했습니다^^</span>
        </div>
        <span class="review-number">1072님</span>
      </slide>
      <slide>
        <div class="slider-back">
          <span class="slider-text">캐리어 두개 끌고 갈 생각에 막막했는데 짐케어 서비스를 이용하여 가방만 들고 다녀왔습니다.
          정망 감사합니다! 서비스 짱짱!</span>
        </div>
        <span class="review-number">4567님</span>
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
  font-size: 62.5%;
  background: #fff;
  padding: 5%;
}
.slider-back{
  /* width: 270px; */
  /* height: 200px; */
  height: 100%;
  background: #fff;
  border-radius: 10px;
  border:5px solid #ff9557;
  margin: 0 auto;
  display: inline-block;
  padding: 1rem;
}
.slider-text {
  font-size: 14px;
  word-spacing: normal;
  word-wrap: break-word;
  overflow:hidden;
}
.review-number{
  position: relative;
  float: left;
  font-size: 1rem;
  top:10px;
  font-weight: bold;
}
.hooper-slide {
  padding: 3% 2%;
}
.hooper-prev{
  position: absolute;
  left: -5%;
}
.hooper-next{
  right: -5%;
}


</style>
