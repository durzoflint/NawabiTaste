<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Enter Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./cs/cs.css">
    <script src="./js/js.js" type="text/javascript"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./index.html">WebsiteName</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="./index.html">Home</a></li>
            <li><a href="./order.html">Order Now</a></li>
            <li><a href="./howitworks.html">How We Work</a></li>
            <li><a href="./contactus.html">Contact Us</a></li>
            <li><a href="./feedback.html">Feedback</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="./login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
          <!--ul class="nav navbar-nav navbar-right">
                <li><a href="./cart.php"><img style="height: 20px;" src="./img/shoppingcartwhitesmall.png">Cart</a></li>
          </ul-->
        </div>
      </div>
    </nav>
    <div style="height: 20vh; width: 100%;">
      <img style="height: 100%; width: 100%;" src="https://placehold.it/1000x200?text=IMAGE">
    </div>
    <br>
    <?php
	if(isset($_POST['finalcart']))
		$cartData=$_POST['finalcart'];
	?>
    <div style="margin-left: 5vw; margin-right: 5vw; max-width: 600px; height: 60vh;" class="container">
      <h2>Enter Details for Cash on Delivery</h2>
      <br>
      <form style="text-align: center;" name="OrderForm" method="post" action="./placeorder.php" onsubmit="return(validatePlaceOrder());">
      	<input style="text-align: center; width: 100%;" required type="text" name="name" placeholder="Name"><br><br>
        <input style="text-align: center; width: 100%;" required type="text" name="mobileno" placeholder="Number"><br><br>
        <input style="text-align: center; width: 100%;" required type="text" name="emailid" placeholder="Email"><br><br>
        <input style="text-align: center; width: 100%;" hidden required type="text" name="items" value="<?php echo $cartData;?>">
        <input class="btn" type="submit" name="submit">
      </form>
    </div>
    <br>
    <footer class="container-fluid text-center bg-footer">
      <p>Footer Text</p>
    </footer>
  </body>
</html>