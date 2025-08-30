<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoftMartt</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <style>
        .gold-btn {
            color: black;
            padding: 12px 22px;
            border: none;
            border-radius: 999px;
            background: rgb(242, 206, 4);
            color: #fff;
            font: 600 14px/1 system-ui, -apple-system, Segoe UI, Roboto, Arial;
            letter-spacing: 0.4px;
            box-shadow: 0 6px 12px rgba(218, 165, 32, 0.4);
            cursor: pointer;
            transform: translateZ(0);
            transition: transform 0.1s ease;
        }

        .gold-btn:hover {
            background-color: transparent;
            color: white;
        }

        .gold-btn:active {
            transform: scale(0.96);
        }
    </style>
</head>

<body class="about-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img style="width: 190px" src="assets/img/logo.png" alt="">

                <a href="{{ route('account') }}"><button type="button" class="gold-btn">
                        My Account
                    </button></a>



                {{-- <h1 class="sitename">SOFT</h1> --}}
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ Route('webhome') }}">HOME</a></li>
                    <li><a href="{{ route('webbusiness') }}">BUSINESS</a></li>
                    <li><a href="{{ route('webservice') }}">SERVICE</a></li>
                    <li><a href="{{ route('webcharity') }}">CHARITY</a></li>
                    <li><a href="{{ route('webexperty') }}">EXPERTS</a></li>
                    <li><a href="{{ route('webjob')}}">JOBS</a></li>
                    <li><a href="{{ route('webabout') }}" class="active">ABOUT US</a></li>
                    {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Dropdown 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li> --}}

                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background">
            <div class="container position-relative">
                <h1>About Softmartt</h1>
                <p>Softmartt delivers innovative software solutions to help businesses grow and succeed in the digital
                    era.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">About Softmartt</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="Softmartt Office">
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
                    </div>
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>Innovative Solutions, Smart Results</h3>
                        <p class="fst-italic">
                            At Softmartt, we specialize in delivering cutting-edge software, mobile apps, and digital
                            solutions tailored to meet your business needs.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Custom software development for all
                                    industries.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Seamless integration with modern
                                    technologies.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>End-to-end support from concept to
                                    deployment.</span></li>
                        </ul>
                        <p>
                            Our mission is to empower businesses with technology that simplifies operations, enhances
                            productivity, and drives growth. With a team of expert developers, designers, and
                            strategists, we turn ideas into reality.
                        </p>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Clients Served</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Projects Completed</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Hours of Development</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Team Members</p>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Stats Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section">

            <div class="container">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                    {
                      "loop": true,
                      "speed": 600,
                      "autoplay": { "delay": 5000 },
                      "slidesPerView": "auto",
                      "pagination": { "el": ".swiper-pagination", "type": "bullets", "clickable": true },
                      "breakpoints": { "320": {"slidesPerView":2,"spaceBetween":40}, "480": {"slidesPerView":3,"spaceBetween":60}, "640": {"slidesPerView":4,"spaceBetween":80}, "992": {"slidesPerView":6,"spaceBetween":120} }
                    }
                </script>
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/smg.png" class="img-fluid"
                                alt="Client 1"></div>
                        <div class="swiper-slide"><img src="assets/img/clients/spidergraphics.png" class="img-fluid"
                                alt="Client 2"></div>
                        <div class="swiper-slide"><img src="assets/img/clients/spider1.png" class="img-fluid"
                                alt="Client 3"></div>

                    </div>
                </div>

            </div>

        </section><!-- /Clients Section -->

        <!-- Skills Section -->
        <section id="skills" class="skills section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Our Expertise</h2>
                <p>Showcasing key Tanzanian skills that drive industry and innovation.</p>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row skills-content skills-animation">

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill"><span>Technical Expertise</span> <i class="val">95%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><span>Health & Medical Expertise</span> <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><span>Mechanical & Engineering</span> <i class="val">43%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="43" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill"><span>Forestry & Lumbering</span> <i class="val">65%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><span>Agriculture & Farming</span> <i class="val">60%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><span>Renewable Energy & Tech</span> <i class="val">86%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin=""
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section><!-- /Skills Section -->


        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

            <div class="container section-title" data-aos="fade-up">
                <h2>What Our Clients Say</h2>
                <p>Feedback from businesses that trust Softmartt solutions.</p>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                    {
                      "loop": true,
                      "speed": 600,
                      "autoplay": {"delay":5000},
                      "slidesPerView":"auto",
                      "pagination":{"el":".swiper-pagination","type":"bullets","clickable":true}
                    }
                </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>CEO & Founder</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p><i class="bi bi-quote quote-icon-left"></i>Softmartt transformed our operations with
                                    an amazing software solution. Highly recommend!<i
                                        class="bi bi-quote quote-icon-right"></i></p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p><i class="bi bi-quote quote-icon-left"></i>Working with Softmartt was smooth,
                                    professional, and creative. Their team knows what they’re doing.<i
                                        class="bi bi-quote quote-icon-right"></i></p>
                            </div>
                        </div>

                        <!-- Add more testimonial slides as needed -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section -->

    </main>


    <footer id="footer" class="footer dark-background">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <h4>Stay Connected with SoftMartt</h4>
                        <p>Subscribe to our newsletter to get the latest updates on business growth tools, career
                            opportunities, expert services, and community initiatives!</p>
                        <form action="{{ asset('forms/newsletter.php') }}" method="post" class="php-email-form">
                            <div class="newsletter-form">
                                <input type="email" name="email" placeholder="Enter your email address" required>
                                <input type="submit" value="Subscribe">
                            </div>
                            <div class="loading">Loading...</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Thanks for subscribing! Stay tuned for the latest from SoftMartt.
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="{{ route('webhome') }}" class="d-flex align-items-center">
                        <span class="sitename">Softmartt</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>kimara</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>{{ $contact['mobile'] }}</span></p>
                        <p><strong>Email:</strong> <span>{{ $contact['email'] }}</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('webbusiness') }}">Business</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('webjob') }}">Jobs</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('webcharity') }}">Charity</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('webservice') }}">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('webexperty') }}">Experts</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Follow SoftMartt</h4>
                    <p>Stay updated with the latest business tools, career opportunities, expert services, and community
                        initiatives!</p>
                    <div class="social-links d-flex">
                        <a href="https://twitter.com/SoftMartt" target="_blank"><i class="bi bi-twitter"></i></a>
                        <a href="https://facebook.com/SoftMartt" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com/SoftMartt" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="https://linkedin.com/company/SoftMartt" target="_blank"><i
                                class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Softmartt</strong> <span>All Rights
                    Reserved</span>
            </p>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">Stuart SMG</a>
            </div>
        </div>

    </footer>


    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>