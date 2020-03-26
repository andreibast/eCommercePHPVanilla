<?php
    include("includes/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css"><!-- link needed to be modified -->
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css"><!-- works good, its unmodified. This library is for icons -->

    
    <!-- <link rel="stylesheet" href="styles/style.css"> -->

</head>

<body>

    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / Insert Products
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> Insert Product |
                    </h3>
                </div>

                <div class="panel-body">

                    <form method = "post" class="form-horizontal" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Product Title </label>
                            <div class="col-md-6">
                                <input name="product_title" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Product Category </label>
                            <div class="col-md-6">
                                <select name="product_cat" class="form-control">
                                    <option> Select A Category Product </option>

                                    <?php
                                        $get_p_cat = "select * from product_categories";
                                        $run_p_cat = mysqli_query($con, $get_p_cat);

                                        while($row_p_cat = mysqli_fetch_array($run_p_cat)){
                                            $p_cat_id = $row_p_cat['p_cat_id'];
                                            $p_cat_title = $row_p_cat['p_cat_title'];
                                            echo "
                                                <option value='$p_cat_id'> $p_cat_title </option>
                                            ";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-3 control-label"> Category </label>
                            <div class="col-md-6">
                                <select name="cat" class="form-control">
                                    <option> Select A Category </option>

                                    <?php
                                        $get_cat = "select * from categories";
                                        $run_cat = mysqli_query($con, $get_cat);

                                        while($row_cat = mysqli_fetch_array($run_cat)){
                                            $cat_id = $row_cat['cat_id'];
                                            $cat_title = $row_cat['cat_title'];
                                            echo "
                                                <option value='$cat_id'> $cat_title </option>
                                            ";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Product Image 1 </label>
                            <div class="col-md-6">
                                <input name="product_img1" type="file" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Product Image 2 </label>
                            <div class="col-md-6">
                                <input name="product_img2" type="file" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Product Image 3 </label>
                            <div class="col-md-6">
                                <input name="product_img3" type="file" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Product Price </label>
                            <div class="col-md-6">
                                <input name="product_price" type="text" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Product Keywords </label>
                            <div class="col-md-6">
                                <input name="product_keywords" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Product Description </label>
                            <div class="col-md-6">
                                <textarea name="product_desc" cols="19" rows="16" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-6">
                                <input name="submit" value= "Insert Product" type="submit" class="btn btn-primary form-control">
                            </div>
                        </div>


                    </form>
                </div>


            </div>
        </div>
    </div>







    <!----------------------------------------------------
    -----------ADDING JQUERY AND BOOTSTRAP----------------
    ----------------------------------------------------->
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
<!----------------------------------------------------
-----------------------END----------------------------
----------------------------------------------------->
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        
        $product_title = $_POST['product_title'];
        $product_cat = $_POST['product_cat'];
        $cat = $_POST['cat'];
        $product_price = $_POST['product_price'];
        $product_keywords = $_POST['product_keywords'];
        $product_desc = $_POST['product_desc'];

        $product_img1 = $_FILES['product_img1']['name'];
        $product_img2 = $_FILES['product_img2']['name'];
        $product_img3 = $_FILES['product_img3']['name'];

        $temp_name1= $FILES['product_img1']['tmp_name'];
        $temp_name2= $FILES['product_img2']['tmp_name'];
        $temp_name3= $FILES['product_img3']['tmp_name'];

        move_uploaded_file($temp_name1,"product_images/$product_img1");
        move_uploaded_file($temp_name2,"product_images/$product_img2");
        move_uploaded_file($temp_name3,"product_images/$product_img3");

        $insert_product = "insert into products (p_cat_id,cat_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_keywords,product_desc) values (' $product_cat','$cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_keywords','$product_desc')";

        $run_product = mysqli_query($con, $insert_product);

        if($run_product){
            echo "<script>alert('Product has been inserted succesfully!')</script>";
            echo "<script>window.open('insert_product.php','_self')</script>";

        }

    }

?>