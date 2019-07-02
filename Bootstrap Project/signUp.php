<?php
require 'includes/common.php';
?>﻿
<!DOCTYPE html>
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
      
      .ff{
            margin-top: 60px;
          
        }
        footer{
            margin-top:565px;
            max-height: 50px;
        }
    </style>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
    
        <div class="col-xs-6 col-xs-offset-4 ff">
            
                    <h2 class="text-danger">Sign Up</h2>
                    <form method="POST" action="user_registeration.php">
                        
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" name="Name">
                       
                        
                        
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email">
                        
                       
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password">
                       
                        
                            <label for="contact">Contact</label>
                            <input type="number" class="form-control" name="contact">
                        
                        
                            <label for="city">City</label>
                            <input type="text" class="form-control" name="city">
                        
                       
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address">
                            <br>
                        <button class="btn btn-success btn-block">SIGN UP</button>
                        
                    </form>
                </div>
                
          
        <br>
        <?php
        include 'includes/footer.php';
        ?>
    
    </body>
</html>
