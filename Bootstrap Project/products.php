   <?php
     
     
require 'includes/common.php';
include 'includes/CheckIfAdded.php';


     ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="StyleCss.css">
    <title>Products</title>
    <style>
        footer{
            margin-top:100%;
        }
        .rr{
            background-color: red;
        }
       
    </style>
  </head> 
  <body>
     <?php
     include 'includes/header.php';
     



     ?>
      <br><br><br><br>
      <div class="container">
          
      <div class="jumbotron ">
          <center>
          <h1> Welcome to our Lifestyle Store! </h1>
          <p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place. </p>
          </center>
      </div>
          <div class="row text-center">
            <div  class="col-md-3 col-sm-6">
                <div class="thumbnail">
                <img src="img/camera.jpg" class="img-responsive" alt="camera">
                <div class="caption">
                    <h2>Camera</h2>
                    <p>This DSLR camera</p>
                
                
                
                
                
                    <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if(CheckIfAdded(1)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="add_to_cart.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                
                
                
                </div>
                
                
                </div>
                
            </div>
        <!--    FIRST ITEM -->
          <div  class="col-md-3 col-sm-6">
                <div class="thumbnail">
                <img src="img/camera.jpg" class="img-responsive" alt="camera">
                <div class="caption">
                    <h2>Camera</h2>
                    <p>This DSLR camera</p>
                
                
                
                
                
                    <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if(CheckIfAdded(2)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="add_to_cart.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                
                
                
                </div>
                
                
                </div>
                
            </div>
        
        
        
        <!-- SECOND ITEM    -->
        
           </div>
      </div> 
      <?php
        include 'includes/footer.php';
      ?>
  </body>
</html>