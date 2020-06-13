<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location: index2.php');
}
$old_password=$_POST['old_password'];
$new_password=$_POST['new_password'];
$re_type_new_password=$_POST['re_type_new_password'];
$user_id = $_SESSION['user_id'];
if($new_password != $re_type_new_password)
{
       header('location: setting.php?error=The two passwords don\'t match');
}
else{
    $select_query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
    $select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
    $row= mysqli_fetch_array($select_query_result);
    if($row['password']==$old_password)
    {
       $update_query="UPDATE  users SET password = '" . $new_password . "' WHERE email = '" . $_SESSION['email'] . "'";
        $update_query_result= mysqli_query($con, $update_query) or die(mysqli_error($con));
       header('location: setting.php?error=Password Updated sucessfully');
    }
 else {
               header('location: setting.php?error=Wrong Old Password');
         
    }
    
            
}

?>