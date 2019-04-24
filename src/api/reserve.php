<?php
include '../config.php';

switch ($method) {
    case 'GET':
      $id = $_GET['id'];
      $sql = "select * from tb_reserve".($id?" where id=$id":'');
      break;
    case 'POST':
      $name = $_POST["name"];
      $email = $_POST["email"];

      $sql = "insert into tb_reserve (name, email) values ('$name', '$email')";
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
