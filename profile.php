<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <div class="container" style="min-width: 1000px;">
          <a href="main.php">Back to Main Page</a>
          <br>

      <div class="header">
        GSU Airlines
        <a href="parking.php">Book Parking</a>

        <a href="register.php">Sign Up</a>

        <a href="login.php">Login</a>

           <a href="loginAdmin.php">Admin</a>


        <a href="profile.php"> <?php
        session_start();
          $user = $_SESSION['username'];
        echo $user;  ?> <img id="logo" src="gsu.jpeg" width="48" height="48"> </a>


      </div>
      <a href="logout.php">Logout</a>
      <div class="profile">
      <?php
      $servername = "localhost";
      $username2 = "rpowers8";
      $password = "rpowers8";
      $dbname = "rpowers8";
      $conn = mysqli_connect($servername,$username2,$password,$dbname);

      $user = $_SESSION['username'];
      $sql1 = "SELECT *FROM customer WHERE username = '$user'";
      $result1 = $conn->query($sql1);

           // output data of each row
      	echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Username</th><th>Password</th></tr>";
          $row1 = $result1->fetch_assoc();
      		 $id=$row1["id"];
      		 $firstName=$row1["firstname"];
      		 $lastName=$row1["lastname"];
      		 $email=$row1["email"];
      		 $username=$row1["username"];
      		 $passwords=$row1["passwords"];

          echo "<tr><td>".$id."</td><td>".$firstName."</td><td>".$lastName."</td><td>".$email."</td><td>".$username."</td><td>".$passwords."</td></tr>";

      	 echo "</table>";
  
      ?>
    </div>
  </body>
</html>
