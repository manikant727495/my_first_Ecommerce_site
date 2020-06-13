<?php
require 'includes/common.php';
if (!isset($_SESSION['email']))
    { 
        header('location: login.php');
    }
?>
<html>
    <head>
        <title>product page</title>
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
         position: relative;
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
                        <li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart"></span> cart</a></li>
                        <li><a href="setting.html"><span class="glyphicon glyphicon-user"></span> Setting</a></li>
                        <li><a href="logout.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li> 
                    </ul>
                </div>
            </div>
        </nav>-->
   <?php
   include 'includes/header.php';
   include 'includes/Check-if-added.php';
   ?>
        <div class="container">
            <div class="jumbotron">
                <h1> Welcome to our LifeStyle Store!</h1>
                <p>we have best camera and watches for you. No need to haunt around we have all in one place.</p>
            </div>
             
            <div class="row text-center">
                <div class="col-sm-2 col-md-3">
                    <div class="thumbnail">
                        <img  src="image/5.jpg" alt="camera" class="img-responsive">
                        <div class="caption">
                           <h3>canon Eos</h3>
                            <p>Price Rs:36000.00</p>
                         <!--   <div class="btn btn-primary btn-block">
                                Add to cart-->
                  <?php if (!isset($_SESSION['email']))
                      { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                      <?php
                      } 
                      else {
                          
                            if (check_if_added_to_cart(1)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                            else {
                      ?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                 }
                            }
                            ?>
                         
                            </div>
                        </div>
                    </div>
                <div class="col-sm-2 col-md-3">
                    <div class="thumbnail">
                        <img  src="image/2.jpg" alt="camera" class="img-responsive">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price Rs:40000.00</p>
                           <!-- <div class="btn btn-primary btn-block">
                                Add to cart
                            </div>-->   
                  <?php if (!isset($_SESSION['email']))
                      { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                      <?php
                      } 
                      else {
                          
                            if (check_if_added_to_cart(2)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                            else {
                      ?>
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                 }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-md-3">
                    <div class="thumbnail">
                        <img  src="image/3.jpg" alt="camera" class="img-responsive">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price Rs:50000.00</p>
             <!--               <div class="btn btn-primary btn-block">
                                Add to cart
                            </div>-->   
                  <?php if (!isset($_SESSION['email']))
                      { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                      <?php
                      } 
                      else {
                          
                            if (check_if_added_to_cart(3)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                            else {
                      ?>
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                 }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-md-3">
                    <div class="thumbnail">
                        <img  src="image/4.jpg" alt="camera" class="img-responsive">
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price Rs:80000.00</p>
  <!--                          <div class="btn btn-primary btn-block">
                                Add to cart
                            </div>-->
                  <?php if (!isset($_SESSION['email']))
                      { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                      <?php
                      } 
                      else {
                          
                            if (check_if_added_to_cart(4)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                            else {
                      ?>
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                 }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-2 col-md-3">
                    <div class="thumbnail">
                        <img  src="image/9.jpg" alt="camera" class="img-responsive">
                        <div class="caption">
                            <h3>Titan Model#301</h3>
                            <p>Price Rs:13000.00</p>
                           <!-- <div class="btn btn-primary btn-block">
                                Add to cart
                            </div>-->
                   <?php if (!isset($_SESSION['email']))
                      { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                      <?php
                      } 
                      else {
                          
                            if (check_if_added_to_cart(5)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                            else {
                      ?>
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                 }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-md-3">
                    <div class="thumbnail">
                        <img  src="image/10.jpg" alt="camera" class="img-responsive">
                        <div class="caption">
                            <h3>Titan Model#201</h3>
                            <p>Price Rs:3000.00</p>
 <!--                           <div class="btn btn-primary btn-block">
                                Add to cart
                            </div>-->
                   <?php if (!isset($_SESSION['email']))
                      { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                      <?php
                      } 
                      else {
                          
                            if (check_if_added_to_cart(6)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                            else {
                      ?>
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                 }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-md-3">
                    <div class="thumbnail">
                        <img  src="image/11.jpg" alt="camera" class="img-responsive">
                        <div class="caption">
                            <h3>HMT MILAN</h3>
                            <p>Price Rs:8000.00</p>
  <!--                          <div class="btn btn-primary btn-block">
                                Add to cart
                            </div>-->
                  <?php if (!isset($_SESSION['email']))
                      { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                      <?php
                      } 
                      else {
                          
                            if (check_if_added_to_cart(7)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                            else {
                      ?>
                                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                 }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-md-3">
                    <div class="thumbnail">
                        <img  src="image/12.jpg" alt="camera" class="img-responsive">
                        <div class="caption">
                            <h3>FABUR LUBA</h3>
                            <p>Price Rs:18000.00</p>
                 <!--           <div class="btn btn-primary btn-block">
                                Add to cart
                            </div>-->
                  <?php if (!isset($_SESSION['email']))
                      { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                      <?php
                      } 
                      else {
                          
                            if (check_if_added_to_cart(8)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                            else {
                      ?>
                                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                 }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-md-3">
                    <div class="thumbnail">
                        <img src="image/8.jpg" alt="camera" >
                        <div class="caption">
                            <h3>H&W</h3>
                            <p>Price Rs:800.00</p>
                <!--            <div class="btn btn-primary btn-block">
                                Add to cart
                            </div>-->
                  <?php if (!isset($_SESSION['email']))
                      { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                      <?php
                      } 
                      else {
                          
                            if (check_if_added_to_cart(9)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                            else {
                      ?>
                                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                 }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-2 col-md-3">
                    <div class="thumbnail">
                        <img  src="image/6.jpg" alt="camera" class="img-responsive">
                        <div class="caption">
                            <h3>Luis phil</h3>
                            <p>Price Rs:1000.00</p>
                       <!--     <div class="btn btn-primary btn-block">
                                Add to cart
                            </div>-->
                  <?php if (!isset($_SESSION['email']))
                      { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                      <?php
                      } 
                      else {
                          
                            if (check_if_added_to_cart(10)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                            else {
                      ?>
                                <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                 }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-md-3">
                    <div class="thumbnail">
                        <img  src="image/13.jpg" alt="camera" class="img-responsive">
                        <div class="caption">
                            <h3>John Jok</h3>
                            <p>Price Rs:1500.00</p>
 <!--                           <div class="btn btn-primary btn-block">
                                Add to cart
                            </div> -->
                   <?php if (!isset($_SESSION['email']))
                      { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                      <?php
                      } 
                      else {
                          
                            if (check_if_added_to_cart(11)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                            else {
                      ?>
                                <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                 }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-md-3">
                    <div class="thumbnail">
                        <img  src="image/14.jpg" alt="camera" class="img-responsive">
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>Price Rs:1300.00</p>
         <!--                   <div class="btn btn-primary btn-block">
                                Add to cart
                            </div>-->
                  <?php if (!isset($_SESSION['email']))
                      { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                      <?php
                      } 
                      else {
                          
                            if (check_if_added_to_cart(12)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                            else {
                      ?>
                                <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                 }
                            }
                            ?>
                        </div>
                    </div>
                </div>
   
        </div>
     </div>
    <!--<footer>
        <div class="container">
        <p style="text-align:center">Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
        </div>
    </footer>    -->
     <?php
     include 'includes/footer.php';
     ?>
    </body>
</html>
