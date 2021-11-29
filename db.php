<?php
$mysqli = new mysqli("localhost","root","","ajax");
mysqli_set_charset($mysqli,'utf8');

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else{
  echo "Connect thành công";
}
?>