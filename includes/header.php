<header>
    <div class="top-header">
        <div class="top-header-left">
            <div class="top-header-left-details">
                <div class="top-details-box">
                    <i class="fa fa-phone fa-shake"></i>
                    <p><a href="tel:+60163824522">+60 16-382 4522</a></p>
                </div>
                <div class="top-details-box top-details-box-time ">
                    <i class="fa fa-clock fa-bounce"></i>
                    <p>Mon - Sun: 09:00 AM – 22:00 PM</p>
                </div>
                <div class="top-details-box top-details-box-email">
                    <i class="fa fa-envelope fa-flip"></i>
                    <p><a href="#">info@accoolncool.com</a></p>
                </div>
            </div>
        </div>
        <div class="top-header-right">
            <div class="top-header-right-social">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <div class="main-header">
        <div class="main-header-left">
            <div class="main-header-left-logo">
                <a href="index.php"><img src="<?= SITE_PATH; ?>assets/images/logo-ac.png" alt=""></a>
            </div>
        </div>
        <div class="main-header-mid">
            <div class="main-header-menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About</a></li>
                    <li class="has-menu"><a href="">Services</a><i class="fa-solid fa-caret-down"></i>
                        <ul class="submenu">
                            <li><a href="aircon-service.php">Aircon Service</a></li>
                            <li><a href="aircon-repair.php">Aircon Repair</a></li>
                            <li><a href="aircon-installation.php">Aircon Installation</a></li>
                            <li><a href="aircon-maintenance.php">Aircon Maintenance</a></li>
                            <li><a href="residential-aircon-services.php">Residential Aircon Service</a></li>
                        </ul>
                    </li>
                    <li><a href="commercial-aircon-services.php">Commerical</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="https://www.accoolncool.com/blog/">Blogs</a></li>
                    <li><a href="contact-us.php">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="main-header-right">
            <div class="main-header-right-button">
                <a href="tel:+60163824522">Get a Free Estimate</a>
            </div>
        </div>

        <div class="menu-icon-div">
            <img onclick="opennav()" src="<?= SITE_PATH; ?>assets/images/menu-icon.svg" alt="" id="hamber">
        </div>

        <div class="side-menu-container ">
            <aside class="side-bar-div">
                <div class="heading">
                    <a href="index.php"><img src="<?= SITE_PATH; ?>assets/images/logo-ac.png" alt="">
                    </a>
                    <div class="main-header-right">
                        <div class="main-header-right-button">
                            <a href="tel:+60163824522">Get a Free Estimate</a>
                        </div>
                    </div>
                    <img onclick="colse()" src="<?= SITE_PATH; ?>assets/images/close_6318592.svg" alt="">
                </div>

                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About</a></li>
                    <li class="has-menu ">
                        <a onclick="submenu_open()">Services</a>
                        <i onclick="submenu_open()" class="fa-solid fa-caret-down"></i>
                        <ul class="submenu-list">
                            <li><a href="aircon-service.php">Aircon Service</a></li>
                            <li><a href="aircon-repair.php">Aircon Repair</a></li>
                            <li><a href="aircon-installation.php">Aircon Installation</a></li>
                            <li><a href="aircon-maintenance.php">Aircon Maintenance</a></li>
                            <li><a href="residential-aircon-services.php">Residential Aircon Service</a></li>
                        </ul>
                    </li>
                    <li><a href="commercial-aircon-services.php">Commerical</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="https://www.accoolncool.com/blog/">Blogs</a></li>
                    <li><a href="contact-us.php">Contact</a></li>
                </ul>



            </aside>
        </div>
    </div>
</header>

<script>
    const body = document.getElementsByTagName("body")[0]

    function opennav() {
        let sidebar = document.querySelector('.side-menu-container');
        sidebar.classList.add('active');
        if (sidebar.classList.contains('active')) {
            body.style.overflow = "hidden"; // Disable scroll when active
        }
        else {
            body.style.overflow = "auto"; // Enable scroll when not active
        }
    }
    function colse() {
        let sidebar = document.querySelector('.side-menu-container');
        let subside_bar = document.querySelector('.submenu-list');
        subside_bar.classList.remove('active')
        sidebar.classList.remove('active');
        if (sidebar.classList.contains('active')) {
            body.style.overflow = "hidden"; // Disable scroll when active
        } else {
            body.style.overflow = "auto"; // Enable scroll when not active
        }
    }
    function submenu_open() {
        let sidebar = document.querySelector('.submenu-list');
        sidebar.classList.toggle('active')
    }

</script>