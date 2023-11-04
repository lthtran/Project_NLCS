<?php
session_start();
if(!isset($_SESSION['customer_email'])){
    echo"<script>window.open('../checkout.php','_self')</script>";
}else{

include("includes/db.php");
include("functions/functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alias Store</title>
    
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <style>
        .btn-primary{
            color: rgb(255, 255, 255);
            background: #198754;
            border-color: #198754;
        }
    </style>
</head>
<body>
   
   <div id="top">
       
       <div class="container">
           
           <div class="col-md-6 offer">
               
               <a href="#" class="btn btn-primary btn-sm">
                    <?php
                        if(!isset($_SESSION['customer_email'])){
                            echo"Welcome: Khách hàng";
                        }else{
                            echo"Welcome: " . $_SESSION['customer_email'] . "";
                        }
                    ?>
               </a>
               <a href="checkout.php">Tổng cộng: <?php total_price(); ?> </a>
               
           </div>
           
           <div class="col-md-6">
               
               <ul class="menu">
                   
                   <li>
                       <a href="../customer_register.php">Đăng ký</a>
                   </li>
                   <li>
                       <a href="my_account.php">Tài khoản</a>
                   </li>
                   <li>
                       <a href="../cart.php">Giỏ hàng</a>
                   </li>
                   <li>
                       <a href="../checkout.php">
                            <?php

                                if(!isset($_SESSION['customer_email'])){
                                    echo"<a href='checkout.php'> Đăng nhập </a>";
                                }else{
                                    echo" <a href='logout.php'> Đăng xuất </a> ";
                                }

                            ?>
                       </a>
                   </li>
                   
               </ul>
               
           </div>
           
       </div>
       
   </div>
   
   <div id="navbar" class="navbar navbar-default">
       
       <div class="container">
           
           <div class="navbar-header">
               
               <a href="../index.php" class="navbar-brand home">
                   <img src="images/logo.jpg" alt="Alias-Store Logo" class="hidden-xs">
                   
               </a>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Toggle Search</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div>
           
           <div class="navbar-collapse collapse" id="navigation">
               
               <div class="padding-nav">
                   
                   <ul class="nav navbar-nav left">
                       
                       <li>
                           <a href="../index.php">Trang chủ</a>
                       </li>
                       <li>
                           <a href="../shop.php">Cửa hàng</a>
                       </li>
                       <li class="active">
                           <a href="my_account.php">Tài khoản</a>
                       </li>
                       <li>
                           <a href="../cart.php">Giỏ hàng</a>
                       </li>
                       <li>
                           <a href="../contact.php">Liên hệ</a>
                       </li>
                       
                   </ul>
                   
               </div>
               
               <a href="../cart.php" class="btn navbar-btn btn-primary right">
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span><?php items(); ?></span>
                   
               </a>
               
               <div class="navbar-collapse collapse right">
                   
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                       
                       <span class="sr-only">Toggle Search</span>
                       
                       <i class="fa fa-search"></i>
                       
                   </button>
                   
               </div>
               
               <div class="collapse clearfix" id="search">
                   
                   <form method="get" action="results.php" class="navbar-form">
                       
                       <div class="input-group">
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn">
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary">
                               
                               <i class="fa fa-search"></i>
                               
                           </button>
                           
                           </span>
                           
                       </div>
                       
                   </form>
                   
               </div>
               
           </div>
           
       </div>

    </div>


    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Trang chủ</a>
                    </li>
                    <li>
                        Tài khoản
                    </li>
                </ul>
            </div>

            <div class="col-md-3">
                <?php
                    include("./includes/sidebar.php");
                ?>
            </div>

            <div class="col-md-9">
                <div class="box">

                    <?php
                        if(isset($_GET['my_orders'])){
                            include("my_orders.php");
                        }
                  
                        if(isset($_GET['edit_account'])){
                            include("edit_account.php");
                        }
              
                        if(isset($_GET['change_pass'])){
                            include("change_pass.php");
                        }
              
                        if(isset($_GET['delete_account'])){
                            include("delete_account.php");
                        }
                    ?>
                </div>
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
<?php } ?>