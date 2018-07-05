<?php
require 'includes\common.php';
$item_id=$_GET['id'];
$user_id=$_SESSION['id'];
$query="INSERT into users_items(user_id,item_id,status) VALUES ('$user_id','$item_id','Added to Cart')";

$stmt= mysqli_query($con,$query);
header('location:products.php');
?>
