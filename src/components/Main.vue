<template>
  <div class="content">
    <div class="top-content">

    </div>
    <div class="content-event">

    </div>
    <div class="content-service">

    </div>
    <div class="content-review">

    </div>
    <div class="content-messanger">

    </div>


  </div>
</template>

<script>
export default {
  name: 'Home',
  props: {
    msg: String
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
  height: 1080px;
  background: #f36f21;
}
.content-event{
  position: relative;
  width: 100%;
  height: 541px;
  text-align: center;
  background: #fafafa;
}
.content-service{
  position: relative;
  width: 100%;
  height: 681px;
  text-align: center;
  background: #ffffff;
}
.content-review{
  position: relative;
  width: 100%;
  height: 640px;
  background: #ff9557;

}
.content-messanger{
  position: relative;
  width: 100%;
  height: 319px;
  background: #fff;
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
