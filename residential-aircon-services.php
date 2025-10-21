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

    <section id="hero-banner">
        <div class="hero-container">
            <!-- Slider Background Images -->
            <div class="slider-backgrounds">
                <div class="slide-bg active" style="background-image: url('assets/images/hero-img.jpg');"></div>
                <div class="slide-bg" style="background-image: url('assets/images/hero-img-1.jpg');"></div>
                <div class="slide-bg" style="background-image: url('assets/images/hero-img-2.jpg');"></div>
            </div>

            <!-- Overlay Content -->
            <div class="hero-overlay residentcial-section">
                <div class="hero-content">
                    <h1>Residential Aircon Services</h1>
                    <p class="subtitle">Looking for Aircon Repair, Water Leaking & Troubleshoot? Trusted High Quality
                        Air Conditioner Service Cost in KL for more than 20 years! Book Now!
                    </p>

                    <div class="res-btn-sec">
                        <button>Call : +60 16-382 4522</button>
                        <button>Whatsapp US</button>
                    </div>
                </div>

                <!-- Fixed Form -->
                <div class="hero-form">
                    <div class="form-container">
                        <h3>Instant Booking!</h3>
                        <form id="estimate-form">
                            <div class="form-group">
                                <input type="text" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Email Address" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" placeholder="Phone Number" required>
                            </div>
                            <div class="form-group">
                                <select required>
                                    <option value="" disabled selected>Service Needed</option>
                                    <option>AC Installation</option>
                                    <option>AC Repair</option>
                                    <option>Maintenance</option>
                                    <option>Commercial Services</option>
                                </select>
                            </div>
                            <button type="submit" class="submit-btn">Request Free Quote</button>
                        </form>
                        <p class="form-note">We'll contact you within 30 minutes</p>
                    </div>
                </div>
            </div>

            <!-- Slider Controls -->
            <!-- <div class="slider-controls">
                <button class="slider-prev"><i class="fas fa-chevron-left"></i></button>
                <div class="slider-dots">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                <button class="slider-next"><i class="fas fa-chevron-right"></i></button>
            </div> -->
        </div>
    </section>


    <!-- Res-About-section -->

    <section id="Res-about-sec" class="about">
        <div class="left-side-sec">
            <!-- <h1>About</h1> -->
            <div class="div-img">
                <div class="N-div">
                    <span></span>
                    <div class="triangle"></div>
                    <h5>+60 16-382 4522</h5>
                </div>
                <img src="<?= SITE_PATH; ?>assets/images/res-service.webp" alt="">
            </div>
        </div>
        </div>
        <div class="right-side-sec">
            <h2>
                Residential Aircon Services in Kuala Lumpur - AC Cool N Cool Engineering
            </h2>
            <p>
                Here at AC Cool N Cool Engineering, our services are primarily focused on quality residential air
                conditioning services in Kuala Lumpur. All installation, maintenance, and repairs are done so that your
                home always stays cool and comfortable throughout the year.
            </p>
            <h3>
                Our Residential Aircon Services:
            </h3>
            <p>
                AC Cool N Cool Engineering has vast experience providing top-notch residential air conditioning services
                in Kuala Lumpur and Selangor for over two decades. The company's skilled team offers extensive
                solutions, including designing, installing, maintaining, and repairing HVAC systems to achieve optimal
                performance and energy efficiency, using specialized techniques for servicing and diagnosing issues1.
                The commitment to quality and customer satisfaction has made the company a reliable partner to
                businesses seeking residential air conditioning solutions.
            </p>
            <button>Talk To Expert</button>
        </div>


    </section>



    <!-- ===================cta=============== -->

    <?php include 'includes/cta.php'; ?>
    <!-- ===================cta=============== -->


    <div class="res-service-sec">
        <div class="left-side">
            <h1>Premium Residential Air Conditioning Services</h1>
            <!-- <h2>, , and Reliable Solutions for Your Home</h2> -->
            <ul>
                <li>
                    <img src="<?= SITE_PATH; ?>assets/images/check-mark_5290058.svg" alt="">
                    <h3>Affordable</h3>
                </li>
                <li>
                    <img src="<?= SITE_PATH; ?>assets/images/check-mark_5290058.svg" alt="">
                    <h3>Professional</h3>
                </li>
            </ul>
            <ul>
                <li>
                    <img src="<?= SITE_PATH; ?>assets/images/check-mark_5290058.svg" alt="">
                    <h3>Reliable</h3>
                </li>
            </ul>
            <p>Affordable Solutions with a Focus on Quality and Customer Satisfaction</p>
        </div>
        <div class="right-side">
            <div class="right-side-card">
                <div class="icon-div">
                    <img src="<?= SITE_PATH; ?>assets/images/installation_11772833.svg" alt="">
                </div>
                <div>
                    <h1>Aircon Installation</h1>
                    <p>Our team of professionals makes the installation process smooth and painless, while choosing the
                        appropriate air conditioning unit for your house size and cooling requirements. We ensure
                        accurate installation to achieve the highest level of energy efficiency and comfort</p>
                    <button>Learn More <i class="fa fa-arrow-right-long"></i></button>
                </div>
            </div>
            <div class="right-side-card">
                <div class="icon-div">
                    <img src="<?= SITE_PATH; ?>assets/images/repair_4772226.svg" alt="">
                </div>
                <div>
                    <h1>Maintenance of Aircon</h1>
                    <p>Proper maintenance ensures that your air conditioner works smoothly and prolongs its life cycle.
                        Ouraircon maintenance services include filter cleaning, checking refrigerant levels, and proper
                        functioning of all components.</p>
                    <button>Learn More <i class="fa fa-arrow-right-long"></i></button>
                </div>
            </div>
            <div class="right-side-card">
                <div class="icon-div">
                    <img src="<?= SITE_PATH; ?>assets/images/cleaning_12148976.svg" alt="">
                </div>
                <div>
                    <h1>Repair of Aircon</h1>
                    <p>If your air conditioner is not working properly, our professionals can easily find the problem
                        and have it corrected. Fast and reliable repair for every type of air conditioning equipment.
                    </p>
                    <button>Learn More <i class="fa fa-arrow-right-long"></i></button>
                </div>
            </div>
            <div class="right-side-card">
                <div class="icon-div">
                    <img src="<?= SITE_PATH; ?>assets/images/printer_6265768.svg" alt="">
                </div>
                <div>
                    <h1>Aircon Servicing</h1>
                    <p>Comprehensive servicing to address any performance issues and get your air conditioner working in
                        the best possible conditions again. That is why we provide a thorough check up and employ a
                        system-level replacement of worn-out parts and improvement of efficiency.</p>
                    <button>Learn More <i class="fa fa-arrow-right-long"></i></button>
                </div>
            </div>
        </div>
    </div>



    <!-- =========================CTA ========================== -->

    <section class="service-cta">
        <div class="service-cta-div">
            <div class="left-side">
                <h1>Ready to enjoy the <br /> <span>benfits</span> of eco-cleaning <br />
                    service ?</h1>
            </div>
            <div class="right-side">
                <div class="btn-div">
                    <button>Request a free estimate <i class="fa fa-arrow-right-long"></i></button>
                    <button><i class="fa fa-phone"></i></button>
                    <button><i class="fab fa-whatsapp"></i></button>
                </div>
                <p>Leave an application on our website now to schedule a cleaning appointment that works for you!</p>
            </div>

            <img src="<?= SITE_PATH; ?>assets/images/cta-star.png" alt="">
        </div>
    </section>

    <!-- =========================CTA ========================== -->



    <!-- ==================================Why Choose us -->

    <section class="why-Choose-us">
        <div class="left-side-sec">
            <h1>Why Choose AC Cool N Cool Engineering?</h1>
            <ul>
                <li>
                    <img src="<?= SITE_PATH; ?>assets/images/check-mark_5290058.svg" alt="">
                    <div>
                        <h2>Expert Technicians:</h2>
                        <p>Our team is highly trained and equipped with the skills to handle any residential air
                            conditioning issues.
                        </p>
                    </div>
                </li>
                <li>
                    <img src="<?= SITE_PATH; ?>assets/images/check-mark_5290058.svg" alt="">
                    <div>
                        <h2>Customer Satisfaction:</h2>
                        <p> We prioritize customer satisfaction and aim to provide solutions that meet your cooling
                            needs.
                        </p>
                    </div>
                </li>
                <li>
                    <img src="<?= SITE_PATH; ?>assets/images/check-mark_5290058.svg" alt="">
                    <div>
                        <h2>Quick Response Time:</h2>
                        <p> We know how important an operational air conditioner is, so we get back to you within no
                            time.
                        </p>
                    </div>
                </li>
            </ul>


        </div>
        <div class="right-side-sec">
            <div class="imges-div">
                <img src="<?= SITE_PATH; ?>assets/images/gal4.webp" alt="City architecture" class="gallery-img">
                <img src="<?= SITE_PATH; ?>assets/images/gal7.webp" alt="Abstract art" class="gallery-img">
                <img src="<?= SITE_PATH; ?>assets/images/gal12.webp" alt="Colorful background" class="gallery-img">
            </div>
        </div>
    </section>
    <!-- ===================END================== -->


    <div class="why-choose-end">
        <h1>Stay cool and comfortable at home with AC Cool N Cool Engineering. Call now for a consultation or to
            schedule a service!</h1>
    </div>



    <!-- ===================================================== -->

    <?php include 'includes/service-location.php'; ?>

    <!-- ==============Footer=========== -->
    <?php include 'includes/footer.php'; ?>


    <!-- ==============scripts=========== -->
    <script src="assets/js/script.js"></script>
    <!-- bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Slider functionality
            const slides = document.querySelectorAll('.slide-bg');
            const dots = document.querySelectorAll('.dot');
            const prevBtn = document.querySelector('.slider-prev');
            const nextBtn = document.querySelector('.slider-next');
            let currentSlide = 0;
            const slideCount = slides.length;

            // Initialize slider
            function showSlide(index) {
                slides.forEach(slide => slide.classList.remove('active'));
                dots.forEach(dot => dot.classList.remove('active'));

                slides[index].classList.add('active');
                dots[index].classList.add('active');
                currentSlide = index;
            }

            // Next slide
            function nextSlide() {
                currentSlide = (currentSlide + 1) % slideCount;
                showSlide(currentSlide);
            }

            // Previous slide
            function prevSlide() {
                currentSlide = (currentSlide - 1 + slideCount) % slideCount;
                showSlide(currentSlide);
            }

            // Auto slide
            let slideInterval = setInterval(nextSlide, 5000);

            // Reset interval on interaction
            function resetInterval() {
                clearInterval(slideInterval);
                slideInterval = setInterval(nextSlide, 5000);
            }

            // Event listeners
            nextBtn.addEventListener('click', () => {
                nextSlide();
                resetInterval();
            });

            prevBtn.addEventListener('click', () => {
                prevSlide();
                resetInterval();
            });

            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    showSlide(index);
                    resetInterval();
                });
            });

            // Pause on hover
            const slider = document.querySelector('.slider-backgrounds');
            slider.addEventListener('mouseenter', () => {
                clearInterval(slideInterval);
            });

            slider.addEventListener('mouseleave', () => {
                resetInterval();
            });

        });
    </script>

</body>

</html>