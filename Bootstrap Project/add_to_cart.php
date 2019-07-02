<?php

require 'includes/common.php';   // DB CONNECTION CONNTED AND SESSION STARTED



    if(isset($_GET['id']))  // CHECK IF ITEM ID IS SET
    {
        $item_id = $_GET['id'];  // GET THE ITEM ID FROM PRODUCTS.PHP PAGE
        
        $user_id = $_SESSION['id'];   // USER ID RETRIEVED FROM SESSION
        
        $QUERY_TO_ADD = "INSERT into users_item(item_id, user_id, status) Values('$item_id', '$user_id', 'Added to cart')";  // QUERY TO ADD ITEM TO CART
        
        $RES = mysqli_query($con, $QUERY_TO_ADD);   // QUERY FIRE
        
        header('location: products.php');          // REDIRECT TO PRODUCTS.PHP
        
        
        
    }

