<?php
    $active='Home';
    include("includes/header.php");
?>


    <!----------------------------------------------------
    3.BUILDING THE CAROUSEL (and space delimitation)
    ----------------------------------------------------->
    <div class="container" id="slider"> <!--container Start-->

        <div class="col-md-12"><!--col-md-12 Start-->

            <!-------------------------------------------------------------------
            3.1.Creating the carousel(Assign photo slots + assigning the photos) 
            -------------------------------------------------------------------->
            <div class="carousel slide" id="myCarousel" data-ride="carousel"><!--carousel slide Start-->

                <!----------------------------------------------------
                3.1.1.Alocate carousel slots
                ----------------------------------------------------->
                <ol class="carousel-indicators"><!--carousel-indicators Start-->
                    <li class="active" data-target="#myCarousel" data-slide-to= "0" ></li>
                    <li data-target="#myCarousel" data-slide-to= "1" ></li>
                    <li data-target="#myCarousel" data-slide-to= "2" ></li>
                    <li data-target="#myCarousel" data-slide-to= "3" ></li>
                </ol><!--carousel-indicators Finish-->

                <!----------------------------------------------------
                3.1.2.Assigning images
                ----------------------------------------------------->
                <div class="carousel-inner"><!--carousel-inner Start-->
                    <?php
                        $get_slides = "select * from slider LIMIT 0,1";

                        $run_slides = mysqli_query($con, $get_slides);

                        while($row_slides=mysqli_fetch_array($run_slides)){

                                $slide_name = $row_slides['slide_name'];
                                $slide_image = $row_slides['slide_image'];
                                
                                echo "
                                    <div class='item active'>
                                        <img src='admin_area/slides_images/$slide_image'>
                                    </div>                             
                                ";
                        }


                        $get_slides = "select * from slider LIMIT 1,3";

                        $run_slides = mysqli_query($con, $get_slides);

                        while($row_slides=mysqli_fetch_array($run_slides)){

                                $slide_name = $row_slides['slide_name'];
                                $slide_image = $row_slides['slide_image'];
                                
                                echo "
                                    <div class='item'>
                                        <img src='admin_area/slides_images/$slide_image'>
                                    </div>                             
                                ";
                        }



                    ?>

                </div><!--carousel-inner Finish-->

            </div><!--carousel slide Finish-->

            <!----------------------------------------------------
            3.2.These are the arrows for the carousel
            ----------------------------------------------------->
            <a href="#myCarousel" class="left carousel-control" data-slide="prev"> <!--left carousel-control Start-->
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
            </a> <!--left carousel-control Finish-->

            <a href="#myCarousel" class="right carousel-control" data-slide="next"> <!--right carousel-control Start-->
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
            </a> <!--right carousel-control Finish-->
                
        </div><!--col-md-12 Finish-->
    </div><!--container Finish-->

    <!----------------------------------------------------
    4.BUILDING THE PAGE CONTENT
    ----------------------------------------------------->
    <div id="advantages"><!--advantages Begin-->

        <!----------------------------------------------------
        4.1.Adding the tiles
        ----------------------------------------------------->
        <div class="container"><!--advantages Begin-->
            
            <div class="same-height-row"><!--same-height-row Begin-->

                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i> <!--from here you can change the pictogram for each item-->
                        </div>
                        <h3><a href="#">Best Offers</a></h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-tag"></i>
                        </div>
                        <h3><a href="#">Best prices</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
           
                
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                        <h3><a href="#">100% Originals</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>

                </div><!--advantages same-height-row Finish-->

        </div><!--advantages Finish-->
        
    </div><!--advantages Finish-->

    <!----------------------------------------------------
    5.ADDING PRODUCTS SECTION
    ----------------------------------------------------->
    <div id="hot">

        <div class="box">

            <div class="container">
                <div class="col-md-12">
                    <h2>
                        Our Latest Products
                    </h2>
                </div><!--col md 12-->
            </div><!--container-->

        </div>
    
    </div> <!--hot-->

    <!----------------------------------------------------
    6.PRODUCTS THEMSELVES
    ----------------------------------------------------->
    <div id="content" class="container">

        <div class="row">

        <?php
            getPro();
        ?>

        </div><!--row-->
    </div>

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