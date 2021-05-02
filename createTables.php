<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";*/
include("connect.php");
$conn;
// Create connection
/*$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}*/

// sql to create table
$sql = "CREATE TABLE customer (
	id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	username VARCHAR(30) NOT NULL,
	passwords VARCHAR(30) NOT NULL
)";

$sql .= "CREATE TABLE inventory (
	id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	rowNumber INT(30) NOT NULL,
	seat VARCHAR(30) NOT NULL,
	typeof VARCHAR(30) NOT NULL, 
	price INT(5) NOT NULL 
)";

$sql .= "CREATE TABLE orders (
	id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	rowNumber INT(30) NOT NULL,
	seat VARCHAR(30) NOT NULL,
	typeof VARCHAR(30) NOT NULL, 
	price INT(5) NOT NULL, 
	email VARCHAR(50)
)";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>