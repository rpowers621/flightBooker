<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <div class="container" style="min-width: 1000px;">
      <div class="header">
        GSU Airlines
        <a href="parking.php">Book Parking</a>

        <a href="register.php">Sign Up</a>

        <a href="login.php">Login</a>

         <a href="admin.php">Admin</a>


        <a href="profile.php"> <?php
        session_start();
          $user = $_SESSION['username'];
        echo $user;  ?> <img id="logo" src="gsu.jpeg" width="48" height="48"> </a>


      </div>
    <button type="button" name="button" ><a href="logout.php">Logout</a></button>

  </body>
</html>
