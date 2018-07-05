<?php

function if_added_to_cart($item_id){
   $con= mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
    $user_id=$_SESSION['id'];
    $query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id='$user_id' AND status='Added to cart'";
    $res=mysqli_query($con,$query) ;
    if(mysqli_num_rows($res)>=1){
        return 1;
    }
 else {
        return  0;    
    }
}
?>