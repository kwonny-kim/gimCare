<?php
$host = "gimcarry.oig.kr";
$user = "gimcarry";
$password = "gimcarry123..";
$dbname = "db_gimcarry";
$id = '';

$con = mysqli_connect($host, $user, $password,$dbname);

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
//$input = json_decode(file_get_contents('php://input'),true);
mysqli_set_charset($dbname, 'utf8');

mysqli_query($con,"set session character_set_connection=utf8");
mysqli_query($con,"set session character_set_result=utf8");
mysqli_query($con,"set session character_set_client=utf8");

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

switch ($method) {
    case 'GET':
      $id = $_GET['id'];
      $sql = "select * from tb_reserve".($id?" where id=$id":'');
      break;
    case 'POST':
      $start_address = $_POST["startAddress"];
      $end_address = $_POST["endAddress"];
      $re_flight = $_POST["flight"];
      $re_pickup = $_POST["pickup"];
      $re_delivery = $_POST["delivery"];
      $re_basic = $_POST["basic"];
      $re_excess = $_POST["excess"];
      $re_price = $_POST["price"];
      $re_phone = $_POST["phone"];
      $re_messenger = $_POST["messenger"];
      $re_pass = $_POST["pass"];
      $re_coupon = $_POST["coupon"];
      $re_etc = $_POST["etc"];


      $sql = "insert into tb_reserve(start_address, end_address, re_flight, re_pickup, re_delivery, re_basic, re_excess, re_price, re_phone, re_messenger, re_pass, re_coupon, re_etc) values
                                    ('$start_address','$end_address','$re_flight','$re_pickup','$re_delivery','$re_basic','$re_excess','$re_price','$re_phone','$re_messenger','$re_pass','$re_coupon','$re_etc')";
      // $sql = "insert into tb_reserve(start_address, end_address, re_flight, re_pickup, re_delivery, re_basic, re_excess, re_price, re_phone, re_messenger, re_pass, re_coupon, re_etc) values
      //                                                             ('출발지','도착지','항공편명','','','1','2','3000','12345','ㅅㄷㄴㅅ','1234','ㅅ1ㅅ2ㅅ3','tes')";
      break;
}

// run SQL statement
$result = mysqli_query($con,$sql);

// die if SQL statement failed
if (!$result) {
  http_response_code(404);
  die(mysqli_error($con));
}

if ($method == 'GET') {
    if (!$id) echo '[';
    for ($i=0 ; $i<mysqli_num_rows($result) ; $i++) {
      echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
    }
    if (!$id) echo ']';
  } elseif ($method == 'POST') {
    echo json_encode($result);
  } else {
    echo mysqli_affected_rows($con);
  }

$con->close();
?>
