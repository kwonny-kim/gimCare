<?php

$host = "localhost";
$user = "gimcarry";
$password = "gimacarry123..";
$dbname= "db_gimcarry";
$id = '';

$con = mysqli_connect($host, $user, $password, $dbname);
$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
//연결확인
if (!$con) {
  die("연결 실패 : " .mysqli_connect_error());
}

?>
