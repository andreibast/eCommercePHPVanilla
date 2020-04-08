<?php
    $active='Contact';
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
                        Contact Us
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
                            <h2> Feel free to Contact Us </h2>
                            <p class="text-muted">
                                If you have any questions, feel free to contact us. Our Customer Service work <strong>24/7</strong>
                            </p>
                        </center>

                        <form action="contact.php" class="post">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="message" class="form-control"></textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="fa fa-user-md"></i> Send Message
                                </button>

                            </div>

                        <?php
                        
                            if(isset($_POST['submit'])){

                                //Admin receives message with this
                                $sender_name = $_POST['name'];
                                $sender_email = $_POST['email'];
                                $sender_subject = $_POST['subject'];
                                $sender_message = $_POST['message'];
                                $receiver_email = "andrei.bast@yahoo.com"; //admin email
                                mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);

                                //Auto-reply to sender with this
                                $email = $_POST['email'];
                                $subject = "Welcome to my website";
                                $msg = "Thanks for sending us message. ASAP we will reply your message";
                                $from = "example@email.com";

                                mail($email,$subject,$msg,$from);

                                echo "<h2 align='center'> Your message has sent successfully </h2>";

                            }
                        ?>
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
