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
                <i class="fa fa-dashboard"></i> Bảng điều khiển/ Người dùng
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-tags"></i> Người dùng
                </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thread>
                            <tr class="text-center">
                                <th> STT: </th>
                                <th> Tên người dùng: </th>
                                <th> Ảnh đại diện: </th>
                                <th> Email: </th>
                                <th> About: </th>
                                <th> Liên hệ: </th>
                                <th> Job: </th>
                                <th> Sửa: </th>
                                <th> Xóa </th>
                            </tr>
                        </thread>
                        <tbody>
                            <?php
                                $i=0;
                                $get_users = "select * from admin";
                                $run_users = mysqli_query($con, $get_users);
                                while($row_users=mysqli_fetch_array($run_users)){
                                    $user_id = $row_users['admin_id'];
                                    $user_name = $row_users['admin_name'];
                                    $user_img = $row_users['admin_image'];
                                    $user_email = $row_users['admin_email'];
                                    $user_about = $row_users['admin_about'];
                                    $user_contact = $row_users['admin_contact'];
                                    $user_job = $row_users['admin_job'];

                                    $i++;

                            ?>
                            <tr class="text-center">
                                <td> <?php echo $i; ?></td>
                                <td> <?php echo $user_name; ?></td>
                                <td> <img src="../admin_area/admin_images/<?php echo $user_img; ?>" width="70" height="60"></td>
                                <td> <?php echo $user_email; ?></td>
                                <td> <?php echo $user_about; ?></td>
                                <td> <?php echo $user_contact; ?></td>
                                <td> <?php echo $user_job; ?></td>

                                <td> <a href="index.php?user_profile=<?php echo $user_id; ?>">
                                        <i class="fa fa-pencil"></i> Sửa
                                    </a>
                                </td>
                                <td> <a href="index.php?delete_user=<?php echo $user_id; ?>">
                                        <i class="fa fa-trash-o"></i> Xóa 
                                    </a>
                                </td>
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