<?php
 require 'includes/common.php';

 

 $user_id = $_SESSION['id'];
 $item_id = $_GET['items_id'];
 
        $update_query = "UPDATE users_item SET status='Confirm' WHERE  user_id='$user_id' and item_id='$item_id' and status='Added to cart'";
        mysqli_query($con, $update_query) or die(mysqli_error($con));
        
 
?>
﻿<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LogIn</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="StyleCss.css">
    <style>
        footer{
            margin-top:565px;
            max-height: 50px;
        }
        .cc{
            margin-top: 10%;
        }
    </style>
    </head>
    <body>
         <?php
         include 'includes/header.php';
         ?>
    
        <div class="container cc">
        <div class="jumbotron"> <p>Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item.</p></div>
        </div>
        
        <?php
         include 'includes/footer.php';
        ?>
    </body>
    
</html>
