<?php
require 'includes/common.php';
$email0=$_POST['email'];
$password0=$_POST['password'];
$email= mysqli_real_escape_string($con,$email0);
$password=mysqli_real_escape_string($con,$password0);
$select_query="SELECT id,email FROM signup WHERE email='$email' AND password='$password'";
$result = mysqli_query($con,$select_query) or die(mysqli_error($con));
 if (mysqli_num_rows($result) == 0)
 {
     header('location: login.php?message=Sign Up Buddy');
     exit();
 }
$row_fetched= mysqli_fetch_array($result);
//echo $row_fetched['id'];
//echo $row_fetched['email'];
$_SESSION['email']=$row_fetched['email'];
$_SESSION['id']= $row_fetched['id'];


header('location: products.php');

?>


        
        
