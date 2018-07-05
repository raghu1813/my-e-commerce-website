<?php
require 'includes\common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
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
      
    <title>Cart</title>
  </head>
  <body>
    <?php
    include 'includes\header.php';
    ?>
    
 <div class="container-fluid style " id='content'>

            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <?php
                        $sum=0;
                        $id='';
                        $user_id=$_SESSION['id'];
                        $query="SELECT items.price AS price,items.id as item_id,items.name as name FROM users_items JOIN items ON users_items.item_id=items.id WHERE users_items.user_id='$user_id' AND status='Added to cart'";
                        $res= mysqli_query($con, $query);
                        if(mysqli_num_rows($res)>=1){
                            
                        ?>
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          while($row= mysqli_fetch_array($res))
                          {
                              $sum+=$row['price'];
                              
                              $id.=$row['item_id'].",";
                              
                          
                          echo "<tr><td>"."#".$row['item_id']."</td><td>".$row['name']."</td><td>Rs".$row['price']." </td><td><a href='cart-remove.php?id={$row['item_id']}' class='remove_item_link'>Remove</a>
       </td></tr>";
                          }
                          $id= rtrim($id,',');
                          
echo "<tr><td></td><td>Total.'$sum'.</td><td><a href='success.php?id=".$id."' class='btn btn-primary'>Confirm Order</a></td>
                            </tr>";
?>
                        </tbody>
                        <?php
                        }
                        else {
                        echo 'Add items to Cart First!';
                        
}
?>
                        
                      
                        
                    </table>
                </div>
            </div>
        </div>
     
  <?php
    include 'includes\footer.php';
    ?>
</body>
</html>