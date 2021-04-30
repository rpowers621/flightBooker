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

/*$sql = "INSERT INTO customer (firstname, lastname, email)
VALUES ('John', 'Doe', 'johnd@gmail.com')";

$sql = "INSERT INTO customer (firstname, lastname, email)
VALUES ('Jane', 'Doe', 'janed@gmail.com')";*/

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('1', 'A')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('1', 'B')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('1', 'C')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('1', 'D')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('1', 'E')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('1', 'F')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('2', 'A')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('2', 'B')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('2', 'C')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('2', 'D')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('2', 'E')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('2', 'F')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('3', 'A')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('3', 'B')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('3', 'C')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('3', 'D')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('3', 'E')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('3', 'F')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('4', 'A')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('4', 'B')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('4', 'C')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('4', 'D')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('4', 'E')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('4', 'F')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('5', 'A')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('5', 'B')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('5', 'C')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('5', 'D')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('5', 'E')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('5', 'F')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('6', 'A')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('6', 'B')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('6', 'C')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('6', 'D')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('6', 'E')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('6', 'F')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('7', 'A')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('7', 'B')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('7', 'C')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('7', 'D')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('7', 'E')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('7', 'F')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('8', 'A')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('8', 'B')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('8', 'C')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('8', 'D')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('8', 'E')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('8', 'F')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('9', 'A')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('9', 'B')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('9', 'C')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('9', 'D')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('9', 'E')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('9', 'F')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('10', 'A')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('10', 'B')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('10', 'C')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('10', 'D')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('10', 'E')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('10', 'F')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('11', 'A')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('11', 'B')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('11', 'C')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('11', 'D')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('11', 'E')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('11', 'F')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('12', 'A')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('12', 'B')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('12', 'C')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('12', 'D')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('12', 'E')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('12', 'F')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('13', 'A')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('13', 'B')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('13', 'C')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('13', 'D')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('13', 'E')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('13', 'F')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('14', 'A')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('14', 'B')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('14', 'C')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('14', 'D')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('14', 'E')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('14', 'F')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('15', 'A')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('15', 'B')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('15', 'C')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('15', 'D')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('15', 'E')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('15', 'F')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('16', 'A')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('16', 'B')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('16', 'C')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('16', 'D')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('16', 'E')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('16', 'F')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('17', 'A')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('17', 'B')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('17', 'C')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('17', 'D')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('17', 'E')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('17', 'F')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('18', 'A')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('18', 'B')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('18', 'C')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('18', 'D')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('18', 'E')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('18', 'F')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('19', 'A')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('19', 'B')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('19', 'C')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('19', 'D')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('19', 'E')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('19', 'F')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('20', 'A')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('20', 'B')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('20', 'C')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('20', 'D')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('20', 'E')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('20', 'F')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('21', 'A')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('21', 'B')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('21', 'C')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('21', 'D')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('21', 'E')";

$sql = "INSERT INTO inventory (rowNumber, seat)
VALUES ('21', 'F')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>