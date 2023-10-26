<?php
// include_once('./db.php');
$con = mysqli_connect("localhost","root","","alias-store");

 ?>
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <h4>Trang</h4>
                <ul>
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="../customer/my_account.php">My Account</a></li>
                </ul>
                <hr>
                <h4>Khách hàng</h4>
                <ul>
                    <?php

                    if(!isset($_SESSION['customer_email'])){
                        echo"<a href='checkout.php'>Đăng Nhập</a>";
                    }else{
                        echo"<a href='customer/my_account.php?my_orders'>My Account</a>";
                    }

                    ?>
                    <!-- <li><a href="checkout.php">Đăng nhập</a></li> -->
                    <li><a href="customer_register.php">Đăng Ký</a></li>
                </ul>
                <hr class="hidden-md hidden-lg hidden-sm">
            </div>
            <div class="col-sm-6 col-md-3">
                <h4>Danh mục sản phẩm hàng đầu</h4>
                <ul>
                    <?php
                        $get_p_cats = "select * from product_categories";
                        $run_p_cats = mysqli_query($con,$get_p_cats);
                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                            $p_cat_id = $row_p_cats['p_cat_id'];
                            $p_cat_title = $row_p_cats['p_cat_title'];
                            echo"
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
            </div>

            <div class="col-sm-6 col-md-3">
                <h4>Find Us:</h4>
                <p>
                    <strong>Alias Store inc.</strong>
                    <br/>Quận Ninh Kiều
                    <br/>Thành phố Cần Thơ
                    <br/>0123456789
                    <br/>tranb2014710@student.ctu.edu.vn
                    <br/><strong>Tran</strong>
                </p>
                <a href="contact.php">Liên hệ</a>
                <hr class="hidden-md hidden-lg">
            </div>
            <div class="col-sm-6 col-md-3">
                <h4>Get The News</h4>
                <p class="text-muted">
                    Dont miss our latest update.
                </p>
                <form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=M-devMedia', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="email">
                        <input type="hidden" value="M-devMedia" name="uri"/><input type="hidden" name="loc" value="en_US"/>

                        <span class="input-group-btn">
                            <input type="submit" value="subscribe" class="btn btn-default">
                        </span>
                    </div>
                </form>
                <hr>
                <h4>Liên lạc</h4>
                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-envelope"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                </p>
            </div>
        </div>
    </div>
</div>

<div id="copyright">
    <div class="container">
        <div class="col-md-6">
            <p class="pull-left">&copy; 2023 Alias Store All Right Reserve</p>
        </div>
        <div class="col-md-6">
            <p class="pull-right">Theme by: <a href="#">Tran</a></p>
        </div>
    </div>
</div>
