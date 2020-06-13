<?php
require 'includes/common.php';
$email=$_POST['email'];
$password=$_POST['password'];
$select_query="select id , email, password FROM users where  email='$email' and password='$password'";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$row= mysqli_fetch_array($select_query_result);
$total_row_fetched= mysqli_num_rows($select_query_result);
if($total_row_fetched==0)
{
    echo 'please enter valid email id and password combination';
}
 else {

    session_start();
   $_SESSION ['email']=$email;
    $_SESSION ['user_id']=$row['id'];
    header('location: product.php');
}




?>