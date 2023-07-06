<?php
$con = mysqli_connect('localhost','saltabio_saltabiotech','Saltabiotech@1234','saltabio_saltabiotech');
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
?>