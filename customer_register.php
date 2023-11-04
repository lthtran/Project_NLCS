<?php
    $active='Account';
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
                        Đăng ký
                    </li>
                </ul>
            </div>

            <div class="col-md-3">
                <?php
                    include("includes/sidebar.php");
                ?>
            </div>

            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <center>
                            <h2> Tạo tài khoản mới </h2>
                        </center>
                        <form action="customer_register.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Họ tên</label>
                                <input type="text" class="form-control" name="c_name" required>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="c_email" required>
                            </div>

                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input type="password" class="form-control" name="c_pass" required>
                            </div>

                            <div class="form-group">
                                <label>Quốc gia</label>
                                <input type="text" class="form-control" name="c_country" required>
                            </div>

                            <div class="form-group">
                                <label>Tỉnh/thành phố</label>
                                <input type="text" class="form-control" name="c_city" required>
                            </div>

                            <div class="form-group">
                                <label>Địa chỉ cụ thể</label>
                                <input type="text" class="form-control" name="c_address" required>
                            </div>

                            <div class="form-group">
                                <label>SDT</label>
                                <input type="text" class="form-control" name="c_contact" required>
                            </div>

                            <div class="form-group">
                                <label>Ảnh</label>
                                <input type="file" class="form-control form-height-custom" name="c_image" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" name="register" class="btn btn-primary">
                                <i class="fa fa-user-md"></i> Đăng Ký
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

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

<?php
if(isset($_POST['register'])){
    $c_name = $_POST['c_name'];
    $c_email = $_POST['c_email'];
    $c_pass = $_POST['c_pass'];
    $c_country = $_POST['c_country'];
    $c_city = $_POST['c_city'];
    $c_contact = $_POST['c_contact'];
    $c_address = $_POST['c_address'];
    $c_image = $_FILES['c_image']['name'];
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    $c_ip = getRealIpUser();
    move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
    $insert_customer =  "insert into customers 
    (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) 
    values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";
    $run_customer = mysqli_query($con,$insert_customer);
    $sel_cart = "select * from cart where ip_add='$c_ip'";
    $run_cart = mysqli_query($con,$sel_cart);
    $check_cart = mysqli_num_rows($run_cart);
    if($check_cart>0){
        // truong hop dang ky co san pham trong gio hang
        $_SESSION['customer_email']=$c_email;
        echo"<script>alert('Bạn đã đăng ký thành công!')</script>";
        echo"<script>window.open('checkout.php','_self')</script>";
    }else{
        // truong hop dang ky khong co san pham trong gio hang
        $_SESSION['customer_email']=$c_email;
        echo"<script>alert('Bạn đã đăng ký thành công!')</script>";
        echo"<script>window.open('index.php','_self')</script>";
    }
}
?>