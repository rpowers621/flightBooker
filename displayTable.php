<!doctype html>

<html>

	<head lang="en">
		<meta charset="UTF-8">
		<title>Tables</title>
		<style>
		table {
	border: 1px solid black;
		border-collapse: collapse;
	}

	th, td {
		border: 1px solid black;
		text-align: center;
		padding: 8px;
	}
	tr:nth-child(even){background-color: #a0a0a0}
	tr:nth-child(odd){background-color: #ffffff}
	tr:nth-child(1){font-weight: bold;}
		</style>
	</head>

<body>

<?php
include("connect.php");
$conn;

$sql1 = "SELECT id, firstname, lastname, email, username, passwords FROM customer";
$result1 = $conn->query($sql1);
echo "<h3>Customers</h3>";
if ($result1->num_rows > 0) {
     // output data of each row
	echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email/th><th>Password/th></tr>";
     while($row1 = $result1->fetch_assoc()) {
		 $id=$row1["id"];
		 $firstName=$row1["firstname"];
		 $lastName=$row1["lastname"];
		 $email=$row1["email"];
		 $passwords=$row1["passwords"];

         echo "<tr><td>".$id."</td><td>".$firstName."</td><td>".$lastName."</td><td>".$email."</td><td>".$passwords."</td></tr>";
     }
	 echo "</table>";
} else {
     echo "0 results";
}

$sql2 = "SELECT id, rowNumber, seat, typeof, price FROM inventory";
$result2 = $conn->query($sql2);
echo "<h3>Seats</h3>";
if ($result2->num_rows > 0) {
     // output data of each row
	echo "<table><tr><th>ID</th><th>Row</th><th>Seat</th><th>Type</th><th>Price($)</th></tr>";
     while($row2 = $result2->fetch_assoc()) {
		 $id1=$row2["id"];
		 $rowNumber=$row2["rowNumber"];
		 $seat=$row2["seat"];
		 $type=$row2["typeof"];
		 $price=$row2["price"];
         echo "<tr><td>".$id1."</td><td>".$rowNumber."</td><td>".$seat."</td><td>".$type."</td><td>".$price."</td></tr>";
     }
	 echo "</table>";
} else {
     echo "0 results";
}

$sql3 = "SELECT id, firstname, lastname, rowNumber, seat, typeof, price, email FROM inventory";
$result3 = $conn->query($sql3);
echo "<h3>Orders</h3>";
if ($result3->num_rows > 0) {
     // output data of each row
	echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Row</th><th>Seat</th><th>Type</th><th>Price($)</th><th>Email/th></tr>";
     while($row3 = $result3->fetch_assoc()) {
		 $id2=$row3["id"];
		 $firstName1=$row3["firstname"];
		 $lastName1=$row3["lastname"];
		 $rowNumber1=$row3["rowNumber"];
		 $seat1=$row3["seat"];
		 $type1=$row3["typeof"];
		 $price1=$row3["price"];
		 $email1=$row3["email"];
         echo "<tr><td>".$id2."</td><td>".$firstName1."</td><td>".$lastName1."</td><td>".$rowNumber1."</td><td>".$seat1."</td><td>".$type1."</td><td>".$price1."</td><td>".$email1."</td></tr>";
     }
	 echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  
</body>

</html>