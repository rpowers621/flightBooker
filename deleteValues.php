<?php
$servername = "localhost";
$username = "rpowers8";
$password = "rpowers8";
$dbname = "rpowers8";
$conn = mysqli_connect($servername,$username,$password,$dbname);

// Create connection

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM inventory WHERE id=2";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
