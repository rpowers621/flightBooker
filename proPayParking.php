<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="main.php">Back to Main Page</a>
    <div class="header">
      <a href="parking.php">Book Parking</a>

      <a href="register.php">Sign Up</a>

      <a href="login.php">Login</a>

      <a href="admin.php">Admin</a>

     <a href="profile.php"> <?php

     session_start();
       $user = $_SESSION['username'];
     echo $user;  ?> <img id="logo" src="gsu.jpeg" width="48" height="48"> </a>
   </div>

<div class="thank-you">


   <?php

   $servername = "localhost";
   $username2 = "rpowers8";
   $password = "rpowers8";
   $dbname = "rpowers8";
   $conn = mysqli_connect($servername,$username2,$password,$dbname);

       $seat =$_POST['seat'];
       $total =$_POST['total'];

       $sql = "SELECT * FROM customer WHERE username = '$user'";
       $result = $conn->query($sql);

         $row = $result->fetch_assoc();
           $id =$row['id'];
           $fName =$row['firstname'];
           $lName =$row['lastname'];
           $type ='parking';
           $email =$row['email'];

           $sql2 = "INSERT INTO orders (id,firstname, lastname, rowNumber, seat, typeof, price, email)
       VALUES ('$id','$fName','$lName','$seat', '$seat','$type','$total','$email')";

       if (mysqli_multi_query($conn, $sql2)) {
           echo "<h1>Thank you for choosing GSU Airlines </h1>";

       } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
       }



    ?>
  </div>
  </body>
</html>
