<!DOCTYPE html>
<html lang="en">

<?php include('include/head.php'); ?>

<body>

    <!-- preloader -->
    <!-- <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div> -->
    <!-- preloader end  -->

    <div class="page-wrapper">
        <?php include('include/header.php'); ?>

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/breadcrum.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Contact Us</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.php">Home</a></li>
                            <li><span class="icon-andle-dabble"></span></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Page Start-->
        <section class="page-content-wrapper contact-page">
            <div class="container">
                <div class="contact-page__top">
                    <div class="row">
                        <!--Contact Page Single Start-->
                        <div class="col-xl-4 col-lg-4">
                            <div class="contact-page__single">
                                <div class="contact-page__icon">
                                    <span class="icon-location"></span>
                                </div>
                                <h3>Our Address</h3>
                                <p>28, Bodhraj Kohli Marg, Block 27, East Patel Nagar,
                                    Patel Nagar, New Delhi, Delhi 110008</p>
                            </div>
                        </div>
                        <!--Contact Page Single End-->
                        <!--Contact Page Single Start-->
                        <div class="col-xl-4 col-lg-4">
                            <div class="contact-page__single">
                                <div class="contact-page__icon">
                                    <span class="icon-email"></span>
                                </div>
                                <h3><a href="mailto:rakeshshika26@gmail.com">
                                        rakeshshika26@gmail.com</a></h3>
                                <p>Email us anytime for anykind
                                    ofquety.</p>
                            </div>
                        </div>
                        <!--Contact Page Single End-->
                        <!--Contact Page Single Start-->
                        <div class="col-xl-4 col-lg-4">
                            <div class="contact-page__single">
                                <div class="contact-page__icon">
                                    <span class="icon-phone"></span>
                                </div>
                                <h3>Hot: <a href="tel:09810034040">+098100 34040</a></h3>
                                <p>Call us any kind suppor,we
                                    will wait for it.</p>
                            </div>
                        </div>
                        <!--Contact Page Single End-->
                    </div>
                </div>
                <div class="contact-page__bottom">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5">
                            <div class="contact-page__bottom-left">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.5030338531187!2d77.17250187449456!3d28.6446530835319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0306644ad99f%3A0x49f24cd9ddeac1c2!2sDr.Rakesh%20Mahajan!5e0!3m2!1sen!2sin!4v1720164096139!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="contact-page__bottom-right">
                                <div class="comment-form">
                                    <div class="section-title text-left">
                                        <div class="section-title__tagline-box">
                                            <div class="section-title__tagline-shape-1"></div>   
                                            <span class="section-title__tagline">Contact Us</span>
                                        </div>
                                        <h2 class="section-title__title">Get In Touch With Us</h2>
                                    </div>
                                    <form id="contact-from-one-box" name="contact_form" class="default-form1 comment-form__form" action="contact.php" method="post">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="comment-form__input-box">
                                                    <h3 class="comment-form__input-title">Your Name*</h3>
                                                    <input type="text" name="name" placeholder="Your Name" required="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="comment-form__input-box">
                                                    <h3 class="comment-form__input-title">Your Email*</h3>
                                                    <input type="email" name="email" placeholder="Your Email" required="">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <h3 class="comment-form__input-title">Message*</h3>
                                                <div class="comment-form__input-box text-message-box">
                                                    <textarea name="message" placeholder="Write Message"></textarea>
                                                </div>
                                                <div class="comment-form__btn-box">
                                                    <button type="submit" name="sub" class="thm-btn comment-form__btn">Sent
                                                        Message<span class="icon-right-arrow"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <?php

                                    if (isset($_POST['sub'])) {
                                        $name = $_POST['name'];
                                        $email = $_POST['email'];
                                        $phone = $_POST['message'];
                                       
                                        $sql = "INSERT INTO `contact` (`name`, `email`, `message`,) VALUES ('$name', '$email', '$message')";
                                        $result = mysqli_query($conn, $sql);
                                        header("Location:contact.php");
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!--Site Footer Start-->
        <?php include('include/footer.php'); ?>
    </div><!-- /.page-wrapper -->

    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <?php include('include/foot.php'); ?>
</body>


<!-- Mirrored from figtheme.com/html/chirofind/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jul 2024 09:43:49 GMT -->

</html>