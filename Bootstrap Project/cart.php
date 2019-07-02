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
      .remove{
    color:#0000ff;
}
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
                    <p class="text-danger">My Cart</p>
                    <div class="table-responsive">
                    <table class="table table-hover">
                        
                     <?php   
                        $sum = 0;
                        $user_id = $_SESSION['id'];
                        $cart_item_fetch = "SELECT items.id, items.name AS Name, items.price AS Price FROM items INNER JOIN users_item ON items.id = users_item.item_id WHERE users_item.user_id = $user_id and status = 'Added to cart'";  
                        $Rez = mysqli_query($con, $cart_item_fetch) or die(mysqli_error($con));
                        
                        if (mysqli_num_rows($Rez) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($Rez)) {
                                    $sum+= $row["Price"];
                                    $id="";
                                    $id .= $row["id"] . ",";
                                    echo "<tr>
                                              <td>" . "#" . $row["id"] . "</td>
                                              <td>" . $row["Name"] . "</td>
                                              <td>Rs " . $row["Price"] . "</td>
                                              <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> X </a></td>
                                          </tr>";
                                }
                               $id = rtrim($id, ",");
                                echo "<tr>
                                          <td></td>
                                          <td>Total</td>
                                          <td>Rs " . $sum . "</td>
                                          <td><a href='success.php?items_id=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
                                          </tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<center><h2>Add items to the cart first!</h2></center>";
                        }
                        ?>
                        <?php
                        ?>
                     
                   
                    </table>
                    </div>
                </div>
                <div class="panel-footer">
                    <p class="text-danger"></p>
                </div>
            </div>
            
        </div>
        
        <br>
        <?php
            include 'includes/footer.php';
        ?>
    
    </body>
</html>