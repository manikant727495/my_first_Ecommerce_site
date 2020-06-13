<?php
$con= mysqli_connect("localhost","root", "", "ecommerce")or die(mysqli_error($con));
$email=$_POST['email'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$phone = $_POST['phone'];
$user_registration_query = "insert into users(id,email_id, first_name, last_name,phone) values('6','$email','$first_name','$last_name','$phone')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
?>

