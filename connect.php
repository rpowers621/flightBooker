<?php

$servername = "localhost";
$username = "rpowers8";
$password = "rpowers8";
$dbname = "rpowers8";
$conn =mysqli_connect($servername,$username,$password,$dbname);


// Check connection
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
echo "Connected successfully";
}
$conn->close();
?>
