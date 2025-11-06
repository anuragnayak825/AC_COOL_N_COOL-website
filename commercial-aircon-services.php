<?php include 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC Cool n Cool </title>
    <?php include 'includes/common-header.php'; ?>
</head>

<body class="Commercial">

    <!-- ==============header=========== -->
    <?php include 'includes/header.php'; ?>

    <!-- ==============inner-page-banner========= -->

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
                    <h1>Commercial Aircon Services</h1>
                    <p class="subtitle">Looking for Aircon Repair, Water Leaking & Troubleshoot? Trusted High Quality
                        Air Conditioner Service Cost in KL for more than 20 years! Book Now!
                    </p>


                    <div class="res-btn-sec">
                        <button onclick="window.location.href='tel:+60163824522'">Call : +60 16-382 4522</button>
                        <button onclick="window.location.href='https://wa.me/60163824522'">Whatsapp US</button>
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
                <img src="<?= SITE_PATH; ?>assets/images/commercial-about.webp" alt="">
            </div>
        </div>
        </div>
        <div class="right-side-sec">
            <h2>
                Commercial Aircon Services in Kuala Lumpur - AC Cool N Cool Engineering
            </h2>
            <p>
                At AC Cool N Cool Engineering, we specialize in giving professional commercial air conditioning services
                within Kuala Lumpur. We understand the essence of a warm and productive business environment, thus we
                are obligated to delivering the most reliable energy-efficient and affordable air conditioning service
                for commercial venues.
            </p>
            <h3>
                Our Commercial Aircon Services:
            </h3>
            <p>
                AC Cool N Cool Engineering has vast experience providing top-notch commercial air conditioning services
                in Kuala Lumpur and Selangor for over two decades. The company's skilled team offers extensive
                solutions, including designing, installing, maintaining, and repairing HVAC systems to achieve optimal
                performance and energy efficiency, using specialized techniques for servicing and diagnosing issues1.
                The commitment to quality and customer satisfaction has made the company a reliable partner to
                businesses seeking commercial air conditioning solutions.
            </p>
            <button onclick="window.location.href ='tel:+60163824522'">Talk To Expert</button>
        </div>


    </section>



    <!-- ===================cta=============== -->

    <?php include 'includes/cta.php'; ?>
    <!-- ===================cta=============== -->


    <div class="res-service-sec">
        <div class="left-side">
            <h1>Premium Commercial Air Conditioning Services</h1>
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
        <div class="right-side ">
            <div class="right-side-card">
                <div class="icon-div">
                    <img src="<?= SITE_PATH; ?>assets/images/installation_11772833.svg" alt="">
                </div>
                <div>
                    <h1>Commercial Aircon Installation</h1>
                    <p>We have aircon installation for small offices, retail spaces, and large corporate buildings. We
                        ensure that the units selected are right for your space size and requirements to achieve optimal
                        cooling efficiency and energy savings. Our team ensures that the installation is smooth, quick,
                        and compliant with all industry standards.
                    </p>
                    <button onclick="window.location.href = 'tel:+60163824522'">Learn More <i class="fa fa-arrow-right-long"></i></button>
                </div>
            </div>
            <div class="right-side-card">
                <div class="icon-div">
                    <img src="<?= SITE_PATH; ?>assets/images/repair_4772226.svg" alt="">
                </div>
                <div>
                    <h1>Aircon Maintenance for Businesses</h1>
                    <p>Regular aircon maintenance helps to steer clear of breakdowns and ensures your units run at
                        optimal performance. Scheduled maintenance services include cleaning filters, checking
                        refrigerant levels, inspecting cooling coils, and solving all the potential issues before they
                        actually interfere with business operations. Maintaining equipment not only increases efficiency
                        but also prolongs their life.</p>
                    <button onclick="window.location.href = 'tel:+60163824522'">Learn More <i class="fa fa-arrow-right-long"></i></button>
                </div>
            </div>
            <div class="right-side-card">
                <div class="icon-div">
                    <img src="<?= SITE_PATH; ?>assets/images/cleaning_12148976.svg" alt="">
                </div>
                <div>
                    <h1>Commercial Aircon Repairs</h1>
                    <p>In case of malfunction, our expert technicians provide fast, reliable repair services for all
                        types of commercial air conditioning systems. We diagnose and resolve problems promptly, whether
                        minor or major, thereby minimizing downtime and ensuring your business remains comfortable for
                        employees and customers alike.
                    </p>
                    <button onclick="window.location.href = 'tel:+60163824522'">Learn More <i class="fa fa-arrow-right-long"></i></button>
                </div>
            </div>
            <div class="right-side-card">
                <div class="icon-div">
                    <img src="<?= SITE_PATH; ?>assets/images/printer_6265768.svg" alt="">
                </div>
                <div>
                    <h1>Aircon System Upgrades and Replacements</h1>
                    <p>We'll help you upgrade to the most energy-efficient air conditioning units available, reducing
                        your operational cost, if you have outdated or inefficient air conditioning systems. Our team
                        will always be there to recommend the best options, whether you need a partial upgrade or a full
                        replacement.
                    </p>
                    <button onclick="window.location.href = 'tel:+60163824522'">Learn More <i class="fa fa-arrow-right-long"></i></button>
                </div>
            </div>
            <div class="right-side-card">
                <div class="icon-div">
                    <img src="<?= SITE_PATH; ?>assets/images/printer_6265768.svg" alt="">
                </div>
                <div>
                    <h1>Custom Aircon Solutions</h1>
                    <p>We understand that every commercial space has different requirements. From multi-zone cooling for
                        large offices to cooling solutions for specialized environments like server rooms, our team
                        provides customized air conditioning designs and installations that fit your specific needs.
                    </p>
                    <button onclick="window.location.href = 'tel:+60163824522'">Learn More <i class="fa fa-arrow-right-long"></i></button>
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
                        <p>High-qualified staffs, thoroughly experienced in working on commercial air conditioner
                            systems, guaranteed highest level services.
                        </p>
                    </div>
                </li>
                <li>
                    <img src="<?= SITE_PATH; ?>assets/images/check-mark_5290058.svg" alt="">
                    <div>
                        <h2>Reliable and Timely Services:</h2>
                        <p> We can realize the pressure on your company's comfort condition. We look to complete our
                            work on schedules that will minimally interfere with the normal rhythm of your everyday
                            operations.
                        </p>
                    </div>
                </li>
                <li>
                    <img src="<?= SITE_PATH; ?>assets/images/check-mark_5290058.svg" alt="">
                    <div>
                        <h2>Energy efficiency:</h2>
                        <p>We identify energy-efficient solutions and reduce operational cost, thereby keeping the
                            business going in a very eco-friendly way. Affordable and transparent pricing: Highly
                            competitive pricing that contains no hidden fee, ensuring premium service at affordable
                            prices. Partnership for the long term: Providing ongoing maintenance support to ensure you
                            get the very best from your air conditioning.
                        </p>
                    </div>
                </li>
            </ul>


        </div>
        <div class="right-side-sec">
            <div class="imges-div">
                <img src="<?= SITE_PATH; ?>assets/images/gal5.webp" alt="Woman portrait" class="gallery-img">
                <img src="<?= SITE_PATH; ?>assets/images/gal6.webp" alt="Man portrait" class="gallery-img">
                <!-- <img src="<?= SITE_PATH; ?>assets/images/gal2.webp" alt="Beach sunset" class="gallery-img"> -->
            </div>
        </div>
    </section>
    <!-- ===================END================== -->


    <div class="why-choose-end">
        <h1>Choose AC Cool N Cool Engineering for all your commercial aircon needs in Kuala Lumpur. Contact us today for
            a consultation or to schedule a service!</h1>
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
        const buttons = document.querySelectorAll('.service-cta .btn-div button');

        buttons.forEach((btn, i) => {

            if (i === 0) {
                btn.addEventListener('click', () => {
                    window.location.href = "tel:+60163824522";
                });
            }
            if (i === 1) {
                btn.addEventListener('click', () => {
                    window.location.href = "tel:+60163824522";
                });
            }
            if (i === 2) {
                btn.addEventListener('click', () => {
                    window.location.href = "https://wa.me/60163824522";
                });
            }
        });
    </script>
    <script>
        const buttons = document.querySelectorAll('.right-side .right-side-card button');

        buttons.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                window.location.href = "tel:+60163824522";
            });
        });
    </script>

</body>

</html>