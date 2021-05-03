<?php
include("connect.php");
$conn;

session_start();
if(isset($_POST['login'])){
    if(empty($_POST['uname']) || empty($_POST['psw'])){
        header("location:loginAdmin.php?Empty = Please Fill in the Blanks");
    }else{
        $query = "SELECT username, passwords FROM admins WHERE username = '".$_POST['uname']."' and passwords='".$_POST['psw']."'";
        $result = mysqli_query($conn, $query);

        if(mysqli_fetch_assoc($result)){
            $_SESSION['user']=$_POST['uname'];
            header("location:admin.php");
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