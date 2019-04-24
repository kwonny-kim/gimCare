
<template>
  <div class="container" id="reserve">
    <div class="reserve-title">
      <span>예약서비스</span>
    </div>
    <div class="reserve-content">
      <label>출발지</label>
      <div class="start-button-area">
        <button>제 1여객터미널</button>
        <button>제 2여객터미널</button>
        <button>제 3여객터미널</button>
      </div>
      <div class="start-text-area">
        <input type="text" placeholder="상세주소 입력"/>
      </div>
      <form>
      <div class="reserve-submit-area">
        <input type='text' v-model="name" placeholder="이름"/>
        <input type='text' v-model="email" placeholder="이메일"/>
        <input type="button" @click="createContact()" value="예약">
      </div>
      </form>
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
        user: {
          name: '',
          email : ''
        }
      }
    },
    mounted: function(){
      console.log('Hello from Vue!')
      this.getContacts()
    },
    methods: {
      getContacts: function(){
     },
     createContact: function(){
       console.log("Create contact!")

        let formData = new FormData();
        console.log("name:", this.name)
        formData.append('name', this.name)
        formData.append('email', this.email)

        var contact = {};
        formData.forEach(function(value, key){
            contact[key] = value;
        });

        axios({
            method: 'post',
            url: 'http://192.168.0.3:8080/api/reserve.php',
            data: formData,
            config: { headers: {'Content-Type': 'multipart/form-data' }}
        })
        .then(function (response) {
            //handle success
            console.log(response)
            app.contacts.push(contact)
            app.resetForm();
        })
        .catch(function (response) {
            //handle error
            console.log(response)
        });
     },
     resetForm: function(){
     }
  }
}

</script>
<style scoped>
.container {
  position: relative;
  background: #fff;
  width: 100%;
  height: 100%;

}
.reserve-title{
  position: relative;
  width: 100%;
  height: 144px;
  background: #f36f21;
  color:#fff;
  text-align: center;
  font-size: 3rem;
}
.reserve-title span {
  color:#fff;
  font-size: 36px;
  font-weight: bold;
  line-height: 4;

}
.reserve-content {
  width: 100%;
  height: 100%;
  padding:0% 15%;
  margin: 0 auto;
  font-size: 3rem;
  position: relative;
}
.reserve-content label{
  font-weight: bold;
}
.start-button-area {
  position: relative;
  display: block;
  width: 100%;
}
.start-button-area button {
  border: 1px solid #000;
  background: #fff;
  border-radius: 3px;
  color: #f36f21;
  width: 33.33%;
  height: 5rem;
  margin: 1.2rem auto;
  font-size: 2rem;
}
.start-button-area button:hover{
  background: #f36f21;
  border: none;
  color:#fff;
}
.start-text-area{
  width: 100%;
  font-size: 5rem;
  position: relative;
  display: block;

}
.start-text-area input[type=text]{
  width: 100%;
  height: 5rem;
  text-align: center;
  font-size: 2rem;
  margin: 1.2rem auto;
  border:none;
  background: #eee;
  color: #f36f21;
}
.reserve-submit-area{
  font-size: 5rem;
  width: 100%;
}
.reserve-submit-area input[type=text]{
  display: inline-block;
  width: 33.33%;
}
</style>
