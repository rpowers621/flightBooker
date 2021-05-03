<?php
include("connect.php");
$conn;

session_start();
if(isset($_POST['login'])){
    if(empty($_POST['uname']) || empty($_POST['psw'])){
        header("location:login.php?Empty = Please Fill in the Blanks");
    }else{
        $myusername = mysqli_real_escape_string($conn,$_POST['uname']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['psw']);
        $query = "SELECT username, passwords FROM customer WHERE username = '$myusername' and passwords='$mypassword'";
        $result = mysqli_query($conn, $query);
        $count = mysqli_num_rows($result);

        if($count==1){
            $_SESSION['username']=$myusername;
            header("location:main.php");
        }else{
?>
        <script type = "text/javascript">
            alert("Incorrect Username or Password");
            window.history.back();
        </script>
<?php
        }
    }
}else{
    echo 'Not working';
}
?>
