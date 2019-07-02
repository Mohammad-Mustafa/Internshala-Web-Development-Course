<?php

require 'includes/common.php';  // SESSION AND DB CONNECTION

if(isset($_GET['id']))         // CHECK IF SESSION IS SET
{
    $item_id=$_GET['id'];      // GET ITEM_ID FROM URL 
    
    $user_id=$_SESSION['id'];  // RETRIVE USER ID FROM SESSION
    
    $DELETE_QUERY = "DELETE FROM users_item WHERE user_id= '$user_id' and item_id = '$item_id'";    // DELETION QUERY
    
    mysqli_query($con, $DELETE_QUERY) or die(mysqli_error($con));   // QUERY FIRE
    
    header('location: cart.php');     // REDIRECT TO CART.PHP PAGE
    
   
}
