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
                <i class="fa fa-dashboard"></i> Bảng điều khiển/ Xem loại sản phẩm
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-tags fa-fw"></i> Xem loại sản phẩm
                </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID: </th>
                                <th>Tên: </th>
                                <th>Chỉnh sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i =0 ;
                            $get_p_cats = "select * from product_categories";
                            $run_p_cats = mysqli_query($con,$get_p_cats);
                            while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                $p_cat_id = $row_p_cats['p_cat_id'];
                                $p_cat_title = $row_p_cats['p_cat_title'];
                                $i++;
                            
                             ?>

                            <tr>
                                <td><?php echo $p_cat_id; ?></td>
                                <td><?php echo $p_cat_title; ?></td>
                                <td><a href="index.php?edit_p_cat=<?php echo $p_cat_id; ?>"><i class="fa fa-pencil"></i> Sửa</a></td>
                                <td><a href="index.php?delete_p_cat=<?php echo $p_cat_id; ?>"><i class="fa fa-trash"></i> Xóa</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>