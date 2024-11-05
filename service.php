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
                    <h2>Services</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span class="icon-andle-dabble"></span></li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Services Page One Start-->
        <section class="page-content-wrapper services-page-one">
            <div class="services-page-one__shape-1 float-bob-x">
                <img src="assets/images/shapes/services-page-one-shape-1.png" alt="">
            </div>
            <div class="services-page-one__shape-2 float-bob-y">
                <img src="assets/images/shapes/services-page-one-shape-2.png" alt="">
            </div>
            <div class="services-page-one__shape-3 float-bob-x">
                <img src="assets/images/shapes/services-page-one-shape-3.png" alt="">
            </div>
            <div class="services-page-one__shape-4 float-bob-y">
                <img src="assets/images/shapes/services-page-one-shape-4.png" alt="">
            </div>
            <div class="container">
            <div class="row">
                <?php
                  $sql = "SELECT * FROM `services`";
                  $result = mysqli_query($conn, $sql);

                  while ($row = mysqli_fetch_assoc($result)) {
                  ?>

                    <!--Services Two Single Start -->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-duration=".9s" data-wow-delay="100ms">
                        <div class="services-two__single">
                            <div class="services-two__img">
                            <img class="img-fluid" src="Uploads/services/<?php echo $row['image']; ?>" alt="">
                            </div>
                            <div class="services-two__content">
                            <a href="service-details.php?url=<?php echo $row['url'] ?>"><?php echo $row['title']; ?></a>
                                <p class="services-two__text"><?php echo $row['short_description']?>
                                    </p>
                                <div class="services-two__icon">
                                    <span class="icon-leg"></span>
                                </div>
                                <div class="services-two__btn-box">
                                    <a href="service-details.php?url=<?php echo $row['url'] ?>" class="services-two__btn thm-btn">Read More<span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                  }?>
                    <!--Services Two Single End -->
                </div>
            </div>
        </section>
        <!--Services Page One End-->

        <!--Site Footer Start-->
        <?php include('include/footer.php'); ?>
    </div><!-- /.page-wrapper -->


    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <?php include('include/foot.php'); ?>
</body>


<!-- Mirrored from figtheme.com/html/chirofind/services1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jul 2024 09:43:21 GMT -->
</html>