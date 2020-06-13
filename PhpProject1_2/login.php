<?php
require 'includes/common.php';
if (isset($_SESSION['email']))
    { 
        header('location: product.php');
    } 
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <style>
              .row-style{
                  margin-top: 5%; 
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
                        <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
           </nav>-->
        <?php
            include 'includes/header.php';
        ?>
        <div class="container">
            <div class="row row-style">
                <div class="col-xs-5" >
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        <h3> Login</h3>
                        </div>
                        <div class="pannel-body">
                            <div class="container-fluid">
                                <p class="text-warning">
                                    Login to make purchase;
                                </p>
                                <div class="form-group">
                                <form method="POST" action="login_submit.php">
                                    <input type="email" placeholder="enter you email id" class="form-control" name="email"><br><br>
                                    <input type="password" placeholder="password" class="form-control" name="password"><br><br>
                                    <input type="submit" value="Login" class="btn btn-primary">
                                </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <p>Do not have account?<a href="signup.php">Register</a></p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<footer>
            <div class="container">
                <p style="text-align:center">Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
            </div>
        </footer>-->
        <?php
        include 'includes/footer.php';
        
        ?>
        
     </body>
</html>
