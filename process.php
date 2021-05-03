
<?php
$servername = "localhost";
$username2 = "rpowers8";
$password = "rpowers8";
$dbname = "rpowers8";
$conn = mysqli_connect($servername,$username2,$password,$dbname);
session_start();
if(isset($_POST['login']))
{
  $myusername = $_POST['uname'];
  $mypassword = $_POST['psw'];

    $sql=mysqli_query($conn,"SELECT * FROM customer where username='$myusername' and passwords='$mypassword'");
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
