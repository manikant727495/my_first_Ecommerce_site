<?php
require 'includes/common.php';
if (isset($_SESSION['email']))
    { 
        header('location: product.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <style>
          .row-style{
            margin-top:4%;
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
       <!--     <nav class="navbar navbar-inverse navbar-fixed-top">
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
            <div class="container-fluid">
                <div class="row row-style">
                    <div class="col-xs-4 col-xs-offset-3" >
                        <div class="container-fluid">
                              <h1>SignUp</h1>
                                <div class="form-group">
                                    <form method="POST" action="signup_script.php" >
                                        <input type="text" placeholder="name" class="form-control" name="name"><br>
                                        <input type="email" placeholder="email" class="form-control" name="email" required="true" pattern="[a-z0-9._%+@-]+\.[a-z]{2,3}$"><br>
                                        <input type="password" placeholder="password" class="form-control" name="password" required="true" pattern=".{6,}"><br>
                                        <input type="number" placeholder="contact" class="form-control" name="contact"><br>
                                        <input type="text" placeholder="city" class="form-control" name="city"><br>
                                        <input type="text" placeholder="address" class="form-control" name="address"><br>
                                        <input type="submit" value="Submit" class="btn btn-primary">
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
<!--         <footer>
           <div class="container">
                <p style="text-align:center">Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
            </div>
        </footer>        -->
        <?php
               include 'includes/footer.php';
        ?>
        
    </body>
</html>
