<?php
session_start();
   if (isset($_SESSION['id'])) {
  echo "Hello ".$_SESSION['email'].$_SESSION['id'];
} else {
  echo "Hello Guest";
} 
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
    <title>E-Commerce</title>
    
  </head> 
  <body>
	<?php
        include 'includes/header.php';
     
        ?>
      
      <br><br>
      <div id="banner_img">
	  
          <div class="container">
              <center>
              <div id="banner_content">
                  <a href="products.php" class ="btn btn-danger btn-lg active">Shop Now</a>
              </div>
              </center>   
          </div>
      </div>
     <?php
		include 'includes/footer.php';
	?>
      
  </body>
</html>