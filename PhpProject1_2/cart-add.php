<?php
require 'includes/common.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
$item_id = $_GET['id'];
$user_id=$_SESSION['user_id'];
$user_registration_query = "INSERT INTO users_items(user_id, items_id, status) VALUES('$user_id', '$item_id', 'Added to cart') ";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
header('location: product.php');
}

?>