<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.1/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Payment</title>
  </head>
  <body>
      <a href="main.php">Back to Main Page</a>
      <div class="header">
        <a href="parking.php">Book Parking</a>

        <a href="register.php">Sign Up</a>

        <a href="login.php">Login</a>

        <a href="#">Cart</a>

       <a href="profile.php"> <?php

       session_start();
         $user = $_SESSION['username'];
       echo $user;  ?> <img id="logo" src="gsu.jpeg" width="48" height="48"> </a>
     </div>
      </div>

	<div class = "card">
		<form>
		<h1 class = "card__title"> Enter Billing Address</h1>
			<div class = "card_row">
			<label for="address" class="card__label">Address</label>
			<input
              type="text"
              class="card__input card__input--large"
              id="name"
              placeholder="Name"
			>
			<br>
			<br>
			<label for="city" class="card__label">City</label>
			<input
              type="text"
              class="card__input card__input--large"
              id="name"
              placeholder="Name"
			>
			<br>
			<br>
			<label for="state" class="card__label">State</label>
			<input
              type="text"
              class="card__input card__input--large"
              id="name"
              placeholder="State Code"
			>
			<br>
			<br>
			<label for="zipcode" class="card__label">Zip Code</label>
			<input
              type="text"
              class="card__input card__input--large"
              id="name"
              placeholder="xxxxx"
			>
			</div>
        <h1 class="card__title">Enter Payment Information</h1>
        <?php
          $total = $_POST['total'];
          echo "<h3> Amount Due: $".$total."</h3>";
        ?>

		<div class = "card_row">
			<label for="cardName" class="card__label">Name on Card</label>
			<input
              type="text"
              class="card__input card__input--large"
              id="name"
              placeholder="Name"
			>
		</div>
		<br>
        <div class="card__row">
          <div class="card__col">
            <label for="cardNumber" class="card__label">Card Number</label>
			<input
              type="text"
              class="card__input card__input--large"
              id="cardNumber"
              placeholder="xxxx-xxxx-xxxx-xxxx"
            />
          </div>
        </div>
        <div class="card__row">
          <div class="card__col">
            <label for="cardExpiry" class="card__label">Expiry Date</label
            ><input
              type="text"
              class="card__input"
              id="cardExpiry"
              placeholder="xx/xx"
            />
          </div>
          <div class="card__col">
            <label for="cardCcv" class="card__label">CCV</label
            ><input
              type="text"
              class="card__input"
              id="cardCcv"
              placeholder="xxx"
            />
            <input type="submit" name="" value="Place Order">
          </div>
          <div class="card__col card__brand"><i id="cardBrand"></i></div>
        </div>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>
