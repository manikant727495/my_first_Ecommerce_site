<?php
require 'includes/common.php';
if (isset($_SESSION['email']))
    { 
        header('location: product.php');
    } 
?>
<html>
    <head>
        <title>Main page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
          <style>
              #banner_image{
        padding-top: 75px;
        padding-bottom: 50px;
        text-align: center;
        color: #f8f8f8;
        background: url(image/intro-bg_1.jpg) no-repeat center center;
        background-size: cover;
    }
    #banner_content{
        position: relative;
        margin-left: 15%;
        padding-top: 6%;    
        padding-bottom: 6%;
        margin-top: 12%;
        margin-bottom: 12%;
        background-color: rgba(0, 0, 0, 0.7);
        max-width: 660px;
    }
    footer{
             padding: 10px 0;
             background-color: #101010;
            color:#9d9d9d;
            bottom: 0;
            width: 100%;
    }

          </style>
    </head>
    <body>
    <!--    <nav class="navbar navbar-inverse navbar-fixed-top">
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
        <div id="banner_image">
            <div class="container">
                <div id="banner_content">
                        <h1>We sell lifestyle</h1>
                        <p>Flat 40% OFF on premium brands</p>
                    <a href="product.php" class="btn btn-danger btn-lg-active">shop Now</a>
                </div>
            </div>
        </div>
        <?PHP
        include 'includes/footer.php';
        ?>
       <!-- <footer>
            <div class="container">
                <p style="text-align:center">Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
            </div>
        </footer-->
                          
    </body>
</html>

