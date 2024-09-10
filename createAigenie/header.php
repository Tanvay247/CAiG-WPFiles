<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CreatAIGenie</title>

    <!-- CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/tailwind.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>
    <!-- Important: Include wp_head() -->
  
 
    <?php wp_head(); ?> <!-- Allows WordPress and plugins to insert scripts and styles -->
</head>
<body>
    <!-- Get header image dynamically -->
    <?php $logoimg = get_header_image(); ?>

    <!-- Navbar Section -->
    <!-- Navbar Section -->
    <div class="ud-header bg-transparent absolute top-0 left-0 z-40 w-full flex items-center">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="w-60 flex items-center">
                    <a href="https://creataigenie.com/" class="flex navbar-logo py-5 text-[#ae27eb] text-2xl font-bold">
                        <img src="<?php echo $logoimg; ?>" alt="Logo" width="30px">CreatAIGenie
                    </a>
                </div>
                <div class="flex items-center">
                    <button id="navbarToggler" class="lg:hidden focus:ring-2 ring-primary px-3 py-2 rounded-lg">
                        <span class="block w-6 h-0.5 bg-white mb-1"></span>
                        <span class="block w-6 h-0.5 bg-white mb-1"></span>
                        <span class="block w-6 h-0.5 bg-white mb-1"></span>
                    </button>
                    <nav id="navbarCollapse" class="nav-menu hidden lg:flex lg:items-center lg:gap-6"> <!-- Hidden on small screens, visible on larger screens -->
                        <?php
                        if (has_nav_menu('main-menu')) {
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main-menu',
                                    'menu_class' => 'flex flex-col lg:flex-row gap-6', // Responsive classes
                                )
                            );
                        } else {
                            echo 'Please assign a menu to the Main Menu location in the WordPress admin area.';
                        }
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar Section End -->
    <!-- Navbar Section End -->

    <!-- Include JavaScript in Footer -->
    <?php wp_footer(); ?> <!-- Ensures footer scripts are loaded -->

    <!-- Inline JavaScript for Navbar and Sticky Header -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            console.log("Inline script is running");

            // Sticky header functionality
            window.addEventListener("scroll", function () {
                const ud_header = document.querySelector(".ud-header");
                const logo = document.querySelector(".header-logo");
                const backToTop = document.querySelector(".back-to-top");

                if (ud_header && logo) {
                    if (window.pageYOffset > ud_header.offsetTop) {
                        ud_header.classList.add("sticky");
                        logo.src = "assets/images/logo/logo.svg";
                    } else {
                        ud_header.classList.remove("sticky");
                        logo.src = "assets/images/logo/logo-white.svg";
                    }
                }

                // Show/hide back-to-top button
                if (backToTop) {
                    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                        backToTop.style.display = "flex";
                    } else {
                        backToTop.style.display = "none";
                    }
                }
            });

            // Responsive navbar functionality
            const navbarToggler = document.getElementById("navbarToggler");
            const navbarCollapse = document.getElementById("navbarCollapse");

            if (navbarToggler && navbarCollapse) {
                navbarToggler.addEventListener("click", function () {
                    navbarToggler.classList.toggle("navbarTogglerActive");
                    navbarCollapse.classList.toggle("hidden");
                });
            }

            // Close navbar-collapse when a menu item (except submenu) is clicked
            const menuLinks = document.querySelectorAll("#navbarCollapse ul li:not(.submenu-item) a");
            if (menuLinks) {
                menuLinks.forEach(function (link) {
                    link.addEventListener("click", function () {
                        if (navbarToggler) {
                            navbarToggler.classList.remove("navbarTogglerActive");
                            navbarCollapse.classList.add("hidden");
                        }
                    });
                });
            }

            // FAQ accordion functionality
            const faqs = document.querySelectorAll(".single-faq");
            if (faqs) {
                faqs.forEach(function (faq) {
                    const faqBtn = faq.querySelector(".faq-btn");
                    if (faqBtn) {
                        faqBtn.addEventListener("click", function () {
                            const faqIcon = faq.querySelector(".icon");
                            const faqContent = faq.querySelector(".faq-content");

                            if (faqIcon) {
                                faqIcon.classList.toggle("rotate-180");
                            }

                            if (faqContent) {
                                faqContent.classList.toggle("hidden");
                            }
                        });
                    }
                });
            }

            // Initialize WOW.js
            if (typeof WOW === "function") {
                new WOW().init();
            }

            // Scroll top functionality
            const scrollToTop = function (element, to = 0, duration = 500) {
                const start = element.scrollTop;
                const change = to - start;
                const increment = 20;
                let currentTime = 0;

                const animateScroll = function () {
                    currentTime += increment;

                    const val = Math.easeInOutQuad(currentTime, start, change, duration);

                    element.scrollTop = val;

                    if (currentTime < duration) {
                        setTimeout(animateScroll, increment);
                    }
                };

                animateScroll();
            };

            const backToTopButton = document.querySelector(".back-to-top");
            if (backToTopButton) {
                backToTopButton.onclick = function () {
                    scrollToTop(document.documentElement);
                };
            }

            // Math function for easeInOutQuad
            Math.easeInOutQuad = function (t, b, c, d) {
                t /= d / 2;
                if (t < 1) return (c / 2) * t * t + b;
                t--;
                return (-c / 2) * (t * (t - 2) - 1) + b;
            };
        });
    </script>
</body>
</html>
