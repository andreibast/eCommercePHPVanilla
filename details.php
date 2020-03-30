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

                    <li>
                        <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>">   <?php echo $p_cat_title; ?>    </a>
                    </li>

                    <li> <?php echo $pro_title; ?> </li>

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
                                        <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="Product 1-a"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="Product 1-b"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="Product 1-c"></center>
                                    </div>
                                </div>

                                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>

                                <a href="#myCarousel" class="right carousel-control" data-slide="next">
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
                            <h1 class="text-center"> <?php echo $pro_title; ?>  </h1>

                            <?php add_cart(); ?>

                            <form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post">

                                <div class="form-group">
                                    <label for="" class="col-md-5 control-label">Product Quantity</label>
                                        <div class="col-md-7">
                                            <select name="product_qty" id="" class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select> 
                                        </div>
                                </div><!--form group-->

                                <div class="form-group">
                                    <label for="" class="col-md-5 control-label">Product Size</label>

                                    <div class="col-md-7">
                                        <select name="product_size" class="form-control" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('You must pick a size!')">
                                            <option disabled selected>Select size</option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                        </select> 

                                    </div>
                                </div><!--form group-->
                                
                                <p class="price">$ <?php echo $pro_price; ?> </p>

                                <p class="text-center buttons">
                                    <button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button>
                                </p>


                            </form>
                        </div>

                    <!----------------------------------------------------
                    4.1.2.Product related pictures
                    ----------------------------------------------------->
                    
                    <div class="row" id="thumbs">
                        <div class="col-xs-4">
                            <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb"> <!--mycarousel is here to quick select the picture from the carousel-->
                                <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="product 1" class="img-responsive">
                            </a>
                        </div>

                        <div class="col-xs-4">
                            <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                                <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="product 2" class="img-responsive">
                            </a>
                        </div>

                        <div class="col-xs-4">
                            <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                                <img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="product 4" class="img-responsive">
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

                <p> <?php echo $pro_desc; ?> </p>

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

                <?php
                 
                $get_products = "select * from products order by rand() DESC LIMIT 0,3"; //rand function is to generate random products that you might like
                $run_products = mysqli_query($con, $get_products);

                    while($row_products = mysqli_fetch_array($run_products)){
                        
                        $pro_id = $row_products['product_id'];
                        $pro_title = $row_products['product_title'];
                        $pro_img1 = $row_products['product_img1'];
                        $pro_price = $row_products['product_price'];

                        echo "
                            <div class='col-md-3 col-sm-6 center-responsive'>
                                <div class='product same-height'>
                                    <a href='details.php?pro_id=$pro_id'>
                                        <img class='img-responsive' src='admin_area/product_images/$pro_img1' >
                                    </a>
                        
                                    <div class='text'>
                                        <h3>
                                            <a href='details.php?pro_id=$pro_id'> $pro_title </a>
                                        </h3>
                                        <p class='price'> $ $pro_price </p>
                                    </div>
                        
                                </div>
                        </div>
                        ";
                    }
                ?>   

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