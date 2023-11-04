<?php
    if(!isset($_SESSION['admin_email'])){
        echo"<script>window.open('login.php','_self')</script>";
    }
    else{
?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i> Bảng điều khiển/ Thêm loại sản phẩm
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i> Thêm phân loại
                </h3>
            </div>
            <div class="panel-body">
                <form action="" class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="" class="control-label col-md-3">Tên phân loại</label>
                        <div class="col-md-6">
                            <input type="text" name="p_cat_title" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label col-md-3"></label>
                        <div class="col-md-6">
                            <input  value="Submit" name="submit" type="submit" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    if(isset($_POST['submit'])){
        $p_cat_title = $_POST['p_cat_title'];
        $insert_p_cat = "insert into product_categories (p_cat_title,p_cat_desc) values ('$p_cat_title')";
        $run_p_cat = mysqli_query($con, $insert_p_cat);
        if($run_p_cat){
            echo "<script>alert('Loại sản phẩm mới đã được thêm vào.')</script>";
            echo "<script>window.open('index.php?view_p_cats','_self')</script>";
        }
    }
?>

<?php } ?>