<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//when inserting values into database must do it one by one or can change the name of the variable to be all different and add the corresponding if statements
$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (1, 'A', 'First', 250.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (1, 'B', 'First', 250.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (1, 'C', 'First', 250.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (1, 'D', 'First', 250.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (1, 'E', 'First', 250.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (1, 'F', 'First', 250.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (2, 'A', 'First', 250.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (2, 'B', 'First', 250.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (2, 'C', 'First', 250.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (2, 'D', 'First', 250.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (2, 'E', 'First', 250.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (2, 'F', 'First', 250.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (3, 'A', 'First', 250.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (3, 'B', 'First', 250.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (3, 'C', 'First', 250.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (3, 'D', 'First', 250.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (3, 'E', 'First', 250.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (3, 'F', 'First', 250.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (4, 'A', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (4, 'B', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (4, 'C', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (4, 'D', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (4, 'E', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (4, 'F', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (5, 'A', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (5, 'B', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (5, 'C', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (5, 'D', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (5, 'E', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (5, 'F', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (6, 'A', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (6, 'B', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (6, 'C', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (6, 'D', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (6, 'E', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (6, 'F', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (7, 'A', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (7, 'B', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (7, 'C', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (7, 'D', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (7, 'E', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (7, 'F', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (8, 'A', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (8, 'B', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (8, 'C', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (8, 'D', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (8, 'E', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (8, 'F', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (9, 'A', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (9, 'B', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (9, 'C', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (9, 'D', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (9, 'E', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (9, 'F', 'Comfort', 120.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (10, 'A', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (10, 'B', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (10, 'C', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (10, 'D', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (10, 'E', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (10, 'F', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (11, 'A', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (11, 'B', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (11, 'C', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (11, 'D', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (11, 'E', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (11, 'F', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (12, 'A', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (12, 'B', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (12, 'C', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (12, 'D', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (12, 'E', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (12, 'F', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (13, 'A', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (13, 'B', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (13, 'C', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (13, 'D', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (13, 'E', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (13, 'F', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (14, 'A', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (14, 'B', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (14, 'C', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (14, 'D', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (14, 'E', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (14, 'F', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (15, 'A', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (15, 'B', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (15, 'C', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (15, 'D', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (15, 'E', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (15, 'F', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (16, 'A', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (16, 'B', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (16, 'C', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (16, 'D', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (16, 'E', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (16, 'F', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (17, 'A', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (17, 'B', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (17, 'C', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (17, 'D', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (17, 'E', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (17, 'F', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (18, 'A', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (18, 'B', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (18, 'C', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (18, 'D', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (18, 'E', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (18, 'F', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (19, 'A', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (19, 'B', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (19, 'C', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (19, 'D', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (19, 'E', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (19, 'F', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (20, 'A', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (20, 'B', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (20, 'C', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (20, 'D', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (20, 'E', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (20, 'F', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (21, 'A', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (21, 'B', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (21, 'C', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (21, 'D', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES (21, 'E', 'Basic', 75.00)";

$sql = "INSERT INTO inventory (rowNumber, seat, typeof, price)
VALUES ('21', 'F', 'Basic', 75.00)";

$sql = "INSERT INTO customer (firstname, lastname, email, passwords)
VALUES ('John', 'Doe', 'johnd@gmail.com', '1234')";

$sql = "INSERT INTO customer (firstname, lastname, email, passwords)
VALUES ('Jane', 'Doe', 'johnd@gmail.com', '0000')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
