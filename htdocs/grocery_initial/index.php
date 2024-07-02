<?php
include('header.php');
?>
<body>
    <?php
    include('navtop.php');
    ?>

    <div id="background">

        <div id="page">

            <?php include ('nav_sidebar.php');?>

            <div id="content">
                <div class="hero-unit-table">                        <!-- image slider -->
                    <div class="slider-wrapper theme-default">

                        <div id="slider" class="nivoSlider">
                            <img src="images/1.jpg" data-thumb="images/1.jpg" alt="" />
                            <img src="admin/images/instrument.jpg" data-thumb="images/2.jpg" alt="" />
                            <img src="admin/images/instrument2.jpg" data-thumb="images/3.jpg" alt="" />
                            <img src="admin/images/large.jpg"  alt="" data-transition="slideInLeft" />
                            <img src="admin/images/guitar.jpg" data-thumb="images/nemo.jpg" alt=""  />
                        </div>

                     
                    </div>
                    <!-- end slider -->
			<hr/>
			<center><h3 class = "center alert alert-success" style = "width:500px; font-weight:Bolder;">Latest Item</h3></center>
                    <div id="body">

                        <div class="body">
                            <ul>
                                <li>
								<a class="figure" href="All Products.php"><img class = "image-rounded"src="images/1.jpg" alt=""></a>
                                   <!-- <a class="figure" href="All_Products.php" data-toggle = "modal"><img class = "image-rounded"src="images/wineries.jpg" alt=""></a>-->
                                </li>
                                <li>
                                    <a class="figure" href="Men.php"><img class = "image-rounded"src="images/2.jpg" alt=""></a>
									<!--<a class="figure" href="Men.php" data-toggle = "modal" ><img class = "image-rounded"src="images/wineries.jpg" alt=""></a>-->

                                </li>
                                <li>
                                    <a class="figure" href="Women.php"><img class = "image-rounded"src="images/3.jpg" alt=""></a>
									<!--<a class="figure" href="Women.php" data-toggle = "modal" ><img class = "image-rounded" src="images/wineries.jpg" alt=""></a>-->

                                </li>
                                <li>
								 <a class="figure" href="Kids.php"><img class = "image-rounded"src="images/4.jpg" alt=""></a>
                                    <!--<a class="figure"  href="Kids.php" data-toggle = "modal" ><img class="img-rounded" src="images/wineries.jpg" alt=""></a> -->        
                                </li>

                            </ul>

                          <?php include ('modal_latest.php');?>
                        </div>

                    </div>
                    <div id="footer">
                        <?php include('footer.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer_bottom.php') ?>
</body>
</html>