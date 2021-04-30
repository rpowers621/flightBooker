<?php
//can just create the database via phpMyAdmin on your local host
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table - when creating the tables do it one by one since they have the same variable name if not just add the if statement at the bottom three times with
//corresponding variable names
/*$sql = "CREATE TABLE customer (
	id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50)
)";*/

/*$sql = "CREATE TABLE inventory (
	id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	rowNumber INT(30) NOT NULL,
	seat VARCHAR(30) NOT NULL
)";*/

$sql = "CREATE TABLE orders (
	id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	rowNumber INT(30) NOT NULL,
	seat VARCHAR(30) NOT NULL,
	email VARCHAR(50)
)";

if (mysqli_query($conn, $sql)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
