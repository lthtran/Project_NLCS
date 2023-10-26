<?php
session_start();
include("includes/header.php");
include("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <form action="" class="form-login" method="post">
            <h2 class="form-login-heading"> Đăng nhập </h2>
            <input type="text" class="form-control" placeholder="Email:" name="admin_email" required>
            <input type="password" class="form-control"placeholder="Mật khẩu:" name="admin_pass"required>
            <button type="submit" class="btn btn-lg btn-primary btn-block" name="admin_login">
                Submit
            </button>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['admin_login'])) {
    $admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);
    $admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);
    $get_admin = "select * from admin where admin_email='$admin_email' and admin_pass='$admin_pass'";
    $run_admin = mysqli_query($con,$get_admin);
    $count = mysqli_num_rows($run_admin);
    if($count==1){
        $_SESSION['admin_email']=$admin_email;
        echo "<script>alert('Đăng nhập thành công.')</script>";
        echo"<script>window.open('index.php?dashboard','_self')</script>";
    }
    else{
        echo "<script>alert('Email hoặc Mật khẩu sai !!')</script>";
    }
}
?>