<?php

 function CheckIfAdded($item_id)
 {
     
     require 'includes/common.php';       // connection started and session started
     
     
    $user_id=$_SESSION['id'];    // user_id taken from session
    
    // QUERY TO FETCH DATA TO IF ITEM AVAILABLE IN USER'S CART.
    
    $SELECT_QUERY="SELECT * FROM users_item WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
    
    // QUERY FIRE or GIVE ERROR
    
    $RESULT = mysqli_query($con, $SELECT_QUERY) or mysqli_error($con);
    
    // CHECK IF  ROW EXIST IN TABLE USERS_ITEM BY MYSQLI_NUM_ROW
    
    
   if(mysqli_num_rows($RESULT)>=1)
     return 1;
   else
     return 0;
    
    
 }
 ?>
