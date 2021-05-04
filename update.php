<?php

$servername = "localhost";
$username2 = "rpowers8";
$password = "rpowers8";
$dbname = "rpowers8";
$conn = mysqli_connect($servername,$username2,$password,$dbname);


$sSeat =  $_POST['seat-selected'];

$sql = "UPDATE parking SET available= '0' WHERE spotnumber = '9'";


mysqli_query($conn, $sql); ?>
