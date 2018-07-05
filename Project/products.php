
<?php
include 'includes\common.php';
?>

<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
      <script type="text/jquery" src="bootstrap/js/jquery-3.3.1.min.js">
          
      </script>
      <script type="text/javascript" src="bootstrap/js/bootstrap.min.js">
          
      </script>
      <link rel="stylesheet" href="style.css" type="text/css">
      
    <title>Products page</title>
  </head>
  <body>
      <?php
      include 'includes\header.php';
      include 'includes\if-added.php';
      ?>
  <div class="container t">
      <div class="jumbotron">
          <h1>
              Welcome to our Lifestyle Store!
          </h1>
          <p>
               We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.
          </p>

                      
                      
              </div>
          
               
      </div>
  
  <div class="container">
      <div class="row text-center ">
          <div class="col-sm-3">
              <div class="thumbnail img-responsive">
                  <img src="img/camera.jpg " class="img-responsive" alt="cameras">
              
              <div class="caption">
                  <h4>
                      Nikon D5300
                  </h4>
                  <p>Price:Rs.36000.00</p>
                  <?php
                  if(!isset($_SESSION['email']))
                       
                      {
                      ?>
                  <p>
                      <a href="login.php" role="button" class="btn btn-primary btn-block">
                          Buy Now
                      </a>
                  </p>
                  <?php
                  }
                  else {
                      if(if_added_to_cart(1)){
                          ?>
                       <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                      <?php
                  }
                  else {
                      ?>
                  <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">
                      Add to Cart
                  </a>
                  <?php
                  
                  }
             
                  }
                  ?>
              </div>
              </div>     
          </div>
          <div class="col-sm-3">
              <div class="thumbnail img-responsive">
                  <img src="img/camera2.jpg " class="img-responsive" alt="cameras">
              
              <div class="caption">
                  <h4>
                      Canon EDS2000
                  </h4>
                  <p>Price:Rs.24000.00</p>
                                    <?php
                  if(!isset($_SESSION['email'])){
                      ?>
                  <p>
                      <a href="login.php" role="button" class="btn btn-primary btn-block">
                          Buy Now
                      </a>
                  </p>
                  <?php
                  }
                  else {
                      if(if_added_to_cart(2)){
                          ?>
                  
                      <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                  <?php    
                  }
                  else {
                      ?>
                  <a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">
                      Add to Cart
                  </a>
                  <?php
                  
                  }
             
                  }
                  ?>

              </div>
              </div>     
          </div>
          <div class="col-sm-3">
              <div class="thumbnail img-responsive">
              <img src="img/camera3.jpg " alt="cameras">
              
              <div class="caption">
                  <h4>
                     Kodak Pixpro F253
                  </h4>
                  <p>Price:Rs.18000.00</p>
                                    <?php
                  if(!isset($_SESSION['email'])){
                      ?>
                  <p>
                      <a href="login.php" role="button" class="btn btn-primary btn-block">
                          Buy Now
                      </a>
                  </p>
                  <?php
                  }
                  else {
                      if(if_added_to_cart(3)){
                       ?>
                  
                      <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                      <?php
                  }
                  else {
                      ?>
                  <a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">
                      Add to Cart
                  </a>
                  <?php
                  
                  }
             
                  }
                  ?>

              </div>
              </div>     
          </div>
          <div class="col-sm-3">
              <div class="thumbnail img-responsive">
              <img src="img/camera4.jpg " alt="cameras">
              
              <div class="caption">
                  <h4>Nikon D3400</h4>
                  <p>Price:Rs.30000.00</p>
                                    <?php
                  if(!isset($_SESSION['email'])){
                      ?>
                  <p>
                      <a href="login.php" role="button" class="btn btn-primary btn-block">
                          Buy Now
                      </a>
                  </p>
                  <?php
                  }
                  else {
                      if(if_added_to_cart(4)){
                          ?>
                  
                     <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                      <?php
                  }
                  else {
                      ?>
                  <a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">
                      Add to Cart
                  </a>
                  <?php
                  
                  }
             
                  }
                  ?>

              </div>
              </div>     
          </div>
          

      </div>
      <div class="row text-center ">
          <div class="col-sm-3">
              <div class="thumbnail img-responsive">
              <img src="img/watch.jpg " alt="watches">
              
              <div class="caption">
                  <h4>
                      Quartz
                  </h4>
                      
                  <p>Price:Rs.3600.00</p>
                                    <?php
                  if(!isset($_SESSION['email'])){
                      ?>
                  <p>
                      <a href="login.php" role="button" class="btn btn-primary btn-block">
                          Buy Now
                      </a>
                  </p>
                  <?php
                  }
                  else {
                      if(if_added_to_cart(5)){
                          ?>
                  
                      <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                      <?php
                  }
                  else {
                      ?>
                  <a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">
                      Add to Cart
                  </a>
                  <?php
                  
                  }
             
                  }
                  ?>

              </div>
              </div>     
          </div>
          <div class="col-sm-3">
              <div class="thumbnail img-responsive">
              <img src="img/watch2.jpg " alt="watches">
              
              <div class="caption">
                  <h4>
                      Guess
                  </h4>
                  <p>Price:Rs.3000.00</p>
                                    <?php
                  if(!isset($_SESSION['email'])){
                      ?>
                  <p>
                      <a href="login.php" role="button" class="btn btn-primary btn-block">
                          Buy Now
                      </a>
                  </p>
                  <?php
                  }
                  else {
                      if(if_added_to_cart(6)){
                          ?>
                  
                      <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                      <?php
                  }
                  else {
                      ?>
                  <a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">
                      Add to Cart
                  </a>
                  <?php
                  
                  }
             
                  }
                  ?>

              </div>
              </div>     
          </div>
          <div class="col-sm-3">
              <div class="thumbnail img-responsive">
              <img src="img/watch3.jpg " alt="watches">
              
              <div class="caption">
                  <h4>
                      Titan
                  </h4>
                  <p>Price:Rs.2800.00</p>
                                    <?php
                  if(!isset($_SESSION['email'])){
                      ?>
                  <p>
                      <a href="login.php" role="button" class="btn btn-primary btn-block">
                          Buy Now
                      </a>
                  </p>
                  <?php
                  }
                  else {
                      if(if_added_to_cart(7)){
                          
                  ?>
                  
                      <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                      <?php
                  }
                  else {
                      ?>
                  <a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">
                      Add to Cart
                  </a>
                  <?php
                  
                  }
             
                  }
                  ?>

              </div>
              </div>     
          </div>
          <div class="col-sm-3">
              <div class="thumbnail img-responsive">
              <img src="img/watch4.jpg " alt="watches">
              
              <div class="caption">
                  <h4>
                      Armani
                  </h4>
                  <p>Price:Rs.4000.00</p>
                                   <?php
                  if(!isset($_SESSION['email'])){
                      ?>
                  <p>
                      <a href="login.php" role="button" class="btn btn-primary btn-block">
                          Buy Now
                      </a>
                  </p>
                  <?php
                  }
                  else {
                      if(if_added_to_cart(8)){
                          ?>
                  
                      <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                      
                      <?php
                  }
                  else {
                      ?>
                  <a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">
                      Add to Cart
                  </a>
                  <?php
                  
                  }
             
                  }
                  ?>

              </div>
              </div>     
          </div>
          

      </div>
      <div class="row text-center ">
          <div class="col-sm-3">
              <div class="thumbnail img-responsive">
              <img src="img/shirt.jpg " alt="shirts">
              
              <div class="caption">
                  <h4>
                      Us polo
                  </h4>
                  <p>Price:Rs.1000.00</p>
                                    <?php
                  if(!isset($_SESSION['email'])){
                      ?>
                  <p>
                      <a href="login.php" role="button" class="btn btn-primary btn-block">
                          Buy Now
                      </a>
                  </p>
                  <?php
                  }
                  else {
                      if(if_added_to_cart(9)){
                          ?>
                  
                      <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                      <?php
                  }
                  else {
                      ?>
                  <a href="cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">
                      Add to Cart
                  </a>
                  <?php
                  
                  }
             
                  }
                  ?>

              </div>
              </div>     
          </div>
          <div class="col-sm-3">
              <div class="thumbnail img-responsive">
              <img src="img/shirt2.jpg " alt="shirts">
              
              <div class="caption">
                  <h4>
                      Luis phill
                  </h4>
                  <p>Price:Rs.1500.00</p>
                                    <?php
                  if(!isset($_SESSION['email'])){
                      ?>
                  <p>
                      <a href="login.php" role="button" class="btn btn-primary btn-block">
                          Buy Now
                      </a>
                  </p>
                  <?php
                  }
                  else {
                      if(if_added_to_cart(10)){
                          ?>
                  
                      <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                      <?php
                  }
                  else {
                      ?>
                  <a href="cart_add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">
                      Add to Cart
                  </a>
                  <?php
                  
                  }
             
                  }
                  ?>

              </div>
              </div>     
          </div>
          <div class="col-sm-3">
              <div class="thumbnail img-responsive">
              <img src="img/shirt3.jpg " alt="shirts">
              
              <div class="caption">
                  <h4>
                      
                     John Zok
                  </h4>
                  <p>Price:Rs.2000.00</p>
                                 <?php
                  if(!isset($_SESSION['email'])){
                      ?>
                  <p>
                      <a href="login.php" role="button" class="btn btn-primary btn-block">
                          Buy Now
                      </a>
                  </p>
                  <?php
                  }
                  else {
                      if(if_added_to_cart(11)){
                          ?>
                  
                     <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                      <?php
                  }
                  else {
                      ?>
                  <a href="cart_add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">
                      Add to Cart
                  </a>
                  <?php
                  
                  }
             
                  }
                  ?>

              </div>
              </div>     
          </div>
          <div class="col-sm-3">
              <div class="thumbnail img-responsive">
              <img src="img/shirt4.jpg " alt="shirts">
              
              <div class="caption">
                  <h4>
                      Jhalsani
                  </h4>
                  <p>Price:Rs.1800.00</p>
                                    <?php
                  if(!isset($_SESSION['email'])){
                      ?>
                  <p>
                      <a href="login.php" role="button" class="btn btn-primary btn-block">
                          Buy Now
                      </a>
                  </p>
                  <?php
                  }
                  else {
                      if(if_added_to_cart(12)){
                          ?>
                  
                      <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                      <?php
                  }
                  else {
                      ?>
                  <a href="cart_add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">
                      Add to Cart
                  </a>
                  <?php
                  
                  }
             
                  }
                  ?>

              </div>
              </div>     
          </div>
          

      </div>
  </div> 
  <?php
  include 'includes\footer.php';
  ?>
  </body>
</html>



