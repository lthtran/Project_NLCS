<?php
    $active='Shop';
    include("includes/header.php");

?>

    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Trang chủ</a>
                    </li>
                    <li>
                        Cửa hàng
                    </li>
                    
                </ul>
            </div>

            <div class="col-md-3">
            <?php
                include("./includes/sidebar.php");
            ?>
            </div>

            <div class="col-md-9">

                <?php 

                    if(!isset($_GET['p_cat'])){
                        if(!isset($_GET['cat'])){

                    echo "

                    <div class='box'>
                        <h1>Cửa hàng</h1>
                        <p>
                            Xem và thỏa thích mua sắm với cửa hàng trang sức bạc Alias !!
                        </p>
                    </div>
                    ";
                        }
                    }
                ?>

                <div class="row">
                    <?php

                    if(!isset($_GET['p_cat'])){
                        if(!isset($_GET['cat'])){

                            $per_page=6;

                            if(isset($_GET['page'])){
                                $page = $_GET['page'];
                            }else{
                                    $page=1;
                            }
                                $start_from = ($page-1) * $per_page;
                                $get_products = "select * from products limit $start_from,$per_page";
                                $run_products = mysqli_query($con,$get_products);
                                while($row_products=mysqli_fetch_array($run_products)){
                                    $pro_id = $row_products['product_id'];
                                    $pro_title = $row_products['product_title'];
                                    $pro_price = $row_products['product_price'];
                                    $pro_img1 = $row_products['product_img1'];

                                    echo "
                                        <div class='col-md-4 col-sm-6 center-responsive'>
                                            <div class='product'>
                                                <a href='details.php?pro_id=$pro_id'>
                                                    <img style='width:100% !important;' src='admin_area/product_images/$pro_img1'>

                                                </a>

                                                <div class='text'>
                                                    <h3>
                                                        <a href='details.php?pro_id=$pro_id'> $pro_title </a>
                                                    </h3>
                                                    <p class='price'>
                                                       $pro_price
                                                    </p>
                                                    <p class='button text-center'>
                                                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                                                            Xem chi tiết
                                                        </a>                                                      
                                                    
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    ";
                            }
                    ?>

                </div> 

                <center>
                    <ul class="pagination">
                        <?php
                        $query = "select * from products";
                        $result = mysqli_query($con,$query);
                        $total_records = mysqli_num_rows($result);
                        $total_pages = ceil($total_records / $per_page);

                            echo"
                                <li>
                                    <a href='shop.php?page=1'>".'&laquo'."</a>
                                </li>
                            
                            ";
                            for($i=1; $i<=$total_pages; $i++){
                                echo"
                                <li>
                                    <a href='shop.php?page=".$i."'>".$i."</a>
                                </li>
                            
                                ";
                            };

                            echo"
                                <li>
                                    <a href='shop.php?page=".$total_pages."'>".'&raquo'."</a>
                                </li>
                            ";
                            
                            }
                        }
                        ?>
                    </ul>
                </center>

                <?php 
                    getpcatpro();
                    getcatpro();
                ?>

            </div>
        </div>
    </div>

    <?php
    include("./includes/footer.php");
    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>