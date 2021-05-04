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

           <a href="loginAdmin.php">Admin</a>


        <a href="profile.php"> <?php
        $servername = "localhost";
        $username = "rpowers8";
        $password = "rpowers8";
        $dbname = "rpowers8";
        $conn = mysqli_connect($servername,$username,$password,$dbname);
        session_start();
          $user = $_SESSION['username'];
        echo $user;  ?> <img id="logo" src="gsu.jpeg" width="48" height="48"> </a>


      </div>
      <div class="flight-control">

        <form class="" action="bookFlight.php" method="post">
          <select class="" name="flight-from" value="From">
            <option value="ATL">ATL</option>
            <option value="MIA">MIA</option>
            <option value="PHL">PHL</option>
            <option value="JFK">JFK</option>
            <option value="LAX">LAX</option>
          </select>

          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &larr; &rarr;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;

          <select class="" name="flight-to" value="To">
            <option value="ATL">ATL</option>
            <option value="MIA">MIA</option>
            <option value="PHL">PHL</option>
            <option value="JFK">JFK</option>
            <option value="LAX">LAX</option>
          </select>

          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;


          <input type="date" name="date" value="04-29-2021" size="10">

          <input type="submit" value="submit">
        </form>

      </div>

      <div class="image-text" >
        <img src="vacation.jpeg" style="width:100%; min-width:1000px">
        <div class="img-text">

            CATCH
            <br>
            FLIGHTS
            <br>
            NOT FEELINGS.

        </div>
      </div>

    </div>

  </body>
</html>
