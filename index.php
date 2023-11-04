<?php
    $active='Home';
    include("includes/header.php");
?>
   
   <div class="container" id="slider">
       
       <div class="col-md-12">
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel">
               
               <ol class="carousel-indicators">
                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>
                   
               </ol>
               
               <div class="carousel-inner">
                    <div class='item active'>
                        <img src='admin_area/slides_images/slide-1.webp'>
                    </div>
                    <div class='item'>
                        <img src='admin_area/slides_images/slide-2.jpg'>
                    </div>
                    <div class='item'>
                        <img src='admin_area/slides_images/slide-3.jpg'>
                    </div>
                    <div class='item'>
                        <img src='admin_area/slides_images/slide-4.jpg'>
                    </div>
               </div>
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                   
               </a>
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next">
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                   
               </a>
               
           </div>
           
       </div>
       
   </div>
     

   <div id="hot">
        <div class="box">
            <div class="container">
                <div class="col-md-12">
                    <h2>
                    Bộ sưu tập yêu thích
                    </h2>
                </div>
            </div>
        </div>
   </div>
   
    <div id="content" class="container">
        <div class="row">
            <?php
            getPro();
            ?>
        </div>
    </div>

    <?php
    include("./includes/footer.php");
    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>