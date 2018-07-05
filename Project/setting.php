<?php
require 'includes\common.php';
if(!isset($_SESSION['email'])){
header('location:index.php');
}
?>
<!DOCTYPE html>

  <head>
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
      <script type="text/jquery" src="bootstrap/js/jquery-3.3.1.min.js">
          
      </script>
      <script type="text/javascript" src="bootstrap/js/bootstrap.min.js">
          
      </script>
      <link rel="stylesheet" href="style.css" type="text/css">
      
    <title>Cart</title>
  </head>

 <?php
include 'includes\header.php';
?>
 <div class="container-fluid t" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Change Password</h4>
                    <form action="settings_script.php" method="post">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                    </form>
                </div>
            </div>
        </div>
        
<?php
include 'includes\footer.php';
?>
</body>
</html>
