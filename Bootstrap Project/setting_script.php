<?php
    require 'includes/common.php';
    
    $old_password = $_POST['old'];
    
    $new_password=$_POST['new'];
    
    $renew_password=$_POST['renew'];
    
    $old_password_check = "SELECT password,id FROM signup WHERE password=$old_password";
    // QUERY FIRE
    $result= mysqli_query($con, $old_password_check);
    
     $a=mysqli_fetch_array($result);
     
     if ($a[0] != $old_password)
     {
         header('location: setting.php?password_mismatch=PASSWORD MISMATCHED');
         exit();
     }
    
    
    
    if (strlen($new_password) != strlen($renew_password))
    {
        
        header('location: setting.php?error_msg=Enter Same digit of Password as above');
        exit();
    }
    
     //NOW UPDATE QUERY IF ABOVE CONDITION IS CHECKED
    
    $update_query= "UPDATE signup SET password=$new_password WHERE id=$a[1] ";
     
    $update_query_Fire= mysqli_query($con, $update_query);
    header('location: setting.php?Success= Password Changed');
?>
