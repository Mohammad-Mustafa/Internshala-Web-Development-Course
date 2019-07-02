<?php
 require 'includes/common.php';
 
 
 $name=$_POST['Name'];
 $email=$_POST['email'];
  $password=$_POST['password'];
  $contact=$_POST['contact'];
  $city=$_POST['city'];
  $address=$_POST['address'];
   
//  SELECTING id TO CHECK EMAIL EXIST OR NOT. 
  
  
$select_query="SELECT id FROM signup WHERE email='$email'";  
 
// FIRE QUERY

$result= mysqli_query($con, $select_query) or die(mysqli_error($con));
       
 // CHECK DUPLICATE EMAIL
if(mysqli_num_rows($result) > 0)
{
        echo "Email Already Exist";
  
         header('location: login.php');
}
else
{
    // NOW INSERT DATA INTO DB
    $insert_query="INSERT INTO signup (first_name, email, password, address, contact, city) VALUES ('$name', '$email', '$password', '$address', '$contact', '$city')";
    
   mysqli_query($con,$insert_query) or die(mysqli_error($con));
    // INITIALIZE SESSION VARIABLE
    
    $_SESSION['id']=mysqli_insert_id($con);
    $_SESSION['email']=$email;
    header('location:products.php');
}



?>
