<?php
    // session_start();
    // include("includes/db.php");
    if(!isset($_SESSION['admin_email'])){
        echo"<script>window.open('login.php','_self')</script>";
    }
    else{
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> Bảng điều khiển </h1>

        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i>
            </li>
        </ol>
    </div>
</div>

<!-- <div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>

                    <div class="col-xs-9 text-right">
                        <div class="huge"> <?php echo $count_products; ?> </div>
                            <div> Sản phẩm </div>
                    </div>

                </div>
            </div>

            <a href="index.php?view_products">
                <div class="panel-footer">
                    <span class="pull-left"> Xem chi tiết </span>
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>

                    <div class="col-xs-9 text-right">
                        <div class="huge"> <?php echo $count_customers; ?> </div>
                            <div> Khách hàng </div>
                    </div>

                </div>
            </div>

            <a href="index.php?view_customers">
                <div class="panel-footer">
                    <span class="pull-left"> Xem chi tiết </span>
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-orange">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tags fa-5x"></i>
                    </div>

                    <div class="col-xs-9 text-right">
                        <div class="huge"> <?php echo $count_p_categories; ?> </div>
                            <div> Loại sản phẩm </div>
                    </div>

                </div>
            </div>

            <a href="index.php?view_p_cats">
                <div class="panel-footer">
                    <span class="pull-left"> Xem chi tiết </span>
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                    <div class="clearfix"></div>
                </div>
            </a>
            
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>

                    <div class="col-xs-9 text-right">
                        <div class="huge"> <?php echo $count_pending_orders; ?> </div>
                            <div> Đơn hàng </div>
                    </div>

                </div>
            </div>

            <a href="index.php?view_orders">
                <div class="panel-footer">
                    <span class="pull-left"> Xem chi tiết </span>
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div> -->

<div class="row top_tiles">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats panel panel-success shadow">
            <div style="padding: 5px;">
            <div  class="icon"><i class="fa fa-archive fa-2x"></i></div>
            <div class="count"><?php echo $count_products; ?></div>
            <h3 class="text-success">Sản phẩm</h3>
            </div>
            <div>
            <a href="index.php?view_products">
                <div class="panel-footer">
                    <span class="pull-left"> Xem chi tiết </span>
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right fa-2x"></i>
                    </span>
                    <div class="clearfix"></div>
                </div>
            </a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats panel panel-warning shadow">
        <div style="padding: 5px;">
            <div class="icon"><i class="fa fa-light fa-users fa-2x"></i></div>
            <div class="count"><?php echo $count_customers; ?></div>
            <h3  class="text-warning">Khách hàng</h3>
        </div>
            <a href="index.php?view_customers">
                <div class="panel-footer">
                    <span class="pull-left"> Xem chi tiết </span>
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right fa-2x"></i>
                    </span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats panel panel-danger shadow">
        <div style="padding: 5px;">
            <div class="icon"><i class="fa fa-sort-amount-desc fa-2x"></i></div>
            <div class="count"><?php echo $count_p_categories; ?></div>
            <h3 class="text-danger">Loại sản phẩm</h3>
        </div>
            <a href="index.php?view_p_cats">
                <div class="panel-footer">
                    <span class="pull-left"> Xem chi tiết </span>
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right fa-2x"></i>
                    </span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats panel panel-info shadow">
        <div style="padding: 5px;">
            <div class="icon"><i class="fa fa-check-square-o fa-2x"></i></div>
            <div class="count"><?php echo $count_pending_orders; ?></div>
            <h3 class="text-info">Đơn hàng</h3>
        </div>
            <a href="index.php?view_orders">
                <div class="panel-footer">
                    <span class="pull-left"> Xem chi tiết </span>
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right fa-2x"></i>
                    </span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>

<hr/>

<div class="row">

    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-tags"></i> Các khoản thanh toán
                </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thread>
                            <tr class="text-center">
                                <th> STT </th>
                                <th> STT hóa đơn </th>
                                <th> Giá </th>
                                <th> Chế độ thanh toán </th>
                                <th> Mã hóa đơn </th>
                                <th> Ngày thanh toán </th>
                                <th> Xóa thanh toán </th>
                            </tr>
                        </thread>
                        <tbody>
                            <?php
                                $i=0;
                                $get_payments = "select * from payments";
                                $run_payments = mysqli_query($con, $get_payments);
                                while($row_payment=mysqli_fetch_array($run_payments)){
                                    $payment_id = $row_payment['payment_id'];
                                    $invoice_no = $row_payment['invoice_no'];
                                    $amount = $row_payment['amount'];
                                    $payment_mode = $row_payment['payment_mode'];
                                    $ref_no = $row_payment['ref_no'];
                                    $payment_date = $row_payment['payment_date'];
                                    $i++;

                            ?>
                            <tr class="text-center">
                                <td> <?php echo $i; ?></td>
                                <td> <?php echo $invoice_no; ?></td>
                                <td> <?php echo $amount; ?></td>
                                <td> <?php echo $payment_mode; ?></td>
                                <td> <?php echo $ref_no; ?></td>
                                <td> <?php echo $payment_date; ?></td>
                                <td> <a href="index.php?delete_payment=<?php echo $payment_id; ?>">
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

    <div class="col-md-4">

        <div class="panel">
            <div class="panel-body">
                <div class="mb-md thumb-info">
                    <img src="admin_images/<?php echo $admin_image ;?>" alt="<?php echo $admin_image ;?>" class="rounded img-responsive">
                    <div class="thumb-info-title">
                        <span class="thumb-info-inner"> <?php echo $admin_name ;?> </span>
                    </div>
                </div>
                <div class="mb-md">
                    <div class="widget-content-expanded">
                        <i class="fa fa-user"></i> <span> Email: </span> <?php echo $admin_email ;?> <br/>
                        <i class="fa fa-envelope"></i> <span> Liên hệ: </span> <?php echo $admin_contact ;?> <br/>
                    </div>
                    <hr class="dotted short">
                    <h5 class="text-muted"> About me </h5>
                    <p>
                        <?php echo $admin_about; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>