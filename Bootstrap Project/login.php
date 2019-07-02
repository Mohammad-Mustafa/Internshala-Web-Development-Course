<?php
require 'includes/common.php';
?>
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
            margin-top: 100px;
            border-bottom: 1px solid olivedrab;
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
            <div class="panel panel-primary">
                <div class="panel-heading">
                    
                </div>
                <div class="panel-body">
                    <p class="text-danger">LogIn to make a Purchase</p>
                    <form action="login_submit.php " method="POST">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password">
                            <div> <h4 style="color:gold"> <?php  if(isset($_GET['message']))echo $_GET['message']  ?></h4></div>  
                        </div>
                        <button class="btn btn-success btn-block">LogIn</button>
                        
                    </form>
                </div>
                <div class="panel-footer">
                    <p class="text-danger">Don't have an account? <a href="signup.php">Register</a></p>
                </div>
            </div>
            
        </div>
        
        <br>
        
        <?php
       include 'includes/footer.php';
        ?>
    
    </body>
</html>
