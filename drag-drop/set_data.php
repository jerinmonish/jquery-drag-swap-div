<?php

//print_r($_POST); exit;
$con = mysqli_connect("localhost","root","","map");

// Check connection
if (mysqli_connect_errno()){
  $error = "Failed to connect to MySQL: " . mysqli_connect_error();
  print_r($error); exit;
} else {
  //print_r($_POST); exit;
  $div_id = $_POST['div_id'];
  $tar    = $_POST['timestamp1'];
  for ($i = 0; $i < count($div_id); $i++) {
    $sql = "INSERT INTO drag (div_id, timestamp_id) VALUES ('".$div_id."', '".$tar."')";

    if ($con->query($sql) === TRUE) {
        echo "1";
    } else {
        echo "0";
    }
  }
}
?>