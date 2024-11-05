 <!--Site Footer Start-->
 <head>
 <link rel="icon" href="whatsapp-favicon.ico" type="image/x-icon">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 </head>
 <footer class="site-footer site-footer-two">
            <div class="site-footer__shape-1">
                <img src="assets/images/shapes/site-footer-shape-1.png" alt="">
            </div>
            <div class="site-footer__shape-2">
                <img src="assets/images/shapes/site-footer-shape-2.png" alt="">
            </div>
            <div class="site-footer__top">
                <div class="container">
                    <div class="site-footer__top-inner">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="footer-widget__column footer-widget__about">
                                    <div class="footer-widget__logo">
                                        <a href="index.php"><img src="assets/images/resources/logoblack.jpg" alt=""></a>
                                    </div>
                                    <p class="footer-widget__about-text">Having successfully treated numerous patients, Dr. Rakesh Mahajan is a leading name in the field of orthopedics. He has been widely acknowledged for his versatile and patient-centric approach</p>
                                    <div class="site-footer__social">
                                        <a href="https://www.facebook.com/profile.php?id=61561728657709" target="_blank"><i class="icon-facebook"></i></a>
                                        <a href="https://www.instagram.com/dr.rakeshmahajanortho?igsh=MTJxZ3BnMW9pOGVhbQ%3D%3D" target="_blank"><i class="icon-instagram"></i></a>
                                        <a href="https://www.linkedin.com/company/103369129/admin/dashboard/" target="_blank"><i class="icon-link-in"></i></a>
                                        <a href="#" target="_blank"><i class="icon-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                <div class="footer-widget__column footer-widget__quick-link">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Quick Links</h3>
                                    </div>
                                    <ul class="footer-widget__quick-link-list list-unstyled">
                                        <li><a href="about.php"><span class="icon-andle-dabble"></span>About Us</a></li>
                                        <li><a href="blog.php"><span class="icon-andle-dabble"></span>Blog</a></li>
                                        <li><a href="gallery.php"><span class="icon-andle-dabble"></span>Gallery</a></li>
                                        <li><a href="videos.php"><span class="icon-andle-dabble"></span>Videos</a></li>
                                        <li><a href="contact.php"><span class="icon-andle-dabble"></span>Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                <div class="footer-widget__column footer-widget__services">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Our Services</h3>
                                    </div>
                                    <?php
                        $sql = " SELECT * FROM `services` limit 5";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                    <ul class="footer-widget__quick-link-list list-unstyled">
                                    <li><a href="service-details.php?url=<?php echo $row['url'] ?>"><?php echo $row['title']; ?></a></li>
                                      
                                    </ul>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                <div class="footer-widget__column footer-widget__contact">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Contact Info</h3>
                                    </div>
                                    <ul class="footer-widget__contact-list list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-pin"></span>
                                            </div>
                                            <div class="content">
                                                <span>Location:</span>
                                                <p>28, Bodhraj Kohli Marg, Block 27, East Patel Nagar, <br> Patel Nagar, New Delhi, Delhi 110008</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-clock"></span>
                                            </div>
                                            <div class="content">
                                                <span>Opening Hours: </span>
                                                <p>Mon - Sat: 05:00 PM - 09:00 PM</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-phone"></span>
                                            </div>
                                            <div class="content">
                                                <span>Phone Call:</span>
                                                <p>
                                                    <a href="tel:09810034040">098100 34040, </a>
                                                    <a href="tel:09810034040">098100 34040</a>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">© All Copyright 2024 by Digidotes</p>
                        <ul class="list-unstyled site-footer__bottom-menu">
                            <li><a href="about.php">Trams & Condition</a></li>
                            <li><a href="about.php">Privacy Policy</a></li>
                        </ul>
                        <a href="#" data-target="php" class="scroll-to-target scroll-to-top"><i class="fas fa-arrow-up"></i></a>
                    </div>
                </div>
            </div>
        </footer>

        <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-1.svg" width="150" alt="" /></a>
            </div>
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:rakeshshika26@gmail.com">rakeshshika26@gmail.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+09810034040">+098100 34040</a>
                </li>
                
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" target="_blank" class="fab fa-youtube"></a>
                    <a href="https://www.facebook.com/profile.php?id=61561728657709\" target="_blank" class="fab fa-facebook-square"></a>
                    <a href="https://www.linkedin.com/company/103369129/admin/dashboard/" target="_blank" class="fab fa-linkedin"></a>
                    <a href="https://www.instagram.com/dr.rakeshmahajanortho?igsh=MTJxZ3BnMW9pOGVhbQ%3D%3D" target="_blank" class="fab fa-instagram"></a>
                </div>
            </div><!-- /.mobile-nav__top -->

            <div class="main-menu__btn-box-outer">
                <div class="main-menu__btn-box">
                    <a href="contact.php" class="main-menu__btn thm-btn">
                        Appointment Now
                        <span class="icon-right-arrow"></span>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!-- /.mobile-nav__wrapper -->
<style>
    /* Basic CSS Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* WhatsApp Button Container */
.whatsappParent {
  position: fixed;
  bottom: 20px;
  right: 20px;
  width: 60px;
  height: 60px;
  background-color: #25D366;
  border-radius: 50%;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: transform 0.2s ease-in-out;
  z-index: 999;
  
}

/* Hover Effect */
.whatsappParent:hover {
  transform: scale(1.1);
}

/* WhatsApp Icon */
.whatsappIcon {
  width: 50px;
  height: 50px;
}

</style>
    <div class="whatsappParent" id="whatsapp-button">
    <i class="fa-brands fa-whatsapp text-light fs-2"></i>
  </div>
<script>
    document.getElementById('whatsapp-button').addEventListener('click', function() {
  window.open('https://wa.me/+09810034040', '_blank'); // Replace '1234567890' with your WhatsApp number
});
</script>
    <!-- search popup start-->
    <div class="td-search-popup" id="td-search-popup">
        <form action="https://figtheme.com/html/chirofind/index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search....." />
            </div>
            <button type="submit" class="submit-btn">
                <i class="fa fa-search"></i>
            </button>
        </form>
    </div>