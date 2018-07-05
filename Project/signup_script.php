<?php
require 'includes\common.php';

$email= mysqli_escape_string($con, $_POST['email']);
$password= md5(mysqli_escape_string($con, $_POST['password']));
$name= mysqli_escape_string($con, $_POST['name']);

$contact= mysqli_escape_string($con, $_POST['contact']);
$city= mysqli_escape_string($con, $_POST['city']);
$address= mysqli_escape_string($con, $_POST['address']);
$check="SELECT id FROM users WHERE email='$email'";
$res= mysqli_query($con,$check);
if(mysqli_num_rows($res)>0){
    echo 'email id already exists';
}
else{
$signup_query="insert into users(name,email,password,contact,city,address) values('$name','$email','$password','$contact','$city','$address')" ;

$result= mysqli_query($con,$signup_query);
$id= mysqli_insert_id($con);
$_SESSION['id']=$id;
$_SESSION['email']=$email;

header('location:products.php');
}
?>
