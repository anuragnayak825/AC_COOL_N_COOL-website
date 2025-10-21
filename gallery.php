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
                <h1>Gallery</h1>
                <p><a href="index.php">Home</a> / Gallery</p>
            </div>
        </div>
    </section>


    <!-- ==============gallery-section=========== -->

    <section id="gallery">
        <div class="gallery-container">
            <div class="gallery-header">
                <h2>Our Gallery</h2>
                <p>Explore how we bring cooling comfort to homes and businesses through our projects.</p>
            </div>

            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="<?= SITE_PATH; ?>assets/images/gal1.webp" alt="Mountain landscape" class="gallery-img">
                    <div class="gallery-actions">
                        <button class="action-btn"><i class="fas fa-expand"></i></button>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?= SITE_PATH; ?>assets/images/gal2.webp" alt="Beach sunset" class="gallery-img">
                    <div class="gallery-actions">
                        <button class="action-btn"><i class="fas fa-expand"></i></button>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?= SITE_PATH; ?>assets/images/gal3.webp" alt="City skyline" class="gallery-img">
                    <div class="gallery-actions">
                        <button class="action-btn"><i class="fas fa-expand"></i></button>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?= SITE_PATH; ?>assets/images/gal4.webp" alt="City architecture" class="gallery-img">
                    <div class="gallery-actions">
                        <button class="action-btn"><i class="fas fa-expand"></i></button>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?= SITE_PATH; ?>assets/images/gal5.webp" alt="Woman portrait" class="gallery-img">
                    <div class="gallery-actions">
                        <button class="action-btn"><i class="fas fa-expand"></i></button>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?= SITE_PATH; ?>assets/images/gal6.webp" alt="Man portrait" class="gallery-img">
                    <div class="gallery-actions">
                        <button class="action-btn"><i class="fas fa-expand"></i></button>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?= SITE_PATH; ?>assets/images/gal7.webp" alt="Abstract art" class="gallery-img">
                    <div class="gallery-actions">
                        <button class="action-btn"><i class="fas fa-expand"></i></button>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?= SITE_PATH; ?>assets/images/gal8.webp" alt="Colorful background" class="gallery-img">
                    <div class="gallery-actions">
                        <button class="action-btn"><i class="fas fa-expand"></i></button>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?= SITE_PATH; ?>assets/images/gal9.webp" alt="Colorful background" class="gallery-img">
                    <div class="gallery-actions">
                        <button class="action-btn"><i class="fas fa-expand"></i></button>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?= SITE_PATH; ?>assets/images/gal10.webp" alt="Colorful background" class="gallery-img">
                    <div class="gallery-actions">
                        <button class="action-btn"><i class="fas fa-expand"></i></button>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?= SITE_PATH; ?>assets/images/gal11.webp" alt="Colorful background" class="gallery-img">
                    <div class="gallery-actions">
                        <button class="action-btn"><i class="fas fa-expand"></i></button>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?= SITE_PATH; ?>assets/images/gal12.webp" alt="Colorful background" class="gallery-img">
                    <div class="gallery-actions">
                        <button class="action-btn"><i class="fas fa-expand"></i></button>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?= SITE_PATH; ?>assets/images/gal13.webp" alt="Colorful background" class="gallery-img">
                    <div class="gallery-actions">
                        <button class="action-btn"><i class="fas fa-expand"></i></button>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?= SITE_PATH; ?>assets/images/gal14.webp" alt="Colorful background" class="gallery-img">
                    <div class="gallery-actions">
                        <button class="action-btn"><i class="fas fa-expand"></i></button>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?= SITE_PATH; ?>assets/images/gal15.webp" alt="Colorful background" class="gallery-img">
                    <div class="gallery-actions">
                        <button class="action-btn"><i class="fas fa-expand"></i></button>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?= SITE_PATH; ?>assets/images/gal16.webp" alt="Colorful background" class="gallery-img">
                    <div class="gallery-actions">
                        <button class="action-btn"><i class="fas fa-expand"></i></button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Lightbox -->
        <div class="lightbox" id="lightbox">
            <button class="lightbox-close" id="lightbox-close">
                <i class="fas fa-times"></i>
            </button>
            <div class="lightbox-content">
                <img src="" alt="" class="lightbox-img" id="lightbox-img">
                <p class="lightbox-caption" id="lightbox-caption"></p>
            </div>
            <div class="lightbox-nav">
                <button class="lightbox-btn" id="lightbox-prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="lightbox-btn" id="lightbox-next">
                    <i class="fas fa-chevron-right"></i>
                </button>
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