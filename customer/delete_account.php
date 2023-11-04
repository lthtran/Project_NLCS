<center>
    <h1> Bạn có thật sự muốn xóa tài khoản? </h1>
    <form action="" method="post">
        <input type="submit" name="Yes" value="Xóa" class="btn btn-danger">
        <input type="submit" name="No" value="Hủy" class="btn btn-secondary">
    </form>
</center>

<?php
$c_email = $_SESSION['customer_email'];
if(isset($_POST['Yes'])){
    $delete_customer = "delete from customers where customer_email='$c_email'";
    $run_delete_customer = mysqli_query($con,$delete_customer);
    if($run_delete_customer){
        session_destroy();
        echo "<script>alert('Tài khoản của bạn đã được xóa thành công.')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
    }
}
if(isset($_POST['No'])){
    echo "<script>window.open('my_account.php?my_orders','_self')</script>";
}
?>