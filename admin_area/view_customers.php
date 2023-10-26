<?php
    if(!isset($_SESSION['admin_email'])){
        echo"<script>window.open('login.php','_self')</script>";
    }
    else{
?>


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-tags"></i> Xem khách hàng
                </h3>
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
                                <i class="fa fa-envelope"></i> <span> Liên hệ </span> <?php echo $admin_contact ;?> <br/>
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
    </div>
</div>
    
<?php } ?>