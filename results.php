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
                    
                    include("includes/sidebar.php");
                
                ?>
        </div>

        <div class="col-md-9">
            <?php                        
                        if(isset($_GET['search'])){                           
                            $u_query = $_GET['user_query'];                       
                            $get_products = "select * from products where product_keywords like '%$u_query%'";    
                            $run_products = mysqli_query($db,$get_products);                          
                            $count = mysqli_num_rows($run_products);                           
        
                            if($count==0){           
                                echo "           
                                        <div class='box'>                                       
                                            <center>               
                                                <h4> Không tìm thấy sản phẩm nào. </h5>                                            
                                            </center>                
                                        </div>           
                                    ";
            
                            }else{            
                                        echo "            
                                            <div class='box'>                                            
                                                <center>           
                                                    <h2 style='text-transform: capitalize;'> $u_query </h2>                                               
                                                </center>           
                                            </div>            
                                            ";          
                                    }
    
                            while($row_products=mysqli_fetch_array($run_products)){        
                                $pro_id = $row_products['product_id'];        
                                $pro_title = $row_products['product_title'];       
                                $pro_price = $row_products['product_price'];        
                                $pro_img1 = $row_products['product_img1'];
                                      
                                echo "        
                                <div class='col-md-4 col-sm-6 center-responsive'>
                                    <div class='product'>                
                                        <a href='details.php?pro_id=$pro_id'>                
                                            <img class='img-responsive' src='admin_area/product_images/$pro_img1'>                    
                                        </a>
                
                                        <div class='text'>                  
                                            <h3>                  
                                                <a href='details.php?pro_id=$pro_id'>               
                                                    $pro_title                     
                                                </a>                 
                                            </h3>
                    
                                            <p class='price'>                   
                                                $pro_price                   
                                            </p>
                    
                                            <p class='price'>                   
                                                <a class='btn btn-default' href='details.php?pro_id=$pro_id'>               
                                                    View Details                      
                                                </a>
                        
                                                <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>               
                                                    <i class='fa fa-shopping-cart'></i> Add to Cart                     
                                                </a>                  
                                            </p>
                    
                                        </div>              
                                    </div>          
                                </div>       
                                ";       
                            };                           
                        }                   
                    ?>
        </div>
    </div>
</div>

<?php 
        
    include("includes/footer.php");
    
?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>

</body>
</html>