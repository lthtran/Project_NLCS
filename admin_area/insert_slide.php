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
                <i class="fa fa-dashboard"></i> Bảng điều khiển/ Thêm trang nền
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i> Thêm trang
                </h3>
            </div>
            <div class="panel-body">
                <form action="" enctype="multipart/form-data" class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="" class="control-label col-md-3">Tên trang</label>
                        <div class="col-md-6">
                            <input type="text" name="slide_name" class="form-control">
                        </div> 
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label col-md-3">
                            Ảnh trang
                        </label>
                        <div class="col-md-6">
                        <input type="file" class="form-control" name="slide_image">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"></label>
                        <div class="col-md-6">
                        <input type="submit" value="Cập nhật ngay" name="submit" class="input btn btn-primary form-control">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    if(isset($_POST['submit'])){
        $slide_name = $_POST['slide_name'];
        $slide_image = $_FILES['slide_image']['name'];
        $temp_name = $_FILES['slide_image']['tmp_name'];
        $view_slides="Select * from slider";
        $view_run_slides = mysqli_query($con,$view_slides);
        $count = mysqli_num_rows($view_run_slides);
        
        if($count < 4){
        move_uploaded_file($temp_name,"slides_images/$slide_image");
        $insert_slide = "insert into slider (slide_name,slide_image) values ('$slide_name','$slide_image')";

        $run_slide = mysqli_query($con, $insert_slide);
        if($run_slide){
            echo "<script>alert('Trang mới đã được thêm vào.')</script>";
            echo "<script>window.open('index.php?view_slides','_self')</script>";
        }
    }else{
        echo "<script>alert('Đã tồn tại trang.')</script>";
    }
}
?>
<?php } ?>