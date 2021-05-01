<?php
$conn = mysqli_connect("localhost","jtavera1","jtavera1","jtavera1");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>
