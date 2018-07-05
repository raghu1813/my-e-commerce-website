<?php
require 'includes\common.php';

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
      
    <title>Login page</title>
  </head>
<body>
    
    <?php
    include 'includes\header.php';
    ?>
    <div class="container style">
   <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="email" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                            </form><br/>
                        </div>
                        <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                    </div>
                </div>
            </div>
</div>
  
           <?php
           include 'includes\footer.php';
           ?>
        </body>
</html>