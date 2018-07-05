<?php

require 'includes\common.php';
$email= mysqli_real_escape_string($con,$_POST['email']);
$password= md5($_POST['password']);
$login_submit_query="SELECT id,email FROM users WHERE email='$email' and password='$password' ";
$login_submit= mysqli_query($con,$login_submit_query) or die(mysqli_error($con));
if(mysqli_num_rows($login_submit)==0){
    echo 'No user with the entered email and password';
    
}
else{
   $row= mysqli_fetch_array($login_submit);
   $_SESSION['email']=$row[1];
   $_SESSION['id']=$row[0];
   header('location:products.php');
   
}
?>
