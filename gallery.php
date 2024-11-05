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
                            <li>Photos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Portfolio Page Start-->
        <section class="page-content-wrapper portfolio-page">
            <div class="container">
                <div class="row">
                <?php
                $sql = " SELECT * FROM `photos` where `status` = '1' ";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <!--Portfolio Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="portfolio-page__single">
                            <div class="portfolio-page__img-box">
                                <div class="portfolio-page__img">
                                <img src="Uploads/photos/<?php echo $row['image'] ?>" alt="photos">
                                </div>
                                <div class="portfolio-page__content">
                                    <h3 class="portfolio-page__title text-light"><?php  echo $row['title'] ?></a></h3>
                                </div>
                                <div class="portfolio-page__arrow">
                                    <a href=""><span class="icon-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!--Portfolio Page Single End-->  
                </div>
            </div>
        </section>
        <!--Portfolio Page End-->

        <!--Site Footer Start-->
        <?php include('include/footer.php'); ?>
    </div><!-- /.page-wrapper -->

   
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <?php include('include/foot.php'); ?>
</body>

<!-- Mirrored from figtheme.com/html/chirofind/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jul 2024 09:43:34 GMT -->
</html>