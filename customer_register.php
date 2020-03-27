<?php
    $active='MyAccount';
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
                        Register
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

            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <center>
                            <h2> Register a new account </h2>
                        </center>

                        <form action="customer_register.php" class="post" enctype="multipart/form-data"><!--here are some custom settings-->
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="form-control" name="c_name" required>
                            </div>
                            <div class="form-group">
                                <label>Your Email</label>
                                <input type="text" class="form-control" name="c_name" required>
                            </div>
                            <div class="form-group">
                                <label>Your Country</label>
                                <input type="text" class="form-control" name="c_country" required>
                            </div>
                            <div class="form-group">
                                <label>Your City</label>
                                <input type="text" class="form-control" name="c_city" required>
                            </div>
                            <div class="form-group">
                                <label>Your Contact</label>
                                <input type="text" class="form-control" name="c_contact" required>
                            </div>
                            <div class="form-group">
                                <label>Your Address</label>
                                <input type="text" class="form-control" name="c_address" required>
                            </div>
                            <div class="form-group">
                                <label>Your Profile Picture</label>
                                <input type="file" class="form-control form-height-custom" name="c_image" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" name="register" class="btn btn-primary">
                                    <i class="fa fa-user-md"></i> Register
                                </button>

                            </div>
                        </form>



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
