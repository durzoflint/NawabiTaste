<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Review Order</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/js.js"></script>
    <link rel="stylesheet" href="./cs/cs.css">
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
    <div class="container">
      <h2>Review Order</h2><hr>
      <div style="height: auto; min-height: 50vh" class="table-responsive">
        <table style="text-align: center;" id="mytable" class="table table-bordered">
          <thead>
            <tr>
              <th style="text-align: center;">S. No.</th>
              <th style="text-align: center;">Order for</th>
              <th style="text-align: center;">Quantity</th>
              <th style="text-align: center;">Unit Price</th>
              <th style="text-align: center;">Total Price</th>
              <th style="text-align: center;">Action</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
        <div style="text-align: right;">
        	<p style="font-weight: bold;" id="grandtotal"></p>
        	<form method="post" action="./checkout.php" onsubmit="return(checkoutOrder());">
				    <input hidden type="text" id="finalcart" name="finalcart" value="">
		        <input class="btn" type="submit" name="submit" value="Checkout">
		    </form>
        </div>
      </div>
      <script type="text/javascript">
  		var cartData = "<?php
  			if(isset($_POST['cart']))
  			{
  				$cartData=$_POST['cart'];
            	echo $cartData;
  			}
  			else
  				header('Location: ./order.html');
    	?>";
    	showCart(cartData);
  	</script>
    </div>
    <br>
    <footer class="container-fluid text-center bg-footer">
      <p>Footer Text</p>
    </footer>
  </body>
</html>