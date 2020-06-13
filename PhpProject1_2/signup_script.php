<?php
require 'includes/common.php';
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];
/*$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3])$/";
if(!preg_match($regex_email,$email)){
echo 'Incorrect email';
}*/
$password = $_POST['password'];
if(strlen(($password))<6){
    echo 'password should have at least 6 characters';
}
$email= mysqli_real_escape_string($con,$email);
$password= mysqli_real_escape_string($con,$password);
$select_query="select email FROM users where  email='$email'";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$total_row_fetched= mysqli_num_rows($select_query_result);
if($total_row_fetched>0)
{
    echo 'this email already have account';
}
 else {
$user_registration_query = "insert into users(name,email,password,contact,city,address) values('$name','$email','$password','$contact','$city','$address')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
session_start();
$_SESSION['email']=$email;
$_SESSION['user_id']= mysqli_insert_id($con);
header('location: product.php');
 }
 
?>