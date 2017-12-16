<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Review Order</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                <li class="active"><a href="./cart.html"><img style="height: 20px;" src="./img/shoppingcartwhitesmall.png">Cart</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div style="height: 20vh; width: 100%;">
      <img style="height: 100%; width: 100%;" src="https://placehold.it/1000x200?text=IMAGE">
    </div>
    <br>
    <div style="margin-left: 5vw; margin-right: 5vw; max-width: 600px;" class="container">
      <h2>Review Order</h2>
      <div style="height: 50vh">
        <?php
          if(isset($_POST['cart']))
          {
            $cartData=$_POST['cart'];
            echo $cartData;
          }
          else
          {
            echo "Nothing";
          }
        ?>
      </div>
    </div>
    <br>
    <footer class="container-fluid text-center bg-footer">
      <p>Footer Text</p>
    </footer>
  </body>
</html>