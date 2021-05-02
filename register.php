<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: rgb(0, 0, 0);
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: rgb(14, 108, 145);
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f149;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #045faa;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<?php
include("connect.php");
$conn;
if (isset($_REQUEST['uname'])) {
    $username = stripslashes($_REQUEST['uname']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($conn, $username);
    $firstName = stripslashes($_REQUEST['firstName']);
    $firstName = mysqli_real_escape_string($conn, $firstName);
    $lastName = stripslashes($_REQUEST['lastName']);
    $lastName = mysqli_real_escape_string($conn, $lastName);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    $password = stripslashes($_REQUEST['psw']);
    $password = mysqli_real_escape_string($conn, $password);
        $query    = "INSERT into `customer` (firstname, lastname, email, username, passwords)
                     VALUES ('$firstName', '$lastName', '$email', '$username', '$password')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                <h3>You are registered successfully.</h3><br/>
                <p class='link'>Click here to <a href='login.php'>Login</a></p>
                </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='register.php'>register</a> again.</p>
                  </div>";
        }
    } else {
?>   
<form action="" method = "post">
  <div class="container">
    <h1>Register Form.</h1>
    <p>create an account.</p>
    <hr>

    <label for="firstName"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="firstName" id="firstName" required>

    <label for="lastName"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lastName" id="lastName" required>

    <label for="email"><b>Email </b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" id="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" name = "register" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>
<?php
    }
?>
</body>
</html>