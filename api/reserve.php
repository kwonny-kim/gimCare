
<template>
  <div class="container" id="reserve">
    <div class="reserve-title">
      <span>예약서비스</span>
    </div>
    <div class="reserve-content">
      <form>

<!-- 출발지 -->
      <div class="reserve-start">
        <label><img src="@/assets/img/icon-location.png" class="reserve-icon"/>출발지</label>
        <div class="start-button-area">
          <div id="start-on"
              v-on:click="startOn = true"
              v-bind:class="{active: startOn}">제 1여객터미널</div>
          <div id="start-on"
              v-on:click="startOn = false"
              v-bind:class="{active: !startOn}">제 2여객터미널</div>
          <div>주소검색</div>
        </div>
        <div class="start-text-area">
          <input type="text" class="input-text" v-model="startAddress" name="startAddress" placeholder="상세주소 입력"/>
        </div>
      </div>

<!-- 도착지 -->
      <div class="reserve-end">
        <label><img src="@/assets/img/icon-location.png" class="reserve-icon"/>도착지</label>
        <div class="end-button-area">
          <div id="end-on"
              v-on:click="endOn = true"
              v-bind:class="{active: endOn}">제 1여객터미널</div>
          <div id="end-on"
              v-on:click="endOn = false"
              v-bind:class="{active: !endOn}">제 2여객터미널</div>
          <div>주소검색</div>
        </div>
        <div class="end-text-area">
          <input type="text" class="input-text" v-model="endAddress" name="endAddress" placeholder="상세주소 입력"/>
        </div>
      </div>

<!-- 항공편명 -->
      <div class="reserve-flight">
        <label><img src="@/assets/img/icon-airportticket.png" class="reserve-icon"/>항공편명</label>
        <div class="flight-text-area">
          <input type="text" class="input-text" v-model="flight" name="flight" placeholder="대/소문자 구분 정확히 입력"/>
        </div>
      </div>

<!-- 픽업시간 -->
      <div class="reserve-pickup">
        <label><img src="@/assets/img/icon-date.png" class="reserve-icon"/>픽업일시</label>
        <div class="pickup-text-area">

          <input type="button" class="date-button" v-on:click="testsome" value="날짜"/>
          <!-- <input type="button" class="date-button" value="시간"/> -->
        </div>
      </div>

<!-- 배송희망시간 -->
      <div class="reserve-delivery">
        <label><img src="@/assets/img/icon-date.png" class="reserve-icon"/>배송희망시간</label>
        <div class="delivery-text-area">
          <input type="button" class="date-button" value="날짜"/>
          <input type="button" class="date-button" value="시간"/>
        </div>
      </div>

<!-- 규격 내 물품 -->
      <div class="reserve-basic">
        <label><img src="@/assets/img/icon-box.png" class="reserve-icon"/>규격내 물품수 <small>x 15,000원(28인치/25kg 이하)</small></label>
        <div class="basic-text-area">
          <select class="reserve-select" v-model="basic" name="basic">
            <option disabled value="">수량 선택</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
          </select>
          <span>개</span>
        </div>
      </div>

<!-- 규격 외 물품 -->
      <div class="reserve-excess">
        <label><img src="@/assets/img/icon-box.png" class="reserve-icon"/>규격외 물품수 <small>x 25,000원(골프백,이민가방/25kg 이상)</small></label>
        <div class="excess-text-area">
          <select class="reserve-select" v-model="excess" name="excess">
            <option disabled value="">수량 선택</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
          </select>
          <span>개</span>
        </div>
      </div>
      <div class="reserv-line">
        <span>&nbsp;</span>
      </div>

<!-- 금액합계 -->
      <div class="reserve-price">
        <label>금액합계</label>
        <div class="price-text-area">
          <input type="text" v-model="price" name="price"/>원
        </div>
      </div>
      <div class="price-danger">
        <span>* 최종 금액은 가방개수 및 중량에 따라 상이(후불)</span>
      </div>

<!-- 연락처 -->
      <div class="reserve-phone">
        <div class="user-tag">
        <label><img src="@/assets/img/icon-call.png" class="reserve-icon"/>전화번호</label>
        </div>
        <div class="phone-text-area user-input">
          <input type="text" class="reserve-select" v-model="phone" name="phone" placeholder="전화번호"/>
        </div>
      </div>

<!-- 메신저 ID -->
      <div class="reserve-messenger">
        <div class="user-tag">
        <label><img src="@/assets/img/icon-message.png" class="reserve-icon"/>메신저 ID</label>
        </div>
        <div class="messenger-text-area user-input">
          <input type="text" class="reserve-select" v-model="messenger" name="messenger" placeholder="메신저 ID"/>
        </div>
      </div>

<!-- 비밀번호 -->
      <div class="reserve-pass">
        <div class="user-tag">
        <label><img src="@/assets/img/icon-lock.png" class="reserve-icon"/>비밀번호</label>
        </div>
        <div class="pass-text-area user-input">
          <input type="text" class="reserve-select" v-model="pass" name="pass" placeholder="비밀번호 4자리(예약 조회 시 필요)"/>
        </div>
      </div>

<!-- 쿠폰 -->
      <div class="reserve-coupon">
        <div class="user-tag">
        <label><img src="@/assets/img/icon-cupon.png" class="reserve-icon"/>쿠폰</label>
        </div>
        <div class="coupon-text-area user-input">
          <input type="text" class="reserve-select" v-model="coupon" name="coupon" placeholder="쿠폰번호인증"/>
        </div>
      </div>

    <!-- 기타사항 -->
      <div class="reserve-etc">
        <div class="user-tag">
        <label><img src="@/assets/img/icon-etc.png" class="reserve-icon"/>기타</label>
        </div>
        <div class="etc-text-area user-input">
          <input type="text" class="reserve-select" v-model="etc" name="etc" placeholder="배송 시 시타 건의 사항을 입력해 주세요"/>
        </div>
      </div>
      <input type="button" class="submit_btn" @click="createContact()" value="예약">
</form>



      <!--
      <div class="reserve-submit-area">
        <input type='text' name="name" v-model="name" placeholder="이름"/>
        <input type='text' name="email" v-model="email" placeholder="이메일"/>

      </div> -->

    </div>
  </div>
</template>

<script>
var mysqlDB = require('./mysql-db');
mysqlDB.connect();
</script>
<script>

export default{
    data: function(){
      return {
        reserve: {
          startAddress: '',
          endAddress : '',
          flight: '',
          pickup: '',
          delivery: '',
          basic:'',
          excess:'',
          price:'',
          phone:'',
          messenger:'',
          pass:'',
          coupon:'',
          etc:''
        },
        startOn: true,
        endOn: true,
      };
    },
    mounted: function(){
      console.log('Hello from Vue!')
      this.getContacts()
    },
    props:['value'],
    methods: {
      testsome: function(){
        this.pickup = '픽업';
        this.delivery = '배송';
      },
      getContacts: function(){
     },
     createContact: function(){
       console.log("Create contact!")

        let formData = new FormData();
        console.log("출발지:", this.startAddress);
        console.log("도착지:", this.endAddress);
        console.log("항공편명:", this.flight);
        console.log("픽업시간:", this.pickup);
        console.log("배송희망시간:", this.delivery);
        console.log("규격내물품:", this.basic);
        console.log("규격외물품:", this.excess);
        console.log("금액합계:", this.price);
        console.log("전화번호:", this.phone);
        console.log("메신저:", this.messenger);
        console.log("비밀번호:", this.pass);
        console.log("쿠폰:", this.coupon);
        console.log("기타:", this.etc);


        formData.append('startAddress', this.startAddress)
        formData.append('endAddress', this.endAddress)
        formData.append('flight', this.flight)
        formData.append('pickup', this.pickup)
        formData.append('delivery', this.delivery)
        formData.append('basic', this.basic)
        formData.append('excess', this.excess)
        formData.append('price', this.price)
        formData.append('phone', this.phone)
        formData.append('messenger', this.messenger)
        formData.append('pass', this.pass)
        formData.append('coupon', this.coupon)
        formData.append('etc', this.etc)

        var contact = {};
        formData.forEach(function(value, key){
            contact[key] = value;
        });

        axios({
            method: 'post',
            url: 'api/reserve.php',
            data: formData,
            config: { headers: {'Content-Type': 'multipart/form-data' }}
        })
        .then(function (response) {
            //handle success
            // console.log(response)
            app.contacts.push(contact)
            app.resetForm();
        })
        .catch(function (response) {
            //handle error
            // console.log(response)
            // console.log(JSON.stringify(error))
        });
     },
     resetForm: function(){
       this.startAddress = '';
       this.endAddress = '';
       this.flight = '';
       this.pickup = '';
       this.delivery = '';
       this.basic = '';
       this.excess = '';
       this.price = '';
       this.phone = '';
       this.messenger = '';
       this.pass = '';
       this.coupon = '';
       this.etc = '';
     },
     switched(startOn) {
       this.$emit('input',startOn);
     },
     switched(endOn) {
       this.$emit('input',endOn);
     }
  }
}

</script>
<style scoped>
@import './reserve.css';
</style>
