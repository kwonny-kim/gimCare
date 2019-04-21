<template>
  <div class="content">
    <div class="top-content">
      <div class="main-message">
        <div class="top-message">
          <span>캐리어 공항 운송서비스</span>
          <h2>'짐케어'</h2>
        </div>
        <br />
        <div class="middle-message">
          <span>여행객의 불편한 큰짐 수화물 운송서비스</span>
          <span>입,출국 관광 쇼핑후 숙소 운송서비스</span>
        </div>
        <br />
        <div class="bottom-message">
          <span>짐케어는 해외여행(패키지,자유여행)시 자택에서 공항까지,</span>
          <span>또는 공항에서 자택까지 캐리어 운송을 해드리는 신개념운송서비스 입니다.</span>
          <span>여행당일에 무거운 캐리어 끌고 공항까지 힘들게 가실 필요가 없습니다.</span>
          <span>예약만 하시면 언제든 캐리어를 원하는 곳까지 안전하게 운송을 해드립니다.</span>

        </div>
      </div>
    </div>
    <div class="content-event">
      <div class="content-info">
        <hr class="line"/>
        <span class="content-title">EVENT</span>
        <br />
        <span class="content-sub">좀더 다양한 이벤트로 인한 혜택을 경험 하실 수 있습니다. 어서 예약하세요!</span>
      </div>
      <EventSlider/>
    </div>
    <div class="content-service">
      <div class="content-info">
        <hr class="line"/>
        <span class="content-title">SERVICE</span>
        <br />
        <div class="service-info">
          <div class="reserve-info"><div class="reserve-line"></div> <span class="reserve-text">배송예약</span></div>
          <div class="airport-info"><div class="airport-line"></div> <span class="airport-text">공항예약</span></div>
        </div>
        <div class="service-explain">
          <div class="explain-img"><img src="@/assets/img/icon-person.png"/></div>
          <div class="explain-img"><img src="@/assets/img/icon-jimcare.png"/></div>
          <div class="explain-img"><img src="@/assets/img/icon-home.png"/></div>
          <div class="explain-img"><img src="@/assets/img/icon-airport.png"/></div>
        </div>
      </div>
    </div>
    <div class="content-review">
      <div class="content-info">
        <hr class="line"/>
        <span class="content-title">REVIEW</span>
        <br />
        <ReviewSlider/>    
      </div>
    </div>
    <div class="content-messanger">
      <div class="content-info">
        <hr class="line"/>
        <span class="content-title">MESSANGER</span>
        <br />
        <span class="content-sub">문의사항 있을 시 언제든지 연락 주시기 바랍니다!</span>
      </div>
      <div class="messanger-info">
        <div class="messanger-explain">

        <div class="explain-img">
          <img src="@/assets/img/img-kakao.png"/>
          <span>KAKAO ID : GIMACARRY</span>
        </div>
        <div class="explain-img">
          <img src="@/assets/img/img-line.png"/>
          <span>WECHAT ID : GIMCARRYKOREA</span>
        </div>
        <div class="explain-img">
          <img src="@/assets/img/img-wechat.png"/>
          <span>LINE ID : KOREAGIMCARRY</span>
        </div>

        </div>
      </div>
    </div>


  </div>
</template>

<script>
 import EventSlider from './Slider/EventSlide.vue';
 import ReviewSlider from './Slider/ReviewSlide.vue';
 export default {
   name: 'Home',
   components: {
     // Home,
     EventSlider,
     ReviewSlider
   }
 }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.content {
  position: relative;
  width: 100%;
  height: 100%;
  /* background: #ccc; */
}
.top-content{
  position: relative;
  width: 100%;
  height: 0;
  padding-top: calc(1080 / 1920 * 100%);
  background: #f36f21;
  background-image: url('../assets/img/img-main.png');
  background-repeat: no-repeat;
  background-position: center center;
  background-size: 100% 100%;

}
.content-event{
  position: relative;
  width: 100%;
  height: 541px;
  text-align: center;
  padding: 5%;
  background: #fafafa;
}
.content-service{
  position: relative;
  width: 100%;
  height: 681px;
  text-align: center;
  padding: 5%;
  background: #ffffff;
}
.content-review{
  position: relative;
  width: 100%;
  height: 640px;
  text-align: center;
  padding: 5%;
  background: #ff9557;

}
.content-messanger{
  position: relative;
  width: 100%;
  height: 319px;
  text-align: center;
  padding: 5%;
  background: #fff;
}
.main-message{
  position: absolute;
  top:30%;
  left:10%;
  color:#fff;
}
.top-message{
  font-size: 2rem;
  font-weight: bold;
}
.top-message span,h2{
  display: inline-block;
}
.middle-message {
  font-size: 1.2rem;
  font-weight: 500;
  line-height: 1.2;
}
.middle-message span{
  display: block;
}
.bottom-message{
  font-size: 1rem;
  line-height: 2;
}
.bottom-message span {
  display: block;
}
.content-info{
  position: relative;
  width: 80%;
  margin:auto;
  /* padding: 0% 35%; */
}
 .line{
  height: 5px;
  width: 4%;
  margin-left: 48%;
  background: #f36f21;
  text-align: center;
  border: none;

}
.content-title {
  position: relative;
  text-align: center;
  color:#ff9557;
  font-size: 2rem;
  font-weight: bold;
  line-height: 2;
}
.content-sub {
  color:#7d7d7d;
  line-height: 3;

}
.content-review .line{
  height: 5px;
  width: 4%;
  margin-left: 48%;
  background: #fff;
  text-align: center;
  border: none;

}
.content-review .content-title {
  text-align: center;
  color:#fff;
  font-size: 2rem;
  font-weight: bold;
}
.service-info{
  position: relative;
  float: left;
  width: 100%;
}
.service-info .reserve-info{
  position: relative;
  width: 100%;
  height: 50px;
  display: block;
}
.service-info .airport-info{
  position: relative;
  width: 100%;
  height: 50px;
  display: block;
}
.reserve-line{
  position: absolute;
  top:30%;
  width: 10px;
  height: 10px;
  display: block;
  float: left;
  background: #7d7d7d;
  /* padding: 1%; */
}
.reserve-text{
  position: relative;
  color:#7d7d7d;
  display: inline-block;
  float: left;
  padding: 1% 2%;
}
.airport-line{
  position: absolute;
  top:30%;
  width: 10px;
  height: 10px;
  display: block;
  float: left;
  background: #00aeef;
}
.airport-text{
  position: relative;
  color:#00aeef;
  display: inline-block;
  float: left;
  padding: 1% 2%;
}
.service-explain .explain-img{
  position: relative;
  display: inline-block;
  padding: 5%;
  width: 25%;
}
.service-explain .explain-img img{
  width: 100%;
}
.messanger-info{
  position: relative;
}
.messanger-explain{
  position: relative;
}
.messanger-explain .explain-img{
  position: relative;
  display: inline-block;
  margin:1% 5%;
}
.messanger-explain .explain-img img {
  width: 15%;
}
.messanger-explain .explain-img span {
  display: block;
  line-height: 3;
  font-weight: bold;
}


.messanger-info{

}

h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
