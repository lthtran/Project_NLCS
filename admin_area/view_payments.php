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
                <i class="fa fa-dashboard"></i> Bảng điều khiển/ Các khoản thanh toán
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
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
</div>

<?php } ?>