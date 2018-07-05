<?php

require 'includes/common.php';
$user_id=$_SESSION['id'];
if(!isset($_SESSION['email'])){
    header('location:index.php');
    
}
 else {
$password=md5($_POST['old-password']);
    $newpassword=md5($_POST['password']);
    $npassword=md5($_POST['password1']);
    if(strlen($newpassword)!= strlen($npassword)){
        echo "passwords didn't match";
        header('location:setting.php');
        
    }
else{
    
$query="SELECT password from users WHERE id='$user_id'";
$res= mysqli_query($con, $query);
$row= mysqli_fetch_array($res);
if($row[0]==$password){
    $query="UPDATE users SET password='$newpassword' WHERE id='$user_id'";
    $res=mysqli_query($con, $query);
    header('location:products.php');
}
else{
    echo 'Enter correct password';
    header('location:setting.php');
}
    
}    
}