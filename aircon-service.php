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
                <h1>Aircon Service</h1>
                <p><a href="index.php">Home</a> / Aircon Service</p>
            </div>
        </div>
    </section>

    <!-- =================service-content============= -->

    <section id="service-content-i">

        <div class="table-of-content-container">
            <div class="table-of-content-header">
                <h2>Table Of Contnet :</h2>
            </div>
            <ul>
                <div onclick="window.location.href='#intro'" class="content-list">
                    <h3>Expert Air Con Cleaning Solutions</h3> <i class="fa fa-right-long"></i>
                </div>
                <div onclick="window.location.href='#why'" class="content-list">
                    <h3>Why You should seek out Aircon cleaning service</h3> <i class="fa fa-right-long"></i>
                </div>
                <div onclick="window.location.href='#selangor'" class="content-list">
                    <h3>Aircond Service in Kuala Lumpur & Selangor</h3> <i class="fa fa-right-long"></i>
                </div>
                <div onclick="window.location.href='#cost'" class="content-list">
                    <h3>The Benefits of Cost-Effective Aircon Care</h3> <i class="fa fa-right-long"></i>
                </div>
                <div onclick="window.location.href='#benfit'" class="content-list">
                    <h3>How can you benefit from air con servicing?</h3> <i class="fa fa-right-long"></i>
                </div>
                <div onclick="window.location.href='#hvac'" class="content-list">
                    <h3>Comprehensive HVAC servicing</h3> <i class="fa fa-right-long"></i>
                </div>
            </ul>
        </div>
        <div class="content-of-container">
            <h1 id="intro">AC Cool N Cool Engineering Provides Competent Air Con Cleaning Solutions</h1>
            <p>There are many places in the world that has a majorly humid climate throughout the year, such as Kuala
                Lumpur. Hence, to live comfortably, many people here use air con systems for the majority of the months.
                To make sure that they are able to meet the needs of your family, you need to proper care of these HVAC
                systems as well. They especially have to be serviced and cleaned properly on a regular basis to see to
                it that they are able to work properly, without any malfunctions. This is where we come in. AC Cool N
                Cool Engineering is among the most trusted service providers of air con cleaning, maintenance, repairs,
                and installation.
            </p>
            <div class="img-div">
                <img src="<?= SITE_PATH; ?>assets/images/Aircon-service.webp" alt="">
            </div>

            <h2 id="why">There are several reasons why you should seek out Aircon cleaning service from us. Here are a
                few of
                them:
            </h2>

            <p><strong>Flow of cool air:</strong> With the repeated use of the cooling system, its filters are bound to
                get dirty. These
                filters are essentially installed in the machine to refrain the dust and dirt from coming out of the
                unit, so that people can enjoy fresh, cool air. However, if these filters are not cleaned routinely and
                simply left like that, it can eventually become a hindrance for the cool air to pass. Proper cleaning of
                these filters is needed to make sure that your air con unit is able to provide cool air seamlessly.
            </p>
            <p>
                <strong>Improve the quality of air:</strong> Regular cleaning of the air con unit is imperative to make
                sure that it
                manages to supply air that is not only cool, but also clean and healthy. No one wants to breathe in
                impure air. However, if the filters of your cooling system are full of dust and dirt it can cause
                bacteria to build up there. As a result, whenever you switch on the system, air shall pass through
                filters containing bacteria, fine dust particles, and pollutants. Breathing in such unclean air is not
                good for health, and can especially be problematic if you have kids or elderly individuals at home who
                are prone to falling sick. Breathing in impure air can also increase the chances of developing asthma
                and lungs. To steer clear of all these problems, timely <strong>air con cleaning</strong> and servicing
                are needed.
            </p>

        </div>
    </section>

    <section id="price" class="price-container">

        <div class="pricing-div-container">
            <div class="wall-mounted-card  pricing-card">
                <div class="Troubleshooting-container">
                    <h1>WALL MOUNTED AIRCON</h1>
                    <img src="<?= SITE_PATH; ?>assets/images/serv-1.jpg" alt="">
                    <div>
                        <h3>Troubleshooting</h3> <span>RM 75/unit</span>
                    </div>
                    <h5>Terms and Condition :</h5>
                    <p>Troubleshooting fee is chargeable whether to proceed or not to proceed with the repair.
                        Troubleshoot fee is waived only if the specific Aircon unit checked proceeds with chemical
                        service on the same day.</p>
                </div>
                <div class=" Basic-cleaning ">

                    <img src="<?= SITE_PATH; ?>assets/images/serv-1.jpg" alt="">
                    <h4>GENERAL SERVICE :</h4>
                    <ul>
                        <li>To remove and wash filters</li>
                        <li>To wipe the indoor body</li>
                        <li>To check the gas</li>
                        <li>To check the ampere</li>
                        <li>To check aircon indoor and outdoor unit health</li>
                    </ul>
                    <aside>
                        <div>
                            <p>1 Unit</p>
                            <span>RM 80</span>
                        </div>
                        <div>
                            <p>2 Unit</p>
                            <span>RM 70 each</span>
                        </div>
                        <div>
                            <p>3 Unit +</p>
                            <span>RM 60 each</span>
                        </div>
                    </aside>
                    <h5>Terms and Condition :</h5>
                    <p>This service includes only the washing of filters,
                        wiping of the indoor body, and general checks.
                    </p>
                    <p>No coil washing or checking of indoor or outdoor units is included.</p>

                    <h5>Must Read:</h5>
                    <p>
                        Not recommended if Aircon has water leaking <br />

                        Not recommended if Airco is not cooling.<br />

                        Service is suggested to be performed every 2-3 months.<br />

                        No warranty coverage for this service.
                    </p>
                    <h5>Additional Fees:</h5>
                    <p>
                        Please be informed that the troubleshooting fee of RM 75 for wall-mounted unit applies. <br />

                        If any units require repairs or parts replacement, additional costs will apply.
                    </p>
                </div>
                <div class="chemical-cleanig">
                    <img src="<?= SITE_PATH; ?>assets/images/serv-1.jpg" alt="">
                    <h2>CHEMICAL SERVICE UP TO 2.5HP</h2>
                    <ul>
                        <li>To remove filters and wash.</li>
                        <li>To use chemical and water to wash of Indoor cooling coil</li>
                        <li>To flush the drain pipe</li>
                        <li>To wash and clean the drain pan of Indoor unit</li>
                        <li>To fix water leaking (if any)</li>
                        <li>To use chemical and water to wash the outdoor condenser, fan blade and body</li>
                        <li>To check ampere.</li>
                        <li>To check gas pressure.</li>
                        <li>To check gas pressure.</li>
                    </ul>

                    <h3>Free Gas Top-Up:</h3>
                    <p>Gas top-up exceeding 20 psi will be additional charges.</p>
                    <h3>RESIDENTIAL LOT :</h3>
                    <aside>
                        <div>
                            <p>1 Unit: </p>
                            <span>RM 150</span>
                        </div>
                        <div>
                            <p>2 Unit: </p>
                            <span>RM 130 each</span>
                        </div>
                        <div>
                            <p>3 Unit: </p>
                            <span>RM 120 each</span>
                        </div>
                        <div>
                            <p>4 Unit: </p>
                            <span>RM 110 each</span>
                        </div>
                        <div>
                            <p>5 Unit or Above </p>
                            <span>RM 100 each</span>
                        </div>
                    </aside>
                    <h3>COMMERCIAL LOT :</h3>

                    <ul>
                        <p>RM 150 each</p>
                    </ul>
                    <h5>Additional Terms & Conditions:</h5>
                    <h6>Troubleshooting & Repair Charges:</h6>
                    <p>RM 75 for each unit</p>
                    <p>Troubleshooting and repair charges apply if a unit is diagnosed with the need for repairs or
                        parts replacements, and the chemical service cannot be completed the same day.</p>
                    <h5>
                        Quotation:
                    </h5>
                    <p> A quotation will be provided if any unit cannot be fixed on the spot.</p>
                    <h5>Water Leakage Warranty:</h5>
                    <p>45-day warranty on water leakage</p>
                </div>
            </div>
            <div class="wall-mounted-card  pricing-card">
                <div class="Troubleshooting-container">
                    <h1>CEILING CASSETTE AND CEILING EXPOSED</h1>
                    <img src="<?= SITE_PATH; ?>assets/images/serv-1.jpg" alt="">
                    <div>
                        <h3>Troubleshooting</h3> <span>RM 100/unit</span>
                    </div>
                    <h5>Terms and Condition :</h5>
                    <p>Troubleshooting fee is chargeable whether to proceed or not to proceed with the repair.
                        Troubleshoot fee is waived only if the specific Aircon unit checked proceeds with chemical
                        service on the same day.</p>
                </div>
                <div class=" Basic-cleaning  ">

                    <img src="<?= SITE_PATH; ?>assets/images/serv-1.jpg" alt="">
                    <h4>GENERAL SERVICE :</h4>
                    <ul>
                        <li>To remove and wash filters</li>
                        <li>To wipe the indoor body</li>
                        <li>To check the gas</li>
                        <li>To check the ampere</li>
                        <li>To check aircon indoor and outdoor unit health</li>
                    </ul>
                    <aside>
                        <div>
                            <p>1 Unit</p>
                            <span>RM 100</span>
                        </div>
                        <div>
                            <p>2 Unit</p>
                            <span>RM 90 each</span>
                        </div>
                        <div>
                            <p>3 Unit +</p>
                            <span>RM 80 each</span>
                        </div>
                    </aside>
                    <h5>Terms and Condition :</h5>
                    <p>This service includes only the washing of filters,
                        wiping of the indoor body, and general checks.
                    </p>
                    <p>No coil washing or checking of indoor or outdoor units is included.</p>

                    <h5>Must Read:</h5>
                    <p>
                        Not recommended if Aircon has water leaking <br />

                        Not recommended if Airco is not cooling.<br />

                        Service is suggested to be performed every 2-3 months.<br />

                        No warranty coverage for this service.
                    </p>
                    <h5>Additional Fees:</h5>
                    <p>
                        Please be informed that the troubleshooting fee of RM 100 for Ceiling cassette and ceiling
                        Exposed unit applies.
                    </p>
                    <p>
                        If any units require repairs or parts replacement, additional costs will apply.
                    </p>
                </div>
                <div class="chemical-cleanig">
                    <img src="<?= SITE_PATH; ?>assets/images/serv-1.jpg" alt="">
                    <h2>CHEMICAL SERVICE UP TO 2.5HP</h2>
                    <ul>
                        <li>To remove filters and wash.</li>
                        <li>To use chemical and water to wash of Indoor cooling coil</li>
                        <li>To flush the drain pipe</li>
                        <li>To wash and clean the drain pan of Indoor unit</li>
                        <li>To fix water leaking (if any)</li>
                        <li>To use chemical and water to wash the outdoor condenser, fan blade and body</li>
                        <li>To check ampere.</li>
                        <li>To check gas pressure.</li>
                        <li>To check gas pressure.</li>
                    </ul>

                    <h3>Free Gas Top-Up:</h3>
                    <p>Gas top-up exceeding 20 psi will be additional charges.</p>
                    <h3>RESIDENTIAL LOT :</h3>
                    <aside>
                        <div>
                            <p>1 Unit: </p>
                            <span>RM 300</span>
                        </div>
                        <div>
                            <p>2 Unit: </p>
                            <span>RM 280 each</span>
                        </div>
                        <div>
                            <p>3 Unit: </p>
                            <span>RM 260 each</span>
                        </div>
                    </aside>
                    <h3>COMMERCIAL LOT :</h3>
                    <aside>
                        <div>
                            <p>1 Unit: </p>
                            <span>RM 380</span>
                        </div>
                        <div>
                            <p>2 Unit: </p>
                            <span>RM 360 each</span>
                        </div>
                        <div>
                            <p>3 Unit: </p>
                            <span>RM 350 each</span>
                        </div>
                    </aside>
                    <h5>Additional Terms & Conditions:</h5>
                    <h6>Troubleshooting & Repair Charges:</h6>
                    <p>RM 100 for each unit</p>
                    <p>Troubleshooting and repair charges apply if a unit is diagnosed with the need for repairs or
                        parts replacements, and the chemical service cannot be completed the same day.</p>
                    <h5>
                        Quotation:
                    </h5>
                    <p> A quotation will be provided if any unit cannot be fixed on the spot.</p>
                    <h5>Water Leakage Warranty:</h5>
                    <p>45-day warranty on water leakage</p>
                </div>
            </div>
        </div>

    </section>

    <section class="service-cta">
        <div class="service-cta-div">
            <div class="left-side">
                <h1>Ready to enjoy the <br /> <span>benfits</span> of eco-cleaning <br />
                    service ?</h1>
            </div>
            <div class="right-side">
                <div class="btn-div">
                    <button onclick="window.location.href='tel:+60163824522'">Request a free estimate <i
                            class="fa fa-arrow-right-long"></i></button>
                    <button onclick="window.location.href='tel:+60163824522'"><i class="fa fa-phone"></i></button>
                    <button onclick="window.location.href='https://wa.me/60163824522'"><i class="fab fa-whatsapp"></i></button>
                </div>
                <p>Leave an application on our website now to schedule a cleaning appointment that works for you!</p>
            </div>

            <img src="<?= SITE_PATH; ?>assets/images/cta-star.png" alt="">
        </div>
    </section>

    <section class="content-div">
        <h4 id="selangor">Kuala Lumpur & Selangor Company</h4>
        <h1>Professional Aircon Service and Maintenance</h1>
        <h2>We at AC Cool N Cool Engineering provides expert aircond service KL to ensure the good health of your
            cooling system.</h2>
        <p>
            It is crucial that you take good care of your aircon unit to ensure that it works better and lasts longer.
            Timely aircon maintenance and servicing is needed to make sure that your system is running properly, and is
            capable enough to serve you for years to come. It also helps in keeping your energy expenses down, so that
            you do not have to burn a hole in your pockets by paying huge electricity bills.
        </p>
        <p>
            Through AC Cool N Cool Engineering, you can avail highly competent aircond service Selangor, as well as
            Kuala Lumpur. If your aircond is not providing cold enough air, then you must get in touch with us ASAP to
            schedule an air con troubleshoot and servicing.
        </p>

        <h3>Professional Aircon Inspection</h3>
        <p>No one wants to get stuck in the humid summer months with a malfunctioning Aircond. Spending even a single
            day with an aircon can be extremely inconvenient during the summers. However, you might end up in such a
            situation if your aircond has not been timely serviced. Typically, you must get your <strong>aircond
                servicing</strong> done
            through AC Cool N Cool Engineering before the summer season, to ensure that it is running in the perfect
            condition and would not give you any problems throughout the coming sweltering months.
        </p>
        <p>
            We carefully assess your air-conditioning unit and promptly take care of any issue that might give you
            problems later on. Even the smallest issues can eventually lead to something major, and might even cause
            your whole aircond system to breakdown. Hence, it’s vital that call AC Cool N Cool Engineering for
            professional aircon service before any such eventuality arises.
        </p>
        <h3>Your perfect Aircond servicing partner</h3>
        <p>
            Don’t sweat it out this summer and ensure your Aircon unit performs reliably and efficiently by getting it
            serviced through AC Cool N Cool Engineering.
        </p>
    </section>
    <!-- ===================cta=============== -->

    <?php include 'includes/cta.php'; ?>


    <!-- ===================cta=============== -->
    <section class="content-div">
        <h4 id="cost">Cost Effective Aircon Service</h4>
        <h1>
            Save Money And Hassles By Ensuring Timely Air Con Servicing Through AC Cool N Cool Engineering
        </h1>
        <p>
            Proper servicing of your cooling system is crucial for maintaining its long life and energy efficiency. So
            if you are searching for the ‘best Aircon service near me’ for its annual maintenance, then your search ends
            right here at AC Cool N Cool Engineering. Having years of experience in the industry, we can efficiently
            meet the home comfort needs of your family and exceed your service quality expectations.
        </p>

        <h3 id="benfit">
            How can you benefit from air con servicing?
        </h3>
        <ul>
            <li><strong>Savings:</strong> Timely servicing, maintenance and cleaning of HVAC systems ideally more than
                pay for themselves
                through higher efficiency and longevity. You are less likely to have to replace your cooling unit soon,
                if it is serviced properly.
            </li>
            <li>
                <strong>Peace:</strong> Expert servicing would facilitate fewer system failures and a longer life for
                your HVAC
                equipment. You can be assured that your HVAC unit shall now break down suddenly in the middle of
                scorching summers.
            </li>
            <li>
                <strong>Comfort:</strong> Unless it’s brand new or has been cleaned very recently, you shall observe a
                lot of dust built
                up in the filters of your unit. A properly cleaned and serviced cooling system would ensure better air
                quality at your home.
            </li>
        </ul>
        <p>
            As you contact AC Cool N Cool Engineering for <strong>Aircon cleaning service</strong>, our technicians
            would competently
            clean the condenser and filters of your system. This will ultimately extend the life of various parts of the
            unit and put off the need to replace them. Our technicians shall also check for damaged or worn-down parts
            and recommend their immediate replacement.
        </p>
        <h3 id="hvac">Comprehensive HVAC servicing</h3>
        <p>
            The wide range of <strong>air con servicing</strong> and cleaning solutions offered by AC Cool N Cool
            Engineering includes:
        </p>
        <ul>
            <li>Cleaning the condensing unit coils and evaporator coils</li>
            <li>Checking the amp draw of the compressor and all components</li>
            <li>Oiling the fan motors (if needed)</li>
            <li>Checking whether the belts are all tight and well adjusted</li>
            <li>Checking the operating pressures of the system against the manufacturer’s specifications</li>
            <li>Check the refrigerant level, thermostats and sensors of the system</li>
            <li>Tightening all electrical terminals</li>
            <li>Checking all ductwork for air leaks and damage</li>
        </ul>
    </section>


    <!-- =========================================== -->

    <?php include 'includes/service-location.php'; ?>


    <!-- ==============Footer=========== -->
    <?php include 'includes/footer.php'; ?>


    <!-- ==============scripts=========== -->
    <script src="assets/js/script.js"></script>
    <!-- bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function activateButton(button) {
            // Remove the active class from all buttons
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(btn => btn.classList.remove('active'));

            // Add the active class to the clicked button
            button.classList.add('active');
        }
    </script>

</body>

</html>