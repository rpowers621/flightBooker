<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";*/
$servername = "localhost";
$username = "rpowers8";
$password = "rpowers8";
$dbname = "rpowers8";
$conn = mysqli_connect($servername,$username,$password,$dbname);

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

$sql2 = "CREATE TABLE inventory (
	id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	rowNumber INT(30) NOT NULL,
	seat VARCHAR(30) NOT NULL,
	typeof VARCHAR(30) NOT NULL,
	price INT(5) NOT NULL,
	avail INT(1) NOT NULL
)";

$sql3 = "CREATE TABLE orders (
	id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	rowNumber INT(30) NOT NULL,
	seat VARCHAR(30) NOT NULL,
	typeof VARCHAR(30) NOT NULL,
	price INT(5) NOT NULL,
	email VARCHAR(50) NOT NULL
)";

$sql4 = "CREATE TABLE parking (
	available INT(1),
	price INT(5) NOT NULL,
	spotnumber INT(32),
	lengthoftime INT(60),
	type VARCHAR(30)
)";

$sql5 = "CREATE TABLE admins (
	id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	username VARCHAR(30) NOT NULL,
	passwords VARCHAR(30) NOT NULL
)";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
if (mysqli_multi_query($conn, $sql2)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}
if (mysqli_multi_query($conn, $sql3)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
}

if (mysqli_multi_query($conn, $sql4)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
}

if (mysqli_multi_query($conn, $sql5)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql5 . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
