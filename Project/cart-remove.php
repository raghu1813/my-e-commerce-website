<?php

require("includes/common.php");

    $item_id = $_GET['id']; 
    $user_id = $_SESSION['id'];
   
    $query = "DELETE FROM users_items WHERE item_id='$item_id' AND user_id='$user_id' ";
 
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
    header("location:cart.php");

?>