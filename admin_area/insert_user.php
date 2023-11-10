<?php
    if(!isset($_SESSION['admin_email'])){
    echo"<script>window.open('login.php','_self')</script>";
    }
    else{ 
?>

    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Bảng điều khiển/ Thêm người dùng
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i>Thêm người dùng
                    </h3>
                </div>

                <div class="panel-body">
                    <form method="post" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Tên người dùng </label>

                            <div class="col-md-6">
                                <input name="admin_name" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Email </label>

                            <div class="col-md-6">
                                <input name="admin_email" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Mật khẩu </label>

                            <div class="col-md-6">
                                <input name="admin_pass" type="password" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Ảnh đại diện </label>

                            <div class="col-md-6">
                                <input name="admin_image" type="file" class="form-control" required>
                            </div>
                        </div>                       
                        
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Liên hệ </label>

                            <div class="col-md-6">
                                <input name="admin_contact" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Job </label>

                            <div class="col-md-6">
                                <input type="text" name="admin_job" cols="19" rows="6" class="form-control"></input>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> About </label>

                            <div class="col-md-6">
                                <textarea name="admin_about" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">
                                <input name="submit" value="Thêm người dùng" type="submit" class="btn btn-primary form-control">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php

if(isset($_POST['submit'])){
    $user_name = $_POST['admin_name'];
    $user_email = $_POST['admin_email'];
    $user_pass = $_POST['admin_pass'];
    $user_contact = $_POST['admin_contact'];
    $user_job = $_POST['admin_job'];
    $user_about = $_POST['admin_about'];

    $user_image = $_FILES['admin_image']['name'];
    $temp_admin_image = $_FILES['admin_image']['tmp_name'];
    move_uploaded_file($temp_admin_image,"admin_images/$user_image");

    $insert_user = "insert into `admin`
    (admin_name,admin_email,admin_pass,admin_contact,admin_job,admin_image,admin_about) values 
    ('$user_name','$user_email',$user_pass,'$user_contact','$user_job','$user_image','$user_about')";

    $run_user = mysqli_query($con,$insert_user);
    if($run_user){
        echo "<script>alert('Người dùng mới đã được thêm vào thành công!')</script>";
        echo "<script>window.open('index.php?view_users','_self')</script>";

    }
}

?>

<?php } ?>