<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location: index2.php');
}
?>
<html>
    <head>
        <title>setting page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
        .row-style{
            margin:5%;
            }
          footer{
          padding: 10px 0;
         background-color: #101010;
         color:#9d9d9d;
         bottom: 0;
         width: 100%;
         position: absolute;
          }
            
        </style>
    </head>
    <body>
       <!--<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">LifeStyle Store</a>
                    
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart"></span> cart</a></li>
                        <li><a href="setting.html"><span class="glyphicon glyphicon-user"></span> Setting</a></li>
                        <li><a href="logout.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li> 
                    </ul>
                </div>
            </div>
        </nav>        -->
       <?php
       include 'includes/header.php';
       ?>
        <div class="container row-style">
            <div class="row">
                <div class="col-xs-5 col-xs-offset-3">
                    <form method="POST" action="setting_script.php">
                        <h3>change password</h3>
                        <input type="text" placeholder="old password" name="old_password" class="form-control"><br>
                        <input type="text" placeholder="new password" name="new_password" class="form-control"></br>
                        <input type="text" placeholder="retype new password" name="re_type_new_password" class="form-control"><br>
                        <input type="submit" value="change" name="change" class="btn btn-primary" >
                        
                    </form>
                </div>
            </div>          
       </div>
        <?php
        include 'includes/footer.php';
        ?>
    <!--    <footer>
            <div class="container">
                <p style="text-align:center">Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
            </div>
        </footer>-->
    </body>
</html>
