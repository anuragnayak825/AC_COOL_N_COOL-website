<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer-box">
                    <div class="footer-logo">
                        <img src="<?= SITE_PATH; ?>assets/images/logo-ac.png" alt="AC Cool & Cool Logo">
                    </div>
                    <div class="footer-text">
                        <p>AC Cool N Cool Engineering is an Aircon Service provider in the Kuala Lumpur and Selangor
                            regions.</p>
                    </div>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="footer-award">
                        <img src="<?= SITE_PATH; ?>assets/images/toprated.png" alt="Top Rated Service">
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="footer-box">
                    <div class="footer-title">
                        <h3>Quick Links</h3>
                    </div>
                    <div class="footer-links">
                        <ul>
                            <li><a href="<?= SITE_PATH; ?>index.php">Home</a></li>
                            <li><a href="<?= SITE_PATH; ?>about-us.php">About Us</a></li>
                            <li><a href="<?= SITE_PATH; ?>services.php">Services</a></li>
                            <li><a href="<?= SITE_PATH; ?>contact-us.php">Contact Us</a></li>
                            <li><a href="<?= SITE_PATH; ?>">Blog</a></li>
                            <li><a href="<?= SITE_PATH; ?>about-us.php">Mission</a></li>
                            <li><a href="<?= SITE_PATH; ?>blog.php">Company Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="footer-box">
                    <div class="footer-title">
                        <h3>Useful Links</h3>
                    </div>
                    <div class="footer-links">
                        <ul>
                            <li><a href="<?= SITE_PATH; ?>gallery.php">Gallery</a></li>
                            <li><a href="<?= SITE_PATH; ?>privacy-policy.php">Privacy Policy</a></li>
                            <li><a href="<?= SITE_PATH; ?>#">Terms</a></li>
                            <li><a href="<?= SITE_PATH; ?>blog.php">Faqs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box">
                    <div class="footer-title contact-title">
                        <h3>Contact Us</h3>
                    </div>
                    <div class="footer-contact">
                        <div class="f-contact-phone">
                            <div class="f-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="f-text">
                                <p><a href="">+60 16-382 4522</a></p>
                            </div>
                        </div>
                        <div class="f-contact-email">
                            <div class="f-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="f-text">
                                <p><a href="mailto:info@accoolncool.com">info@accoolncool.com</a></p>
                            </div>
                        </div>
                        <div class="f-contact-address">
                            <div class="f-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="f-text">
                                <p>Kuala Lampur, Malaysia</p>
                            </div>
                        </div>
                        <div class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3172.123456789012!2d101.6868553152604!3d3.139003997616123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c5b6b6b6b6b%3A0x1234567890abcdef!2sKuala%20Lumpur%20Malaysia!5e0!3m2!1sen!2smy!4v1612345678901"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="copy-text">
                    <p>&copy; 2025 AC Cool N Cool Engineering. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>


    <div id="scrollToTopBtn" class="sticky-whatshapp-btn btn-2" style=" display: none;">
        <i class="fa fa-arrow-right-long"></i>
        <p>Top to scroll</p>
    </div>
    <div onclick=" window.location.href ='https://wa.me/60163824522'" class="sticky-whatshapp-btn ">
        <i class="fab fa-whatsapp"></i>
        <p>Whatshap us</p>
    </div>
</footer>

<script>
    window.onscroll = function () {
        if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
            scrollToTopBtn.style.display = "flex"; // Show the button
        } else {
            scrollToTopBtn.style.display = "none"; // Hide the button
        }
    };


    document.getElementById("scrollToTopBtn").addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
        });
    });

</script>