<?php include 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC Cool n Cool </title>
    <?php include 'includes/common-header.php'; ?>
</head>

<body>

    <!-- ==============header=========== -->
    <?php include 'includes/header.php'; ?>

    <!-- ==============inner-page-banner========= -->

    <section id="inner-banner">
            <div class="container">
                <div class="inner-banner-content">
                    <h1>Contact Us</h1>
                    <p><a href="index.php">Home</a> / Contact Us</p>
                </div>
            </div>
    </section>

    <!-- ==================contact-box-details=========== -->

    <section id="contact-details">
        <div class="container">
            <div class="row">
                <!-- Phone Box -->
                <div class="col-lg-4 pt-3">
                    <div class="contact-details-box">
                        <div class="contact-details-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <h5>Call Us</h5>
                        <p>+60 16-382 4522</p>
                        <a href="tel:+60163824522" class="contact-link">Call Now <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Email Box -->
                <div class="col-lg-4 pt-3">
                    <div class="contact-details-box">
                        <div class="contact-details-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <h5>Email Us</h5>
                        <p>info@accoolncool.com</p>
                        <a href="mailto:info@accoolncool.com" class="contact-link">Email Now <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Address Box -->
                <div class="col-lg-4 pt-3">
                    <div class="contact-details-box">
                        <div class="contact-details-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <h5>Visit Us</h5>
                        <p>Kaula Lumpur, Malaysia</p>
                        <a href="https://maps.app.goo.gl/UAEqwNENs8Y68BMu8" target="_blank" class="contact-link">Get
                            Directions <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====================form and map======= -->

    <section id="contact-form-map">
        <div class="container">
            <div class="row">
                <!-- Contact Form -->
                <div class="col-lg-6">
                    <div class="contact-form-container">
                        <h2>Get In Touch</h2>
                        <p class="contact-form-subtitle">Fill out the form, and we'll get back to you soon.</p>

                        <form action="" method="POST" id="contactForm">
                            <input type="hidden" name="form_type" value="contact_form">
                            <div class="form-group">
                                <input type="text" id="name" name="name" required>
                                <label for="name">Full Name</label>
                            </div>

                            <div class="form-group">
                                <input type="email" id="email" name="email" required>
                                <label for="email">Email Address</label>
                            </div>

                            <div class="form-group">
                                <input type="tel" id="phone" name="phone" required>
                                <label for="phone">Phone Number</label>
                            </div>

                            <div class="form-group">
                                <select id="service" name="service" required>
                                    <option value="" disabled selected>Select a Service</option>
                                    <option value="Aircon Service">Aircon Service</option>
									<option value="Aircon Maintenance">Aircon Maintenance</option>
									<option value="Aircon Installation">Aircon Installation</option>
									<option value="Aircon Repair">Aircon Repair</option>
									<option value="Residential Aircon Service">Residential Aircon Service</option>
									<option value="Commercial Aircon Service">Commercial Aircon Service</option>
                                </select>
                                <label for="service">Service Needed</label>
                            </div>

                            <div class="form-group">
                                <textarea id="message" name="query" rows="4" required></textarea>
                                <label for="message">Your Message</label>
                            </div>

                            <button type="submit" name="submit" class="submit-btn">Send Message <i class="fa-solid fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>

                <!-- Google Map -->
                <div class="col-lg-6">
                    <div class="map-container">
                        <h2>Our Location</h2>
                        <p class="contact-form-subtitle">Visit us or get directions easily.</p>

                        <div class="map-wrapper">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.7036126155454!2d101.69441217447044!3d3.1725202530095844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc49cab5f8df73%3A0xa2d534af18e7e06e!2sAc%20Cool%20N%20Cool%20Engineering%20Aircond%20service!5e0!3m2!1sen!2sin!4v1757483511565!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- ==============Footer=========== -->
    <?php include 'includes/footer.php'; ?>


    <!-- ==============scripts=========== -->
    <script src="assets/js/script.js"></script>
    <!-- bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>