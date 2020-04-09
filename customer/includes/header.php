<?php
    session_start();
    include("includes/db.php");
    include("functions/functions.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- adaptive meta for mobile phones -->
    
    <title>M-Dev Store</title>

    <!----------------------------------------------------
    0.ADDING STYLESHEETS
    ----------------------------------------------------->
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

    <!----------------------------------------------------
    1.BUILDING TOP BAR
    ----------------------------------------------------->
    <div id="top"><!-- Top Begin -->
       
        <div class="container"><!-- container Begin -->
           
            <!----------------------------------------------------
            1.1.Top bar: LEFT side
            ----------------------------------------------------->
            <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
                <a href="#" class="btn btn-success btn-sm">
                <?php
                if(isset($_SESSION['customer_email'])){
                    echo "Welcome: Guest";
                }else{
                    echo "Welcome: " . $_SESSION['customer_email'] . "";
                }
                ?>
                
                </a>
                <a href="checkout.php"><?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?>  </a>
            </div><!-- col-md-6 offer Finish -->
           
            <!----------------------------------------------------
            1.2.Top bar: RIGHT side
            ----------------------------------------------------->
            <div class="col-md-6"><!-- col-md-6 Begin -->
                <ul class="menu"><!-- cmenu Begin -->
                    <li>
                        <a href="../customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="checkout.php">My Account</a>
                    </li>
                    <li>
                        <a href="../cart.php">Go To Cart</a>
                    </li>
                    <li>
                        <a href="../checkout.php">
                        
                            <?php

                                if(isset($_SESSION['customer_email'])){
                                    echo "<a href='checkout.php'> Login </a>";
                                }else{
                                    echo "<a href='logout.php'> Log Out </a>";
                                }
                            
                            ?>
                        
                        
                        </a>
                    </li>
                </ul><!-- menu Finish -->
            </div><!-- col-md-6 Finish -->
           
        </div><!-- container Finish -->
       
    </div><!-- Top Finish -->

    <!----------------------------------------------------
    2.BUILDING NAV BAR (below top bar)
    ----------------------------------------------------->   
    <div id="navbar" class="navbar navbar-default"> <!--navbar navbar-default Begin-->
                
        <div class="container"><!--container Begin-->

            <!---------------------------------------------------------------------
            2.1.Creating nav-bar main struture
            ----------------------------------------------------------------------->  
            <div class="navbar-header"> <!--container header Begin-->
                <!---------------------------------------------------------------------
                2.1.1.Adding the website logo(desktop and mobile) in the navigation bar
                ----------------------------------------------------------------------->  
                <a href="../index.php" class="navbar-brand home">
                    <img src="images/ecom-store-logo.png" alt="M-dev-Store Logo" class ="hidden-xs">   <!--hidden-xs is used to hide the element when the viewport is at a given breakpoint or wider. When the viewport reaches at the XS size"-->
                    <img src="images/ecom-store-logo-mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs"><!-- When the user gets to the smaller-than-desktop viewport, this picture will activate-->
                </a>
                        
                <!-------------------------------------------------------------------------------------------
                2.1.2.Adding the text-navigation & search button (for mobile/can be seen in reduced viewport)
                -------------------------------------------------------------------------------------------->           
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-align-justify"></i>
                </button>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-search"></i>
                </button>
            </div> <!--container header finish-->

            <!-------------------------------------------------------------------------------------
            2.2.Nav bar for mobile / for reduced viewport width (navigation transforms into a list) 
            -------------------------------------------------------------------------------------->
            <div class="navbar-collapse collapse" id="navigation"><!--navbar-collapse collapse Begin-->
                
                <!-------------------------------------------------------------------------------------------
                2.2.1.Creating the list contents for mobile nav-bar
                -------------------------------------------------------------------------------------------->              
                <div class="padding-nav"><!--padding nav Begin-->
                    <ul class="nav navbar-nav left"><!--nav navbar-nav left Begin-->

                    
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li >
                            <a href="../shop.php">Shop</a>
                        </li>
                        <li class="active"><!------class set to active here--------->
                            <a href="my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="../cart.php">Cart</a>
                        </li>
                        <li>
                            <a href="../contact.php">Contact Us</a>
                        </li>
                    </ul><!--nav navbar-nav left Finish-->
                </div><!--padding nav Finish-->


                <!-------------------------------------------------------------------------------------------
                2.2.2.Attaching functionality for the two buttons created???
                -------------------------------------------------------------------------------------------->   
                <a href="cart.php" class="btn navbar-btn btn-primary right"> <!--btn navbar-btn btn-primary right Begin-->
                    <i class="fa fa-shopping-cart"></i>
                    <span><?php items(); ?> Items In Your Cart </span>
                </a><!--btn navbar-btn btn-primary right Finish-->
                
                <div class="navbar-collapse collapse right"> <!--navbar-collapse collapse right Begin-->
                    <button class="btn btn-primary navbar-btn" type ="button" data-toggle="collapse" data-target ="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div> <!--navbar-collapse collapse right Finish-->

                <!-------------------------------------------------------------------------------------------
                2.2.3.Add to magnify button functionality of a textbox and a special button next to it to begin the search
                -------------------------------------------------------------------------------------------->   
                <div class="collapse clearfix" id="search"><!--collapse clearfix Begin-->                             
                    <form method="get" action="results.php" class="navbar-form"><!--navbar-form Begin-->
                        <div class="input-group"><!--input-group Begin-->            
                            <input type="text" class="form-control" placeholder="Search" name="user_query" required><!--required is for search bar some text to be entered--> 
                            <span class="input-group-btn"><!-- input-group-btn Begin -->         
                                <button type="submit" name="search" value ="Search" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span><!-- input-group-btn Finish -->
                        </div><!--input-group Finish-->  
                    </form><!--navbar-form Finish-->       
                </div><!--collapse clearfix finish-->


            </div><!--navbar-collapse collapse Finish-->
        </div><!--container finish-->
    </div> <!-- navbar navbar-default Finish-->