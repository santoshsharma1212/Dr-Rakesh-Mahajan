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
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/breadcrum.jpg);"></div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Blog Details</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.php">Home</a></li>
                            <li><span class="icon-andle-dabble"></span></li>
                            <li>Blog Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Blog Details Start-->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                <?php
                        if (isset($_GET['blog_url'])) {
                            $blog_url = $_GET['blog_url'];
                            $sql = " SELECT * FROM `blogs` where `blog_url`= '$blog_url' ";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);
                        }
                        ?>
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details__left">
                            <div class="blog-details__img-box-1">
                                <div class="blog-details__img">
                                <img src="Uploads/blogs/<?php echo $row['image']; ?>" alt="">
                                </div>
                                <div class="blog-details__date">
                                <?php
                                                    $date = strtotime($row['createdAt']);
                                                    echo date('d', $date); ?>
                                                <span>
                                                    <?php
                                                    $date =  strtotime($row['createdAt']);
                                                    echo date('M \ Y', $date);
                                                    ?>
                                </div>
                            </div>
                            <div class="blog-details__content">
                                <ul class="blog-details__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="far fa-user fa-fw"></span>
                                        </div>
                                        <p>By Admin</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-comments"></span>
                                        </div>
                                        <p>2 Comments</p>
                                    </li>
                                </ul>
                                <h3 class="blog-details__title-1"><?php echo $row['title']; ?></h3>
                                <p><?php echo $row['description']; ?></p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Resent Post</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                <?php
                  $sql = "SELECT * FROM `blogs` limit 3";
                  $result = mysqli_query($conn, $sql);

                  while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                                    <li>
                                        <div class="sidebar__post-image">
                                        <img class="img-fluid" src="Uploads/blogs/<?php echo $row['image']; ?>" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <p class="sidebar__post-date"><i class="icon-calender"></i>
                                             <?php
                                                    $date = strtotime($row['createdAt']);
                                                    echo date('d M,Y', $date); ?>
                                              
                                            </p>
                                            <h3>
                                            <a href="blog-details.php?blog_url=<?php echo $row['blog_url']; ?>"><?php echo $row['title']; ?></a>
                                            </h3>
                                        </div>
                                    </li>
                                    <?php }?>

                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Tags</h3>
                                <div class="sidebar__tags-list">
                                    <a href="blog-details.html">Massages</a>
                                    <a href="blog-details.html">Beauty</a>
                                    <a href="blog-details.html">Injuries</a>
                                    <a href="blog-details.html">Strong</a>
                                    <a href="blog-details.html">Physiotherapy</a>
                                    <a href="blog-details.html">Bathing</a>
                                    <a href="blog-details.html">Chiropractic</a>
                                    <a href="blog-details.html">Knee Pain</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Details End-->

        <!--Site Footer Start-->
        <?php include('include/footer.php'); ?>
    </div><!-- /.page-wrapper -->

  
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <?php include('include/foot.php'); ?>
</body>


<!-- Mirrored from figtheme.com/html/chirofind/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jul 2024 09:43:49 GMT -->
</html>