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
     <a href="#">Book Parking</a>

     <a href="register.php">Sign Up</a>

     <a href="login.php">Login</a>

     <a href="#">Cart</a>

    <a href="profile.php"> <?php

    session_start();
      $user = $_SESSION['username'];
    echo $user;  ?> <img id="logo" src="gsu.jpeg" width="48" height="48"> </a>
  </div>
   </div>
    <div class="checkout">


    <?php

    $servername = "localhost";
    $username2 = "rpowers8";
    $password = "rpowers8";
    $dbname = "rpowers8";
    $conn = mysqli_connect($servername,$username2,$password,$dbname);


    $sSeat =  $_POST['seat-selected'];

    $sql = "UPDATE parking SET available= '1' WHERE spotnumber = '".$sSeat."'";


   mysqli_query($conn, $sql);


   if($sSeat <= 3){
     $price = 60.00;
   }elseif ($sSeat <=14 && $row >3) {
     $price = 45.00;
   }else{
     $price= 30.00;
   }

  $tax =7;
  $taxes =$price * $tax/100;
  $total = $taxes + $price;


  echo "Your parking spot ".$sSeat." will cost:";
  echo "<br>";
  echo "<br>";
  echo "Tax: ".$tax."%";
  echo "<br>";
  echo "<br>";
  echo "Ticket Price: $".$price;
  echo "<br>";
  echo "<br>";
  echo "Tax on purchase: $".$taxes;
  echo "<br>";
  echo "<br>";
  echo "Total: $".$total;


    mysqli_close($conn);
     ?>
<form class="" action="payment.php" method="post">
  <p>If this amount is correct please proceed to payment</p>
  <input type="hidden" name="total" value="<?php echo $total;?> ">
  <input id ="checkButton"type="submit" name="" value="Continue">
</form>
         </div>
  </body>
</html>
