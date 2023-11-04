<?php
    $active='Contact';
    include("includes/header.php");
?>

    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Trang chủ</a>
                    </li>
                    <li>
                        Liên hệ
                    </li>
                </ul>
            </div>

            <div class="col-md-3">

            <?php
                include("./includes/sidebar.php");
            ?>
            </div>

            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <center>
                            <h2> Biểu mẫu liên hệ </h2>
                            <p class="text-muted">
                                Nếu bạn gặp vấn đề, liên hệ ngay. Cửa hàng của chúng tớ làm việc <strong>24/7</strong>
                            </p>
                        </center>
                        <form action="send.php" method="post">
                            <div class="form-group">
                                <label>Họ tên</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" required>
                            </div>

                            <div class="form-group">
                                <label>Mô tả vấn đề</label>
                                <input type="text" class="form-control" name="subject" required>
                            </div>

                            <div class="form-group">
                                <label>Lời nhắn</label>
                                <textarea name="message" rows="5" class="form-control"></textarea>
                            </div>

                            <div class="text-center">
                                <button data-toggle="modal" data-target="#myModal" type="submit" name="submit" class="btn btn-primary btn-lg btn-block">
                                <i class="fa fa-user-md"></i> Gửi 
                                </button>
                            </div>

                        </form>

                        <?php 
                            if(isset($_POST['submit'])){
                               $sender_name = $_POST['name'];
                               $sender_email = $_POST['email'];
                               $sender_subject = $_POST['subject'];
                               $sender_message = $_POST['message'];
                               $receiver_email= "huyentrantb66666@gmail.com";
                               mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);

                               $email = $_POST['email'];
                               $subject = "Welcome to my website";
                               $msg = "Thanks for sending us message. ASAP we will reply your message";
                               $from = "tranb2014710@student.ctu.edu.vn"; 
                               mail($email, $subject,$msg,$from);
                               echo "<div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
                               <div class='modal-dialog' role='document'>
                                 <div class='modal-content'>
                                   <div class='modal-header'>
                                     <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                                     <h4 class='modal-title' id='myModalLabel'>Phản hồi</h4>
                                   </div>
                                   <div class='modal-body'>
                                     Yêu cầu đã được gửi đi!!
                                   </div>
                                   <div class='modal-footer'>
                                     <button type='button' class='btn btn-default' data-dismiss='modal'>Đóng</button>
                                   </div>
                                 </div>
                               </div>
                             </div>";
                            }
                        ?>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php
    include("./includes/footer.php");
    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>