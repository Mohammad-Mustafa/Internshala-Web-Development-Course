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
        <title>Password Setting</title>
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
            margin-top:545px;
            max-height: 50px;
        }
    </style>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
    
        <div class="col-xs-4 col-xs-offset-4 ff">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    
                </div>
                <div class="panel-body">
                    <div> <?php if(isset($_GET['Success'])){            echo $_GET['Success'];} ?></div>
                    <p class="text-danger">Change Password</p>
                    <form action="setting_script.php" method="POST">
                        <div class="form-group">
                            <label for="old">Old Password</label>
                            <input type="password" class="form-control" name="old">
                            <div><?php if(isset($_GET['password_mismatch'])){           echo $_GET['password_mismatch'];}           ?></div>
                        </div>
                        <div class="form-group">
                            <label for="new">New Password</label>
                            <input type="password" class="form-control" name="new">
                            
                        </div>
                        <div class="form-group">
                            <label for="renew">Re-Type New Password</label>
                            <input type="password" class="form-control" name="renew">
                            <!-- FIRST GET THE DATA THEN ECHO ERROR IF ANY -->
                            <?php if(isset($_GET['error_msg'])){echo $_GET['error_msg'];} ?></div>
                        </div>
                        <button class="btn btn-success btn-block">Change Password</button>
                        
                    </form>
                </div>
                <div class="panel-footer">
                   
                </div>
            </div>
            
        </div>
        
        <br>
        <?php
        include 'includes/footer.php';
        ?>
    
    </body>
</html>
