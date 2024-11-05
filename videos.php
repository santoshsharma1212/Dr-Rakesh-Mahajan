<!DOCTYPE html>
<html lang="en">

<?php include('include/head.php'); ?>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->

    <div class="page-wrapper">
        <?php include('include/header.php'); ?>

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div>
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/breadcrum.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Gallery</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.php">Home</a></li>
                            <li><span class="icon-andle-dabble"></span></li>
                            <li>Videos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Portfolio Details Start-->
        <section class="portfolio-details">
            <div class="container">
                <div class="col-lg-6 col-md-12 col-sm-12">
                <?php
                $sql = " SELECT * FROM `videos` where `status` = '1' ";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="portfolio-details__img">
                        <iframe class="embed-responsive-item" width="100%" height="315" src="<?php echo $row['link'] ?>" allowfullscreen></iframe>

                    </div>
                <?php } ?>
                </div>
        </section>
        <!--Portfolio Details End-->

        <!--Site Footer Start-->
        <?php include('include/footer.php'); ?>
    </div><!-- /.page-wrapper -->


    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <?php include('include/foot.php'); ?>
</body>


<!-- Mirrored from figtheme.com/html/chirofind/portfolio-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jul 2024 09:43:34 GMT -->

</html>