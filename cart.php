<?php
    $active='Cart';
    include("includes/header.php");
?>

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