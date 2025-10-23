//  Faqs

document.querySelectorAll(".accordion-header").forEach((header) => {
  header.addEventListener("click", () => {
    const content = header.nextElementSibling;
    const isActive = content.classList.contains("active");
    document
      .querySelectorAll(".accordion-header")
      .forEach((h) => h.classList.remove("active"));
    document
      .querySelectorAll(".accordion-content")
      .forEach((item) => item.classList.remove("active"));
    if (!isActive) {
      header.classList.add("active");
      content.classList.add("active");
    }
  });
});

// Gallery Page

document.addEventListener("DOMContentLoaded", function () {
  const galleryItems = document.querySelectorAll(".gallery-item");
  const lightbox = document.getElementById("lightbox");
  const lightboxImg = document.getElementById("lightbox-img");
  const lightboxCaption = document.getElementById("lightbox-caption");
  const lightboxClose = document.getElementById("lightbox-close");
  const lightboxPrev = document.getElementById("lightbox-prev");
  const lightboxNext = document.getElementById("lightbox-next");

  let currentImageIndex = 0;
  const images = [];

  // Collect all image data
  galleryItems.forEach((item, index) => {
    const img = item.querySelector(".gallery-img");

    images.push({
      src: img.src,
      alt: img.alt,
    });

    // Open on click
    item.addEventListener("click", () => {
      openLightbox(index);
    });

    const expandBtn = item.querySelector(".action-btn");
    expandBtn.addEventListener("click", (e) => {
      e.stopPropagation();
      openLightbox(index);
    });
  });

  function openLightbox(index) {
    currentImageIndex = index;
    updateLightbox();
    lightbox.classList.add("open");
    document.body.style.overflow = "hidden";
  }

  function updateLightbox() {
    const image = images[currentImageIndex];
    lightboxImg.src = image.src;
    lightboxImg.alt = image.alt;
  }

  // Close lightbox
  lightboxClose.addEventListener("click", () => {
    lightbox.classList.remove("open");
    document.body.style.overflow = "";
  });

  // Navigate to previous image
  lightboxPrev.addEventListener("click", (e) => {
    e.stopPropagation();
    currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    updateLightbox();
  });

  // Navigate to next image
  lightboxNext.addEventListener("click", (e) => {
    e.stopPropagation();
    currentImageIndex = (currentImageIndex + 1) % images.length;
    updateLightbox();
  });

  // Close lightbox when clicking on the background
  lightbox.addEventListener("click", (e) => {
    if (e.target === lightbox) {
      lightbox.classList.remove("open");
      document.body.style.overflow = "";
    }
  });

  // Keyboard navigation
  document.addEventListener("keydown", (e) => {
    if (lightbox.classList.contains("open")) {
      if (e.key === "Escape") {
        lightbox.classList.remove("open");
        document.body.style.overflow = "";
      } else if (e.key === "ArrowLeft") {
        currentImageIndex =
          (currentImageIndex - 1 + images.length) % images.length;
        updateLightbox();
      } else if (e.key === "ArrowRight") {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        updateLightbox();
      }
    }
  });

  // Add simple animation on scroll
  const observerOptions = {
    root: null,
    rootMargin: "0px",
    threshold: 0.1,
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = 1;
        entry.target.style.transform = "translateY(0)";
      }
    });
  }, observerOptions);

  // Observe gallery items for animation
  galleryItems.forEach((item) => {
    item.style.opacity = 0;
    item.style.transform = "translateY(20px)";
    item.style.transition = "opacity 0.5s ease, transform 0.5s ease";
    observer.observe(item);
  });
});


// SIDE BAR OPNE  


// function opensidebar() {
//   const sidebar = document.querySelector('.side-menu-container');
//   sidebar.classList.toggle('open');
// }

// menu script 
// document.addEventListener("DOMContentLoaded", function () {
//             const hamber_icon = document.getElementsByClassName(".menu-icon-div");
//             hamber_icon.addEventListener("click", () => {
//                 alert("Hamburger icon clicked!");
//             });
//         });

