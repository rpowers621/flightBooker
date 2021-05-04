<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title></title>
	<style>
table, th, td {
  border: 3px solid white;
  border-spacing: 15px;
  padding: 3em;
  background-size: 100% 100%;
  background-repeat: no-repeat;
}
</style>
  </head>
  <body>
        <a href="main.php">Back to Main Page</a>
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
	<table style="width:100%">
  <tr>
    <th rowspan = 4 width = 10%>Lobby</th>
    <th>Handicap</th>
    <th colspan = 5>Regular</th>
    <th>Short</th>
  </tr>
  <tr>
    <td style="background-image: url('Handicap.jpg');" id  = "1" onclick="checkAvail('1')">1</td></div>
    <td id = "4" onclick="checkAvail('4')">4</td>
    <td id = "7" onclick="checkAvail('7')">7</td>
	<td id = "10" onclick="checkAvail('10')">10</td>
	<td id = "13" onclick="checkAvail('13')">13</td>
	<td id = "16" onclick="checkAvail('16')">16</td>
	<td id = "19" onclick="checkAvail('19')">19</td>
  </tr>
  <tr>
    <td style="background-image: url('Handicap.jpg');" id  = "2" onclick="checkAvail('2')">1</td></div>
    <td id = "5" onclick="checkAvail('5')">5</td>
    <td id = "8" onclick="checkAvail('8')">8</td>
	<td id = "11" onclick="checkAvail('11')">11</td>
	<td id = "14" onclick="checkAvail('14')">14</td>
	<td id = "17" onclick="checkAvail('17')">17</td>
	<td id = "20" onclick="checkAvail('20')">20</td>
  </tr>
  <tr>
    <td style="background-image: url('Handicap.jpg');" id  = "3" onclick="checkAvail('3')">1</td></div>
    <td id = "6" onclick="checkAvail('6')">6</td>
    <td id = "9" onclick="checkAvail('9')">9</td>
	<td id = "12" onclick="checkAvail('12')">12</td>
	<td id = "15" onclick="checkAvail('15')">15</td>
	<td id = "18" onclick="checkAvail('18')">18</td>
	<td id = "21" onclick="checkAvail('21')">21</td>
  </tr>
</table>
<div id="selected-spot">

</div>
	<div class="put-to-cart">
          <div id="selected-seat"> </div>
          <form id="select-seat" name="select-seat" method="post" action="chkout-parking.php">
              <input type="hidden" name="seat-selected" id="seat-selected" value="">
              <input type="submit" name="" value="Add to Cart">
            </form>
        </div>
	<?php
    $servername = "localhost";
    $username2 = "rpowers8";
    $password = "rpowers8";
    $dbname = "rpowers8";
    $conn = mysqli_connect($servername,$username2,$password,$dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT spotnumber, available FROM parking";
    $result = mysqli_query($conn, $sql);

     if (mysqli_num_rows($result) > 0) {
  // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
           if ($row['available']==1) {
             $spot =  $row['spotnumber']; ?>
            <script type="text/javascript">
            var cell = document.getElementById("<?php echo $spot ?>");
            cell.style.background="gray";
            cell.style.pointerEvents = 'none';
            </script> <?php
           }

         }
    }?>
    <script type="text/javascript">
          var spot

          function checkAvail(id){
            spot = id;
            document.getElementById("selected-spot").innerHTML= "Parking spot "+spot+" is available";
            var cell2 = document.getElementById(id);
            cell2.style.background="yellow";
            document.getElementById('seat-selected').value = spot;
          }



    </script>
    <?php
     $conn->close();
          ?>
  </body>
</html>
