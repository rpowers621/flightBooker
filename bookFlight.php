



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="conatiner">
      <a href="main.php">Back to Main Page</a>
      <div class="header">

        <?php
        $from = $_POST['flight-from'];
        $to = $_POST['flight-to'];
        echo $from." - ".$to;
        echo "&nbsp;&nbsp;&nbsp;&nbsp";
        $date = $_POST['date'];
        echo $date;
         ?>
         <a href="parking.php">Book Parking</a>

         <a href="register.php">Sign Up</a>

         <a href="login.php">Login</a>

          <a href="admin.php">Admin</a>

        <a href="profile.php"> <?php

        session_start();
          $user = $_SESSION['username'];
        echo $user;  ?> <img id="logo" src="gsu.jpeg" width="48" height="48"> </a>
      </div>

      <div class="seat-class">

        <div id="basic" style="width:250px; height:300px">
          <div class="text-B">
            <p>Basic</p>
          </div>
          <div class="price-B">
            <p>$75.00</p>
          </div>
        </div>
        <div id="comfort" style="width:250px; height:300px">
          <div class="text-B">
            <p>Comfort+</p>
          </div>
          <div class="price-B">
            <p>$120.00</p>
          </div>
        </div>
        <div id="first" style="width:250px; height:300px">
          <div class="text-B">
            <p>First</p>
          </div>
          <div class="price-B">
            <p>$250</p>
          </div>
        </div>

      </div>

      <div class="seating">
        <div class="table">
        <table style="width:300px;">
          <tr >
            <th>A</th>
            <th>B</th>
            <th> <pre>      </pre> </th>
            <th>C</th>
            <th>D</th>
          </tr>

          <tr class="first-class">
            <td id="A1" onclick="checkAvail('A1')"></td>
            <td id="B1" onclick="checkAvail('B1')"></td>
            <td><pre>   1   </pre> </td>
            <td id="C1" onclick="checkAvail('C1')"></td>
            <td id="D1" onclick="checkAvail('D1')"></td>
          </tr>

          <tr class="first-class">
            <td id="A2" onclick="checkAvail('A2')"></td>
            <td id="B2" onclick="checkAvail('B2')"></td>
            <td><pre>   2   </pre> </td>
            <td id="C2" onclick="checkAvail('C2')"></td>
            <td id="D2" onclick="checkAvail('D2')"></td>
          </tr>

          <tr class="comfort-class">
            <td id="A3" onclick="checkAvail('A3')"></td>
            <td id="B3" onclick="checkAvail('B3')"></td>
            <td ><pre>   3   </pre> </td>
            <td id="C3" onclick="checkAvail('C3')"></td>
            <td id="D3" onclick="checkAvail('D3')"></td>
          </tr>
          <tr class="comfort-class">
            <td id="A4" onclick="checkAvail('A4')"></td>
            <td id="B4" onclick="checkAvail('B4')"></td>
            <td><pre>   4   </pre> </td>
            <td id="C4" onclick="checkAvail('C4')"></td>
            <td id="D4" onclick="checkAvail('D4')"></td>
          </tr>
          <tr class="comfort-class">
            <td id="A5" onclick="checkAvail('A5')"></td>
            <td id="B5" onclick="checkAvail('B5')"></td>
            <td><pre>   5   </pre> </td>
            <td id="C5" onclick="checkAvail('C5')"></td>
            <td id="D5" onclick="checkAvail('D5')"></td>
          </tr>
        </table>

        <table style="width:300px;">
          <tr>
            <th>A</th>
            <th>B</th>
            <th>C</th>
            <th><pre>      </pre> </th>
            <th>D</th>
            <th>E</th>
            <th>F</th>
          </tr>
            <tr class="basic-class">
              <td id="A6" onclick="checkAvail('A6')"></td>
              <td id="B6" onclick="checkAvail('B6')"></td>
              <td id="C6" onclick="checkAvail('C6')"></td>
              <td><pre>   6   </pre> </td>
              <td id="D6" onclick="checkAvail('D6')"></td>
              <td id="E6" onclick="checkAvail('E6')"></td>
              <td id="F6" onclick="checkAvail('F6')"></td>
            </tr>
          </tr>
            <tr class="basic-class">
              <td id="A7" onclick="checkAvail('A7')"></td>
              <td id="B7" onclick="checkAvail('B7')"></td>
              <td id="C7" onclick="checkAvail('C7')"></td>
              <td><pre>   7   </pre> </td>
              <td id="D7" onclick="checkAvail('D7')"></td>
              <td id="E7" onclick="checkAvail('E7')"></td>
              <td id="F7" onclick="checkAvail('F7')"></td>
            </tr>
          </tr>
            <tr class="basic-class">
              <td id="A8" onclick="checkAvail('A8')"></td>
              <td id="B8" onclick="checkAvail('B8')"></td>
              <td id="C8" onclick="checkAvail('C8')"></td>
              <td><pre>   8   </pre> </td>
              <td id="D8" onclick="checkAvail('D8')"></td>
              <td id="E8" onclick="checkAvail('E8')"></td>
              <td id="F8" onclick="checkAvail('F8')"></td>
            </tr>
          </tr>
            <tr class="basic-class">
              <td id="A9" onclick="checkAvail('A9')"></td>
              <td id="B9" onclick="checkAvail('B9')"></td>
              <td id="C9" onclick="checkAvail('C9')"></td>
              <td><pre>   9   </pre> </td>
              <td id="D9" onclick="checkAvail('D9')"></td>
              <td id="E9" onclick="checkAvail('E9')"></td>
              <td id="F9" onclick="checkAvail('F9')"></td>
            </tr>
          </tr>
            <tr class="basic-class">
              <td id="A10" onclick="checkAvail('A10')"></td>
              <td id="B10" onclick="checkAvail('B10')"></td>
              <td id="C10" onclick="checkAvail('C10')"></td>
              <td><pre>   10   </pre> </td>
              <td id="D10" onclick="checkAvail('D10')"></td>
              <td id="E10" onclick="checkAvail('E10')"></td>
              <td id="F10" onclick="checkAvail('F10')"></td>
            </tr>
          </tr>
            <tr class="basic-class">
              <td id="A11" onclick="checkAvail('A11')"></td>
              <td id="B11" onclick="checkAvail('B11')"></td>
              <td id="C11" onclick="checkAvail('C11')"></td>
              <td><pre>   11   </pre> </td>
              <td id="D11" onclick="checkAvail('D11')"></td>
              <td id="E11" onclick="checkAvail('E11')"></td>
              <td id="F11" onclick="checkAvail('F11')"></td>
            </tr>
          </tr>
            <tr class="basic-class">
              <td id="A12" onclick="checkAvail('A12')"></td>
              <td id="B12" onclick="checkAvail('B12')"></td>
              <td id="C12" onclick="checkAvail('C12')"></td>
              <td><pre>   12   </pre> </td>
              <td id="D12" onclick="checkAvail('D12')"></td>
              <td id="E12" onclick="checkAvail('E12')"></td>
              <td id="F12" onclick="checkAvail('F12')"></td>
            </tr>
            <tr class="basic-class">
              <td id="A13" onclick="checkAvail('A13')"></td>
              <td id="B13" onclick="checkAvail('B13')"></td>
              <td id="C13" onclick="checkAvail('C13')"></td>
              <td><pre>   13   </pre> </td>
              <td id="D13" onclick="checkAvail('D6')"></td>
              <td id="E13" onclick="checkAvail('E13')"></td>
              <td id="F13" onclick="checkAvail('F13')"></td>
            </tr>
          </tr>
            <tr class="basic-class">
              <td id="A14" onclick="checkAvail('A14')"></td>
              <td id="B14" onclick="checkAvail('B14')"></td>
              <td id="C14" onclick="checkAvail('C14')"></td>
              <td><pre>   14   </pre> </td>
              <td id="D14" onclick="checkAvail('D14')"></td>
              <td id="E14" onclick="checkAvail('E14')"></td>
              <td id="F14" onclick="checkAvail('F14')"></td>
            </tr>
          </tr>
            <tr class="basic-class">
              <td id="A15" onclick="checkAvail('A15')"></td>
              <td id="B15" onclick="checkAvail('B15')"></td>
              <td id="C15" onclick="checkAvail('C15')"></td>
              <td><pre>   15   </pre> </td>
              <td id="D15" onclick="checkAvail('D15')"></td>
              <td id="E15" onclick="checkAvail('E15')"></td>
              <td id="F15" onclick="checkAvail('F15')"></td>
            </tr>
          </tr>
            <tr class="basic-class">
              <td id="A16" onclick="checkAvail('A16')"></td>
              <td id="B16" onclick="checkAvail('B16')"></td>
              <td id="C16" onclick="checkAvail('C16')"></td>
              <td><pre>   16   </pre> </td>
              <td id="D16" onclick="checkAvail('D16')"></td>
              <td id="E16" onclick="checkAvail('E16')"></td>
              <td id="F16" onclick="checkAvail('F16')"></td>
            </tr>
          </tr>
            <tr class="basic-class">
              <td id="A17" onclick="checkAvail('A17')"></td>
              <td id="B17" onclick="checkAvail('B17')"></td>
              <td id="C17" onclick="checkAvail('C17')"></td>
              <td><pre>   17   </pre> </td>
              <td id="D17" onclick="checkAvail('D17')"></td>
              <td id="E17" onclick="checkAvail('E17')"></td>
              <td id="F17" onclick="checkAvail('F17')"></td>
            </tr>
          </tr>
            <tr class="basic-class">
              <td id="A18" onclick="checkAvail('A18')"></td>
              <td id="B18" onclick="checkAvail('B18')"></td>
              <td id="C18" onclick="checkAvail('C18')"></td>
              <td><pre>   18   </pre> </td>
              <td id="D18" onclick="checkAvail('D18')"></td>
              <td id="E18" onclick="checkAvail('E18')"></td>
              <td id="F18" onclick="checkAvail('F18')"></td>
            </tr>
          </tr>
            <tr class="basic-class">
              <td id="A19" onclick="checkAvail('A19')"></td>
              <td id="B19" onclick="checkAvail('B19')"></td>
              <td id="C19" onclick="checkAvail('C19')"></td>
              <td><pre>   19   </pre> </td>
              <td id="D19" onclick="checkAvail('D19')"></td>
              <td id="E19" onclick="checkAvail('E19')"></td>
              <td id="F19" onclick="checkAvail('F19')"></td>
            </tr>
            <tr class="basic-class">
              <td id="A20" onclick="checkAvail('A20')"></td>
              <td id="B20" onclick="checkAvail('B20')"></td>
              <td id="C20" onclick="checkAvail('C20')"></td>
              <td><pre>   20    </pre> </td>
              <td id="D20" onclick="checkAvail('D20')"></td>
              <td id="E20" onclick="checkAvail('E20')"></td>
              <td id="F20" onclick="checkAvail('F20')"></td>
            </tr>
          </tr>
            <tr class="basic-class">
              <td id="A21" onclick="checkAvail('A21')"></td>
              <td id="B21" onclick="checkAvail('B21')"></td>
              <td id="C21" onclick="checkAvail('C21')"></td>
              <td><pre>   21    </pre> </td>
              <td id="D21" onclick="checkAvail('D21')"></td>
              <td id="E21" onclick="checkAvail('E21')"></td>
              <td id="F21" onclick="checkAvail('F21')"></td>
            </tr>
        </table>
      </div>

        <div class="put-to-cart">
          <div id="selected-seat"> </div>
          <form id="select-seat" name="select-seat" method="post" action="checkout.php">
              <input type="hidden" name="seat-selected" id="seat-selected" value="">
              <input type="submit" name="" value="Add to Cart">
            </form>
        </div>
      </div>

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
    $sql = "SELECT rowNumber, seat, avail FROM inventory";
    $result = mysqli_query($conn, $sql);

     if (mysqli_num_rows($result) > 0) {
  // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
           if ($row['avail']==1) {
             $seat =  $row['seat'];
             $row =  $row['rowNumber'];
             $tdID = $seat.$row; ?>
            <script type="text/javascript">
            var cell = document.getElementById("<?php echo $tdID ?>");
            cell.style.background="gray";
            cell.style.pointerEvents = 'none';
            </script> <?php
           }

         }
    }?>
    <script type="text/javascript">
          var seat;

          function checkAvail(id){
            seat = id;
            document.getElementById("selected-seat").innerHTML= seat+" is available";
            var cell2 = document.getElementById(id);
            cell2.style.background="yellow";
            document.getElementById('seat-selected').value = seat;
          }
    </script>
    <?php
     $conn->close();
          ?>



  </body>
</html>
