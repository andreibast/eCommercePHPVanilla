<?php
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
                        Shop
                    </li>
                </ul><!--breadcrumb-->
            </div><!--col md 12-->




   <!----------------------------------------------------
    4.SECTION CONTENTS
    ----------------------------------------------------->   
            <div class="col-md-3">
                <?php
                    include("includes/sidebar.php");
                ?>
            </div>

            <!----------------------------------------------------
            4.1.Section selection & similar products
            ----------------------------------------------------->   

            <div class="col-md-9">
                <div id="productMain" class="row">

                    <!----------------------------------------------------
                    4.1.1.The image carousel
                    ----------------------------------------------------->  
                    <div class="col-sm-6">
                        <div id="mainImage">
                            <div id="myCarousel" class="carousel slide">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>

                                <div class="carousel-inner">
                                    <div class="item active">
                                        <center><img class="img-responsive" src="admin_area/product_images/Product-3a.jpg" alt="Product 3-a"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area/product_images/Product-3b.jpg" alt="Product 3-b"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area/product_images/Product-3c.jpg" alt="Product 3-c"></center>
                                    </div>
                                </div>

                                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>

                                <a href="#myCarousel" class="right carousel-control" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Forward</span>
                                </a>

                            </div><!--carousel-->
                        </div><!--image-->
                    </div><!--col-sm-6-->

                    <!----------------------------------------------------
                    4.1.1.Product selection
                    ----------------------------------------------------->

                    <div class="col-sm-6">
                        <div class="box">
                            <h1 class="text-center">M-Dev Polo Shirt Men</h1>

                            <form action="details.php" class="form-horizontal" method="post">

                                <div class="form-group">
                                    <label for="" class="col-md-5 control-label">Product Quantity</label>
                                    <div class="col-md-7">
                                        <select name="" id="" class="form-control">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                            <option value="">5</option>
                                        </select> 
                                    </div>
                                </div><!--form group-->

                                <div class="form-group">
                                    <label for="" class="col-md-5 control-label">Product Size</label>
                                    <div class="col-md-7">
                                        <select name="" id="" class="form-control">
                                            <option value="">Select size</option>
                                            <option value="">Small</option>
                                            <option value="">Medium</option>
                                            <option value="">Large</option>
                                        </select> 
                                    </div>
                                </div><!--form group-->
                                
                                <p class="price">$50</p>
                                <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>


                            </form>
                        </div>

                    <!----------------------------------------------------
                    4.1.2.Product related pictures
                    ----------------------------------------------------->
                    
                    <div class="row" id="thumbs">
                        <div class="col-xs-4">
                            <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb"> <!--mycarousel is here to quick select the picture from the carousel-->
                                <img src="admin_area/product_images/product-3a.jpg" alt="product 3" class="img-responsive">
                            </a>
                        </div>

                        <div class="col-xs-4">
                            <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                                <img src="admin_area/product_images/product-3b.jpg" alt="product 3" class="img-responsive">
                            </a>
                        </div>

                        <div class="col-xs-4">
                            <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                                <img src="admin_area/product_images/product-3c.jpg" alt="product 3" class="img-responsive">
                            </a>
                        </div>

                    </div><!--row-->

                    </div><!--col-6-->

                    


                </div>


            <!----------------------------------------------------
            4.2.Product details
            ----------------------------------------------------->   
            <div class="box" id="details">
                <h4>Product Details:</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, velit sunt culpa adipisci explicabo ab hic distinctio molestiae similique quos rerum! Blanditiis delectus necessitatibus odit quae dolorum officia sapiente culpa!</p>

                <h4>Available Sizes:</h4>

                <ul>
                    <li>Small</li>
                    <li>Medium</li>
                    <li>Large</li>
                </ul>
                <hr>
            </div>

            <!----------------------------------------------------
            4.3.What-you-would-like section
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
        </div>
    </div>

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