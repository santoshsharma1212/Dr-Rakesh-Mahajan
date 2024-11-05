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
                    <h2>Blog Grid</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.php">Home</a></li>
                            <li><span class="icon-andle-dabble"></span></li>
                            <li>Blog Grid</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Blog Page Start-->
        <section class="page-content-wrapper blog-page">
            <div class="container">
                <div class="row">
                <?php
                  $sql = "SELECT * FROM `blogs` limit 3";
                  $result = mysqli_query($conn, $sql);

                  while ($row = mysqli_fetch_assoc($result)) {
                  ?>

                    <!--Blog Two Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="blog-two__single">
                            <div class="blog-two__img-box">
                                <div class="blog-two__img">
                                <img class="img-fluid" src="Uploads/blogs/<?php echo $row['image']; ?>" alt="">
                                <img class="img-fluid" src="Uploads/blogs/<?php echo $row['image']; ?>" alt="">
                                    <a href="blog-details.html" class="blog-two__link"><span class="sr-only"></span></a>
                                </div>
                                <div class="blog-two__date">
                                    <p> <?php
                                                    $date = strtotime($row['createdAt']);
                                                    echo date('d', $date); ?>
                                                <span>
                                                    <?php
                                                    $date =  strtotime($row['createdAt']);
                                                    echo date('M \ Y', $date);
                                                    ?></span>
                                </div>
                            </div>
                            <div class="blog-two__content">
                                <ul class="blog-two__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="far fa-user fa-fw"></span>
                                        </div>
                                        <a href="blog-details.html">By Admin</a>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-comments"></span>
                                        </div>
                                        <a href="blog-details.html">0 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-two__title">
                                <a href="blog-details.php?blog_url=<?php echo $row['blog_url']; ?>"><?php echo $row['title']; ?></a>
                                </h3>
                                <a href="blog-details.php?blog_url=<?php echo $row['blog_url']; ?>" class="blog-two__read-more">read More<span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <!--Blog Two Single End-->
                </div>
            </div>
        </section>
        <!--Blog Page End-->

        <!--Site Footer Start-->
        <?php include('include/footer.php'); ?>
        <!--Site Footer End-->
    </div><!-- /.page-wrapper -->

  
   
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <?php include('include/foot.php'); ?>
</body>


<!-- Mirrored from figtheme.com/html/chirofind/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jul 2024 09:43:45 GMT -->
</html>