<?php
include("connect.php");
$conn;
session_start();
if(isset($_POST['login']))
{
  $myusername = $_POST['uname'];
  $mypassword = $_POST['psw'];

    $sql=mysqli_query($conn,"SELECT * FROM admins where username='$myusername' and passwords='$mypassword'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["username"] = $row['username'];
        $_SESSION["password"]=$row['passwords'];

        header("Location: main.php");
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>
