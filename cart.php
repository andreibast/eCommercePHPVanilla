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
                <a href="#" class="btn btn-success btn-sm">Welcome</a>
                <a href="checkout.php">4 Items In Your Cart | Total Price: $300 </a>
            </div><!-- col-md-6 offer Finish -->
           
            <!----------------------------------------------------
            1.2.Top bar: RIGHT side
            ----------------------------------------------------->
            <div class="col-md-6"><!-- col-md-6 Begin -->
                <ul class="menu"><!-- cmenu Begin -->
                    <li>
                        <a href="customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="customer/my_account.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Go To Cart</a>
                    </li>
                    <li>
                        <a href="checkout.php">Login</a>
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
                <a href="index.php" class="navbar-brand home">
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
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="customer/my_account.php">My Account</a>
                        </li><!------class set to active here--------->
                        <li class="active">
                            <a href="cart.php">Cart</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
                    </ul><!--nav navbar-nav left Finish-->
                </div><!--padding nav Finish-->


                <!-------------------------------------------------------------------------------------------
                2.2.2.Attaching functionality for the two buttons created???
                -------------------------------------------------------------------------------------------->   
                <a href="cart.php" class="btn navbar-btn btn-primary right"> <!--btn navbar-btn btn-primary right Begin-->
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 Items in your cart</span>
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

   <!----------------------------------------------------
    3.QUICK NAVIGATION LINKS
    ----------------------------------------------------->   
    <div id="content">
        <div class="container">

            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Cart
                    </li>
                </ul><!--breadcrumb-->
            </div><!--col md 12-->

               <!----------------------------------------------------
                3.1.QUICK NAVIGATION LINKS
                ----------------------------------------------------->

                <div id="cart" class="col-md-9">
                    <div class="box">
                        <form action="cart.php" method="post" enctype="multipart/form-data">
                            <h1>Shopping Cart</h1>
                            <p class="text-muted">You currently have 3 item(s) in your cart</p>

                            <div class="table-responsive">
                                <table class="table">
                                    <thread>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Size</th>
                                            <th colspan="1">Delete</th>
                                            <th colspan="2">Sub-Total</th>
                                        </tr>
                                    </thread>

                                    <!-------------------
                                    Product1 in list
                                    ----------------------->
                                    <tbody>
                                        <tr>

                                        <td>
                                            <img  class="img-responsive"src="admin_area/product_images/Product-3a.jpg" alt="Product 3a">
                                          
                                        </td>
                                        <td>
                                            <a href="#">M-Dev Polo Shirt Men</a>
                                        </td>

                                        <td>
                                            2
                                        </td>
                                        <td>
                                            $50
                                        </td>
                                        <td>
                                            Large
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>
                                            $100
                                        </td>

                                        </tr>

                                    </tbody>

                                    <!-------------------
                                    Product2 in list
                                    ----------------------->
                                    <tbody>
                                        <tr>

                                        <td>
                                            <img  class="img-responsive"src="admin_area/product_images/Product-5a.jpg" alt="Product 5a">
                                          
                                        </td>
                                        <td>
                                            <a href="#">M-Dev Polo Shirt Men</a>
                                        </td>

                                        <td>
                                            2
                                        </td>
                                        <td>
                                            $50
                                        </td>
                                        <td>
                                            Large
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>
                                            $100
                                        </td>

                                        </tr>

                                    </tbody>

                                    <!-------------------
                                    Product3 in list
                                    ----------------------->
                                    <tbody>
                                        <tr>

                                        <td>
                                            <img  class="img-responsive"src="admin_area/product_images/Product-4a.jpg" alt="Product 4a">
                                          
                                        </td>
                                        <td>
                                            <a href="#">M-Dev Polo Shirt Men</a>
                                        </td>

                                        <td>
                                            2
                                        </td>
                                        <td>
                                            $50
                                        </td>
                                        <td>
                                            Large
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>
                                            $100
                                        </td>

                                        </tr>

                                    </tbody>

                                    
                                    <!-------------------
                                    Product3 in list
                                    ----------------------->
                                    <tfoot>
                                        <tr>
                                            <th>Total</th>
                                            <th>$100</th>
                                        </tr>
                                    </tfoot>


                                </table>
                            </div>                        
                        
                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="index.php" class="btn btn-default">
                                        <i class="fa fa-chevron-left"> Continue Shopping</i>
                                    </a>
                                </div>

                                <div class="pull-right">
                                    <button type= "submit" name ="update" value="Update Cart"  class="btn btn-default">
                                        <i class="fa fa-refresh"> Update Shopping</i>
                                    </button>
                                    <a href="checkout.php" class="btn btn-primary">
                                        Proceed Checkout <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>



                        </form>
                    </div>

                <!----------------------------------------------------
                3.2.What-you-would-like section
                ----------------------------------------------------->  
            <div id="row same-height-row">

                <div class="col-md-3 col-sm-6">
                    <div class="box same-height headline">
                        <h3 class="text-center">Products you may like</h3>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 center-responsive">
                    <div class="product same-height">
                        <a href="">
                            <img class= "img-responsive" src="admin_area/product_images/Product-6a.jpg" alt="Product 6">
                        </a>

                        <div class="text">
                            <h3><a href="details.php">M-Dev Tank Top Women</a></h3>
                            <p class="price">$40</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 center-responsive">
                    <div class="product same-height">
                        <a href="">
                            <img class= "img-responsive" src="admin_area/product_images/Product-5a.jpg" alt="Product 5">
                        </a>

                        <div class="text">
                            <h3><a href="details.php">M-Dev Tank Top Women</a></h3>
                            <p class="price">$40</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 center-responsive">
                    <div class="product same-height">
                        <a href="">
                            <img class= "img-responsive" src="admin_area/product_images/Product-4a.jpg" alt="Product 4">
                        </a>

                        <div class="text">
                            <h3><a href="details.php">M-Dev Tank Top Women</a></h3>
                            <p class="price">$40</p>
                        </div>
                    </div>
                </div>

            </div>

                </div>   

                <!----------------------------------------------------
                3.3.Right-side panel
                ----------------------------------------------------->  

                <div class="col-md-3">
                    <div id="order-summary" class="box">
                        <div class="box-header">
                            <h3>Order Summary</h3>
                        </div>
                        <p class="text-muted">
                            Shipping and additional costs are calculated based on value that you have entered
                        </p>

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td>Order Sub-Total</td>
                                    <th> $200 </th>
                                </tr>
                                <tr>
                                    <td>Shipping and Handling</td>
                                    <td> $0 </td>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <th> $0 </th>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <th> $200 </th>
                                </tr>

                            </table>
                        </div>



                    </div>
                </div>


        </div><!--container-->

    </div><!--content-->


    <!-------------------
    COPY FROM INDEX.PHP
    ----------------------->
    <?php
        include("includes/footer.php");
    ?>


    <!----------------------------------------------------
    -----------ADDING JQUERY AND BOOTSTRAP----------------
    ----------------------------------------------------->
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
<!----------------------------------------------------
-----------------------END----------------------------
----------------------------------------------------->
</body>
</html>