<?php
require 'includes\common.php';
if(isset($_SESSION['email'])){
header('location:products.php');
}

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
      
    <title>Lifestyle Store</title>
  </head>
<body>
    <?php
    include 'includes\header.php';
    ?>
    
    <div id="content">
            
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>We sell lifestyle.</h1>
                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
       
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#cameras" >
                            <div class="thumbnail">
                                <img src="img/6.jpg" alt="cameras">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#watches" >
                            <div class="thumbnail">
                                <img src="img/21.jpg" alt="watches">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#shirts" >
                            <div class="thumbnail">
                                <img src="img/22.jpg" alt="shirts">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>

<?php
    include 'includes\footer.php';
    ?>
    

</body>
</html>