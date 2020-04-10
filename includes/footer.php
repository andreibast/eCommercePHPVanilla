<!------------------
1.Main list elements
------------------>

<div id="footer"> 
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
            
                <h4>Pages</h4>

                <ul>
                    <li><a href="../cart.php">Shopping Cart</a> </li>
                    <li><a href="../contact.php">Contact Us</a> </li>
                    <li><a href="../shop.php">Shop</a> </li>
                    <li><a href="my_account.php">My Account</a> </li>
                </ul>
                <br>

                <h4>User Selelection</h4>
                <ul>
                        <?php
                            if(!isset($_SESSION['customer_email'])){
                                echo "<a href='../checkout.php'> Login </a>";
                            }else{
                                echo "<a href='my_account.php?my_orders'> My Account </a>";
                            }
                        ?>

                        <li><a href="customer_register.php">Register</a></li>

                </ul>

                <hr class="hidden-md hidden-lg hidden-sm">
            
            </div><!--col-6 & col3-->

            <div class="com-sm-6 col-md-3">
                <h4>Top Products Category</h4>
                <ul>
                    <?php

                        $get_p_cats = "select * from product_categories";

                        $run_p_cats = mysqli_query($con, $get_p_cats);
                        
                        
                        while($row_p_cats =mysqli_fetch_array($run_p_cats)){

                            $p_cat_id = $row_p_cats['p_cat_id'];
                            $p_cat_title = $row_p_cats['p_cat_title'];
                            
                            echo "
                                <li>
                                    <a href='shop.php?p_cat=$p_cat_id'>
                                        $p_cat_title
                                    </a>
                                </li>
                            ";
                        }
                    ?>

                </ul>
                <hr class="hidden-md hidden-lg">
            </div><!--com col-6 & col3-->

            <div class="col-sm-6 col-md-3">
                <h4>Find Us</h4>
                <p>
                    <strong>M-Dev Media Inc.</strong>
                    <br/>Location1
                    <br/>Location2
                    <br/>0818-0564-1235
                    <br/>example@yahoo.com
                    <br/><strong>ContactPerson</strong>
                </p>
                <a href="contact.php">Check Our Contact Page</a>
                <hr class="hidden-md hidden-lg">
            </div><!--col-6 & col3-->

            <div class="col-sm-6 col-md-3">
                <h4>Get The News</h4>

                <p class="text-muted">Don't miss our latest products.</p>
                
                <form action="" class="post">

                    <div class="input-group">
                        <input type="text" class="form-control" name="email">
                        <span>
                            <input type="text" value="subscribe" class="btn btn-default">
                        </span>
                    </div>

                </form>


                <!-- To replace the subscription your website has to go live! check lesson 16, feedburner google part! -->

                <!-- <form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri-M-devMedia', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="email">
                        <input type="hidden" value = "M-devMedia" name="uri"/><input type="hidden" name="loc" value = "en_US"/>
                        <span>
                            <input type="text" value="subscribe" class="btn btn-default">
                        </span>
                    </div>
                </form> -->

                <hr>

                <h4>Keep In Touch</h4>

                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-envelope"></a>              
                </p>
            
            </div>


        </div><!--row-->
    </div><!--container-->
</div><!--footer-->



<!------------------
2.Last bottom bar
------------------>
<div id="copyright">
    <div class="container">

        <div class="col-md-6">
            <p class="pull-left"><a href="#">2020 M-Dev Store All Rights Reserved</a> </p>
        </div>
        
        <div class="col-md-6">
            <p class="pull-right"> Theme by: <a href="#">&copy; CreatorName</a> </p>
        </div>
    </div>
</div>