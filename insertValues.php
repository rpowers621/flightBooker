<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}*/
$conn = mysqli_connect("localhost","rpowers8","rpowers8","rpowers8");

$sql = "INSERT IGNORE INTO inventory (rowNumber, seat, typeof, price, avail)
VALUES (1, 'A', 'First', 250.00, 0),
       (1, 'B', 'First', 250.00, 0),
       (1, 'C', 'First', 250.00, 0),
       (1, 'D', 'First', 250.00, 1),
       (2, 'A', 'First', 250.00, 1),
       (2, 'B', 'First', 250.00, 0),
       (2, 'C', 'First', 250.00, 0),
       (2, 'D', 'First', 250.00, 0),
       (3, 'A', 'First', 250.00, 1),
       (3, 'B', 'First', 250.00, 0),
       (3, 'C', 'First', 250.00, 0),
       (3, 'D', 'First', 250.00, 0),
       (4, 'A', 'Comfort', 120.00, 0),
       (4, 'B', 'Comfort', 120.00, 0),
       (4, 'C', 'Comfort', 120.00, 1),
       (4, 'D', 'Comfort', 120.00, 0),
       (5, 'A', 'Comfort', 120.00, 0),
       (5, 'B', 'Comfort', 120.00, 0),
       (5, 'C', 'Comfort', 120.00, 0),
       (5, 'D', 'Comfort', 120.00, 0),
       (6, 'A', 'Comfort', 120.00, 0),
       (6, 'B', 'Comfort', 120.00, 0),
       (6, 'C', 'Comfort', 120.00, 0),
       (6, 'D', 'Comfort', 120.00, 0),
       (6, 'E', 'Comfort', 120.00, 0),
       (6, 'F', 'Comfort', 120.00, 1),
       (7, 'A', 'Comfort', 120.00, 0),
        (7, 'B', 'Comfort', 120.00, 0),
        (7, 'C', 'Comfort', 120.00, 0),
        (7, 'D', 'Comfort', 120.00, 0),
        (7, 'E', 'Comfort', 120.00,1),
        (7, 'F', 'Comfort', 120.00,1),
        (8, 'A', 'Comfort', 120.00, 0),
        (8, 'B', 'Comfort', 120.00, 0),
        (8, 'C', 'Comfort', 120.00, 0),
        (8, 'D', 'Comfort', 120.00, 0),
        (8, 'E', 'Comfort', 120.00, 0),
        (8, 'F', 'Comfort', 120.00, 0),
        (9, 'A', 'Comfort', 120.00, 0),
        (9, 'B', 'Comfort', 120.00, 1),
        (9, 'C', 'Comfort', 120.00, 0),
        (9, 'D', 'Comfort', 120.00, 0),
        (9, 'E', 'Comfort', 120.00, 0),
        (9, 'F', 'Comfort', 120.00, 0),
        (10, 'A', 'Basic', 75.00, 0),
        (10, 'B', 'Basic', 75.00, 0),
        (10, 'C', 'Basic', 75.00, 0),
        (10, 'D', 'Basic', 75.00, 0),
        (10, 'E', 'Basic', 75.00, 0),
        (10, 'F', 'Basic', 75.00, 1),
        (11, 'A', 'Basic', 75.00, 0),
        (11, 'B', 'Basic', 75.00, 0),
        (11, 'C', 'Basic', 75.00, 0),
        (11, 'D', 'Basic', 75.00, 0),
        (11, 'E', 'Basic', 75.00, 0),
        (11, 'F', 'Basic', 75.00, 0),
        (12, 'A', 'Basic', 75.00, 0),
        (12, 'B', 'Basic', 75.00, 1),
        (12, 'C', 'Basic', 75.00, 0),
        (12, 'D', 'Basic', 75.00, 0),
        (12, 'E', 'Basic', 75.00, 0),
        (12, 'F', 'Basic', 75.00, 0),
        (13, 'A', 'Basic', 75.00, 0),
        (13, 'B', 'Basic', 75.00, 0),
        (13, 'C', 'Basic', 75.00, 1),
        (13, 'D', 'Basic', 75.00, 0),
        (13, 'E', 'Basic', 75.00, 0),
        (13, 'F', 'Basic', 75.00, 0),
        (14, 'A', 'Basic', 75.00, 0),
        (14, 'B', 'Basic', 75.00, 1),
        (14, 'C', 'Basic', 75.00, 1),
        (14, 'D', 'Basic', 75.00, 1),
        (14, 'E', 'Basic', 75.00, 0),
        (14, 'F', 'Basic', 75.00, 0),
        (15, 'A', 'Basic', 75.00, 0),
        (15, 'B', 'Basic', 75.00, 1),
        (15, 'C', 'Basic', 75.00, 1),
        (15, 'D', 'Basic', 75.00, 0),
        (15, 'E', 'Basic', 75.00, 0),
        (15, 'F', 'Basic', 75.00, 0),
        (16, 'A', 'Basic', 75.00, 0),
        (16, 'B', 'Basic', 75.00, 0),
        (16, 'C', 'Basic', 75.00, 1),
        (16, 'D', 'Basic', 75.00, 0),
        (16, 'E', 'Basic', 75.00, 0),
        (16, 'F', 'Basic', 75.00, 0),
        (17, 'A', 'Basic', 75.00, 0),
        (17, 'B', 'Basic', 75.00, 1),
        (17, 'C', 'Basic', 75.00, 0),
        (17, 'D', 'Basic', 75.00, 0),
        (17, 'E', 'Basic', 75.00, 1),
        (17, 'F', 'Basic', 75.00, 0),
        (18, 'A', 'Basic', 75.00, 0),
        (18, 'B', 'Basic', 75.00, 0),
        (18, 'C', 'Basic', 75.00, 0),
        (18, 'D', 'Basic', 75.00, 1),
        (18, 'E', 'Basic', 75.00, 0),
        (18, 'F', 'Basic', 75.00, 0),
        (19, 'A', 'Basic', 75.00, 0),
        (19, 'B', 'Basic', 75.00, 0),
        (19, 'C', 'Basic', 75.00, 0),
        (19, 'D', 'Basic', 75.00, 1),
        (19, 'E', 'Basic', 75.00, 0),
        (19, 'F', 'Basic', 75.00, 0),
        (20, 'A', 'Basic', 75.00, 0),
        (20, 'B', 'Basic', 75.00, 0),
        (20, 'C', 'Basic', 75.00, 0),
        (20, 'D', 'Basic', 75.00, 0),
        (20, 'E', 'Basic', 75.00, 1),
        (20, 'F', 'Basic', 75.00, 0),
        (21, 'A', 'Basic', 75.00, 0),
        (21, 'B', 'Basic', 75.00, 0),
        (21, 'C', 'Basic', 75.00, 0),
        (21, 'D', 'Basic', 75.00, 0),
        (21, 'E', 'Basic', 75.00, 0),
        (21, 'F', 'Basic', 75.00, 0)";


$sql2 = "INSERT IGNORE INTO customer (firstname, lastname, email, username, passwords)
VALUES ('John', 'Doe', 'johnd@gmail.com', 'johnd', '1234'),
('Jane', 'Doe', 'janed@gmail.com', 'janed', '0000')";

$sql4 = "INSERT IGNORE INTO parking (available, price, spotnumber, lengthoftime,type)
VALUES (1, 60, 1, 30,'Handicap'),
(1, 60, 2, 30,'Handicap'),
(0, 60, 3, 30,'Handicap'),
(0, 45, 4, 30,'Regular'),
(1, 45, 5, 30,'Regular'),
(0, 45, 6, 30,'Regular'),
(1, 45, 7, 30,'Regular'),
(1, 45, 8, 30,'Regular'),
(0, 45, 9, 30,'Regular'),
(0, 45, 10, 30,'Regular'),
(0, 45, 11, 30,'Regular'),
(0, 45, 12, 30,'Regular'),
(1, 45, 13, 30,'Regular'),
(1, 45, 14, 30,'Regular'),
(0, 30, 15, 15,'Short'),
(0, 30, 16, 15,'Short'),
(0, 30, 17, 15,'Short'),
(0, 30, 18, 15,'Short'),
(1, 30, 19, 15,'Short'),
(0, 30, 20, 15,'Short'),
(0, 30, 21, 15,'Short')
";
if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
if (mysqli_multi_query($conn, $sql2)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
if (mysqli_multi_query($conn, $sql4)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
