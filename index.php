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

    <!-- ==============hero-banner=========== -->
    <section id="hero-banner">
        <div class="hero-container">
            <!-- Slider Background Images -->
            <div class="slider-backgrounds">
                <div class="slide-bg active" style="background-image: url('assets/images/hero-img.jpg');"></div>
                <div class="slide-bg" style="background-image: url('assets/images/hero-img-1.jpg');"></div>
                <div class="slide-bg" style="background-image: url('assets/images/hero-img-2.jpg');"></div>
            </div>

            <!-- Overlay Content -->
            <div class="hero-overlay">
                <div class="hero-content">
                    <h1>Reliable Aircon Services you can trust</h1>
                    <p class="subtitle">Experience year-round comfort with our trusted aircond solutions. From expert
                        installation to fast repairs and regular maintenance.</p>
                    <ul class="benefits-list">
                        <li><i class="fas fa-check-circle"></i> Certified HVAC Technicians</li>
                        <li><i class="fas fa-check-circle"></i> Same Day Service Available</li>
                        <li><i class="fas fa-check-circle"></i> 100% Satisfaction Guarantee</li>
                    </ul>
                    <div class="hero-content-btns">
                        <a href="#services">Explore Our Services</a>
                        <a href="contact-us.php">Connect with us!</a>
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

    <!-- ==============about=========== -->

    <section id="about">
        <div class="about-upper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="about-upper-box">
                            <h5><span>❄️</span> ABOUT US</h5>
                            <h2>Professional HVAC service with a personal touch</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="about-upper-box right-upper">
                            <p class="exp">25+</p>
                            <p>Years of Experience In <br>Air Conditioning Solution</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-lower">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="about-lower-box">
                            <div class="about-lower-image">
                                <img src="<?= SITE_PATH; ?>assets/images/about-us-image.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-lower-box">
                            <div class="about-lower-content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit excepturi aperiam vel
                                    quae, deleniti exercitationem doloremque fugiat! Possimus, cum asperiores est alias
                                    veniam similique voluptatum dolor accusantium ipsam deleniti earum inventore ducimus
                                    reiciendis, beatae praesentium quibusdam et corporis voluptate! Earum?</p>
                                <br>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis placeat repudiandae
                                    eveniet, repellat quos quae adipisci illo vel eos maxime.</p>
                                <ul class="about-lists">
                                    <li>Years of Experience In Air Conditioning</li>
                                    <li>Long-Standing Air Conditioning Expertise</li>
                                    <li>Quality Air Conditioning Solutions</li>
                                </ul>
                                <div class="about-lower-btn">
                                    <a href="about-us.php"> More About us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================services============= -->

    <section id="services">
        <?php /* <div class="ac-element">
  <img src="<?= SITE_PATH; ?>assets/images/ac.png" alt="">
</div> */ ?>
        <div class="section-upper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-upper-box">
                            <h5><span>❄️</span> SERVICES</h5>
                            <h2>Our Comprehensive Aircon Services</h2>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6">
                        <div class="section-upper-box right-service-upper">
                            <p>We offer a wide range of HVAC services to meet all your heating and cooling needs. From
                                installations to repairs, our certified technicians are here to help.</p>
                            <div class="section-upper-box-btn">
                                <a href="#">Explore All Services</a>
                                <a href="#">Get a Free Estimate</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>


        <div class="services-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 ">
                        <div class="service-box">
                            <div class="service-image">
                                <img src="<?= SITE_PATH; ?>assets/images/serv-1.jpg" alt="">
                            </div>
                            <h3>Aircon Service</h3>
                            <div class="service-card-content">
                                <p>Expert installation of all types of air conditioning systems. We ensure optimal
                                    performance and energy efficiency.</p>
                                <a href="aircon-service.php"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-box">
                            <div class="service-image">
                                <img src="<?= SITE_PATH; ?>assets/images/serv-2.jpg" alt="">
                            </div>
                            <h3>Aircon Repair</h3>
                            <div class="service-card-content">
                                <p>Expert installation of all types of air conditioning systems. We ensure optimal
                                    performance and energy efficiency.</p>
                                <a href="aircon-repair.php"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-box">
                            <div class="service-image">
                                <img src="<?= SITE_PATH; ?>assets/images/serv-3.jpg" alt="">
                            </div>
                            <h3>Aircon Maintenance</h3>
                            <div class="service-card-content">
                                <p>Expert installation of all types of air conditioning systems. We ensure optimal
                                    performance and energy efficiency.</p>
                                <a href="aircon-maintenance.php"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ===================why-choose============== -->

    <section id="why-choose">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="why-choose-box">
                        <div class="why-choose-image">
                            <img src="<?= SITE_PATH; ?>assets/images/why-choose-image.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-choose-box">
                        <div class="why-choose-content">
                            <h5><span>❄️</span> WHY CHOOSE US</h5>
                            <h2>Why Choose Our Aircon Services?</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor hic consectetur modi
                                asperiores, saepe id omnis beatae at incidunt necessitatibus quas corrupti nemo
                                perspiciatis quia in autem corporis dicta, ab porro sunt maiores dolorem ullam! Itaque
                                qui quam laborum impedit in, sit, natus consequuntur quo molestiae, harum ratione
                                delectus odit.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium fugit maiores
                                consequuntur nulla dolore magnam quasi porro obcaecati reprehenderit, soluta tempora
                                corporis tempore eos ex officia nostrum voluptatum impedit quae quaerat atque quas
                                ducimus aut illo. Iusto, recusandae, accusamus temporibus aliquam, mollitia quod sunt
                                laboriosam ad illo expedita sint amet.</p>
                            <br>
                            <ul class="why-choose-lists">
                                <li>Experienced and Certified Technicians</li>
                                <li>24/7 Emergency Services Available</li>
                                <li>Transparent Pricing with No Hidden Fees</li>
                                <li>100% Satisfaction Guarantee on All Services</li>
                                <li>Environmentally Friendly Solutions</li>
                                <li>Free Estimates and Consultations</li>
                            </ul>
                            <div class="why-choose-btn">
                                <a href="#">Learn More About Us</a>
                                <a href="tel:+60163824522">Contact Us Today</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================other-services================= -->

    <section id="other-services">
        <div class="section-upper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-upper-box new-head">
                            <h5><span>❄️</span> OTHER SERVICES</h5>
                            <h2>Explore Our Other HVAC Services</h2>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6">
                        <div class="section-upper-box new-head right-service-upper">
                            <p>In addition to air conditioning, we offer a full range of HVAC services including heating
                                installation, ventilation solutions, and indoor air quality improvements.</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="other-service-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="other-service-card">
                            <i class="fa-solid fa-fan"></i>
                            <h3>Servicing</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, repudiandae et quis
                                mollitia quae iure!</p>
                            <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="other-service-card">
                            <i class="fa-solid fa-hammer"></i>
                            <h3>Maintenance & Repair</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, repudiandae et quis
                                mollitia quae iure!</p>
                            <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="other-service-card">
                            <i class="fa-brands fa-instalod"></i>
                            <h3>Aircon Installation</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, repudiandae et quis
                                mollitia quae iure!</p>
                            <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="other-service-card">
                            <i class="fa-solid fa-gem"></i>
                            <h3>Diagnostics</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, repudiandae et quis
                                mollitia quae iure!</p>
                            <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="other-service-card">
                            <i class="fa-solid fa-water"></i>
                            <h3>Heating & Water</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, repudiandae et quis
                                mollitia quae iure!</p>
                            <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="other-service-card">
                            <i class="fa-solid fa-bolt"></i>
                            <h3>Energy Efficiency</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, repudiandae et quis
                                mollitia quae iure!</p>
                            <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="other-service-card contact-card">
                            <div class="contact-content">
                                <p>Need Assistance?</p>
                                <h2>+1234 567 890</h2>
                                <a href="#">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <!-- ===================how-it-works================= -->

    <section id="how-it-works">
        <div class="works-upper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="work-upper-box">
                            <div class="work-upper-content">
                                <h5><span>❄️</span> HOW IT WORKS</h5>
                                <h2>Your trusted partner for smart efficient heating & cooling</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="work-upper-box">
                            <div class="right-work-upper">
                                <div class="review">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half"></i>
                                </div>
                                <div class="clients">
                                    <p>4.7/5</p>
                                    <p>Based on 500+ reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="works-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="works-below-box work-below-left">
                            <div class="works-below-text">
                                <h2>AC COOL N COOL</h2>
                            </div>
                            <div class="works-below-image">
                                <img src="<?= SITE_PATH; ?>assets/images/how-work-img.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="works-below-box">
                            <div class="works-below-steps">
                                <div class="work-step">
                                    <div class="work-step-number">
                                        <p>1.</p>
                                    </div>
                                    <div class="work-step-content">
                                        <h3>Schedule Your Service Visit</h3>
                                        <p>Book your appointment online or by phone at a time that works best for you.
                                            Our team confirms quickly.</p>
                                    </div>
                                </div>
                                <div class="work-step">
                                    <div class="work-step-number">
                                        <p>2.</p>
                                    </div>
                                    <div class="work-step-content">
                                        <h3>Inspection and System Check</h3>
                                        <p>Our certified technician visits your location to assess your AC system and
                                            identify the root issue.</p>
                                    </div>
                                </div>
                                <div class="work-step">
                                    <div class="work-step-number">
                                        <p>3.</p>
                                    </div>
                                    <div class="work-step-content">
                                        <h3>Fast and Expert Repair</h3>
                                        <p>We fix the problem using high-quality tools and parts to ensure your cooling
                                            system runs efficiently.</p>
                                    </div>
                                </div>
                                <div class="work-step">
                                    <div class="work-step-number">
                                        <p>4.</p>
                                    </div>
                                    <div class="work-step-content">
                                        <h3>Enjoy Reliable Cool Comfort</h3>
                                        <p>Relax in a perfectly cooled space with long-lasting performance and
                                            worry-free service assurance.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ==================web-content============ -->

    <section class="web-content">
        <div class="container">
            <h3>Importance Of Having Functional Air Con Systems In Malaysian Homes</h3>
            <p>In countries having a hot and humid climate, such as Malaysia, air-con units play an important role in
                making your lives more comfortable and convenient. No matter whether you live in Selangor or any nearby
                area, without a proper cooling system, there is a high chance that the inside of your home shall become
                extremely humid during the summers, making you sweaty and uncomfortable. Aircon installation KL can not
                only help in keeping your house comfortable, but may also help in purifying the indoor air by filtering
                out particles, bugs, odors, and so on.</p>

            <h3>Need for dependable HVAC maintenance</h3>
            <p>Air pollution is a major, ongoing issue in Malaysia, especially in major cities like Kuala Lumpur. It, in
                fact, is among the most polluted cities in the world. If you are a KL resident, then you might be
                acquainted with the alarming haze lingering in its air. This is a product of forest fires from nearby
                nations and the practice of burning various materials taking place in the region. Some of these
                materials might be hazardous as well. Hence, the smog you find across Mont Kiara and nearby areas is not
                just unpleasant to see, but can even hamper your health.</p>
            <p>To keep yourself protected from the harmful effects of air pollution, it is important to have a
                well-functioning HVAC system at home. However, just installing a cooling system is not enough. Taking
                its good care is vital to ensuring the long term functionality of the system. Just like your car needs
                tune-ups every now and then, proper Aircon service and cleaning are also needed to make sure that the
                system keeps running in good condition. This is where we come in. We at AC Cool N Cool Engineering can
                provide extremely competent aircon inspection, maintenance, and cleaning solutions across the regions of
                Mont Kiara, Kuala Lumpur, Selangor, and Ampang. Our professional technicians will see to it that your
                system is free from any mold that may cause causes allergy or health issues.</p>

            <h3>Advantages of having a proper cooling system at home</h3>
            <ul>
                <li><b>Better air quality:</b> Air-con units have the capability to remove moisture and filter out
                    harmful pollutants that may cause respiratory issues. This feature especially comes as a huge
                    advantage for families having members with allergies and asthma. However, your cooling system would
                    only be able to serve this benefit if you seek out professional Aircon cleaning solutions regularly,
                    and get its vents and coiled orderly cleaned.</li>
                <li><b>Improved Sleep:</b> Sleep always does come easy due to the sticky and humid weather prevalent in
                    Australia. The situation gets worse every summer, where you might end up tossing and turning every
                    night, feeling uncomfortable, without having a good cooling system at home. Hot temperatures tend to
                    interface with your natural temperature regulation, thereby causing irritation and profuse sweating.
                    All these issues can be solved by sleeping in an air-conditioned room.</li>
                <li><b>Better Security:</b> The crime rates in Kuala Lumpur are pretty high. Hence, to ensure the
                    security of your home and family members, you must take all the needed precautions against privacy
                    violations and robbery. Keeping all the doors and windows closed at night is among the key steps
                    involved in the process. Unfortunately, if you don’t have a cooling system installed at home, then
                    you might have to keep your windows open at night to let the cool air come in. This would create an
                    unsafe situation for your home, even if the windows have screens or grills.</li>
            </ul>

            <h3>Providing a dynamic range of professional aircon service</h3>
            <p>We at AC Cool N Cool Engineering are proud of being your one stop destination for aircond service KL. Our
                key goal is to provide our clients with the highest quality of installation, repair and installation
                services, right on schedule. We understand that time and cost is crucial for air con troubleshoot, and
                always try our best to go above and beyond our client’s expectations. Our team can work on multiple
                makes and models of aircon units.</p>
            <p>There are numerous types of aircon devices available today. They are often known by diverse names,
                depending on where and how they are installed. For example, if an aircond system is mounted on to the
                wall it is referred to as wall-mounted aircon and if it is mounted to the ceiling then it is known as
                ceiling aircon. Wall-mounted aircon units are frequently seen in both homes and offices, and they tend
                to have a compressor capacity of up to 3 HP. Among all the diverse options available, window-mounted
                aircon units are the most common ones. They are quite easy to install and uninstall, making carrying out
                aircond relocate services hassle-free. We at AC Cool N Cool Engineering can work on all of these models,
                enabling us to effectively cater to the requirements of all customers.</p>
            <p>No matter whether it is time for an annual tune-up, routine inspection, or even an upgrade, our team is
                committed to providing you with air con service residential and commercial that not just meets, but
                manages to exceed your requirements. By delivering premium-quality workmanship, we make beating the
                humid Malaysian summers extremely easy.</p>
        </div>
    </section>


    <!-- ====================faqs=============== -->

    <section id="faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="faqs-box">
                        <div class="faq-box-content">
                            <h5><span>❄️</span> FAQs</h5>
                            <h2>Frequently Asked Questions</h2>
                        </div>
                        <div class="accordion">
                            <div class="accordion-item">
                                <div class="accordion-header active">How often should I schedule aircond services?</div>
                                <div class="accordion-content active">At Ac Cool N Cool Services, we recommend
                                    scheduling aircond servicing every 3 to 4 months, especially in Malaysia’s humid
                                    climate. Regular servicing helps maintain cooling performance, energy efficiency,
                                    and extends your aircon's lifespan.</div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">What do aircond services include?</div>
                                <div class="accordion-content">Our standard aircond servicing includes: <br>
                                    • Cleaning of filters, blower, and fan coil<br>
                                    • Flushing and clearing of the drainage system<br>
                                    • Inspection of the cooling coil and electrical components<br>
                                    • System performance check<br>
                                    For deeper issues, we also offer chemical cleaning and gas top-up services.
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">How long will each air conditioner cleaning service take?
                                </div>
                                <div class="accordion-content">The duration depends on the type and condition of the
                                    unit: <br>
                                    • Standard servicing: 30–45 minutes per unit <br>
                                    • Chemical cleaning: 1 to 1.5 hours per unit <br>
                                    Our technicians work efficiently while ensuring thorough, quality service.
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">How can I tell if my aircond needs servicing?</div>
                                <div class="accordion-content">Common signs your aircon needs servicing include:<br>
                                    • Weak or uneven cooling<br>
                                    • Water leakage or dripping<br>
                                    • Bad odors from the unit<br>
                                    • Unusual noises<br>
                                    • Higher electricity bills<br>
                                    If you notice any of these, book a service with us right away.
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">Are your aircond services available for both residential
                                    and commercial units?</div>
                                <div class="accordion-content">Yes! Ac Cool N Cool Services provides expert aircond
                                    servicing for both residential and commercial properties across Malaysia. Whether
                                    it's a home split unit or a large office system, we've got the right tools and
                                    expertise.</div>
                            </div>
                        </div>
                        <div class="faq-box-btn">
                            <a href="#">View All FAQs</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faqs-box">
                        <div class="faqs-image">
                            <img src="<?= SITE_PATH; ?>assets/images/Faqs.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================cta=============== -->

    <?php include 'includes/cta.php'; ?>


    <!-- ===================Locations we cover=============== -->

    <?php include 'includes/locations.php'; ?>


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
                // dots[index].classList.add('active');
                currentSlide = index;
            }

            // Next slide
            // function nextSlide() {
            //     currentSlide = (currentSlide + 1) % slideCount;
            //     showSlide(currentSlide);
            // }

            // // Previous slide
            // function prevSlide() {
            //     currentSlide = (currentSlide - 1 + slideCount) % slideCount;
            //     showSlide(currentSlide);
            // }

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