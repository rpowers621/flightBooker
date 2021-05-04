
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

       <a href="loginAdmin.php">Admin</a>

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
    $seat = substr($sSeat,0,1);
    $row = substr($sSeat,1,2);



    $sql = "UPDATE inventory SET avail= 1 WHERE seat = '".$seat."' AND rowNumber = '".$row."'";


   mysqli_query($conn, $sql);


   if($row <= 2){
     $price = 250.00;
   }elseif ($row <=5 && $row >2) {
     $price = 120.00;
   }else{
     $price= 75.00;
   }

  $tax =7;
  $taxes =$price * $tax/100;
  $total = $taxes + $price;
  $user = $_SESSION['username'];
  echo $user;
  echo "<br>";
  echo "Your seat ".$sSeat." will cost:";
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
  <input type="hidden" name="seat" value="<?php echo $sSeat;?> ">
  <input id ="checkButton"type="submit" name="" value="Continue">
</form>
         </div>
  </body>
</html>
