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
            margin-right: 160px
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


<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">

                <img style="width: 190px" src="assets/img/logo.png" alt="">


                <a href="{{ route('account') }}"><button type="button" class="gold-btn">
                        My Account
                    </button></a>








                {{-- <h1 class="sitename">SOFT</h1> --}}
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ Route('webhome') }}" class="active">HOME</a></li>
                    <li><a href="{{ route('webbusiness') }}">BUSINESS</a></li>
                    <li><a href="{{ route('webservice') }}">SERVICE</a></li>
                    <li><a href="{{ route('webcharity') }}">CHARITY</a></li>
                    <li><a href="{{ route('webexperty') }}">EXPERTS</a></li>
                    <li><a href="{{ route('webjob')}}">JOBS</a></li>
                    <li><a href="{{ route('webabout') }}">ABOUT US</a></li>
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

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <!-- <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in"> -->

            <div id="hero-carousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <div class="container position-relative">

                    <div class="carousel-item active">
                        <div class="carousel-container">
                            <h2>Welcome to Soft</h2>
                            <p>Softmartt is the Leading Online Marketing for your business. Connect with the best
                                Business, services ,jobs and Experts all over the world.</p>
                            <a href="#about" class="btn-get-started">Read More</a>
                        </div>
                    </div><!-- End Carousel Item -->

                    <div class="carousel-item">
                        <div class="carousel-container">
                            <h2>Global Affairs</h2>
                            <p>To make sure our customers get to express and advertise their companies and work all over
                                the world.

                            </p>
                            <a href="#about" class="btn-get-started">Read More</a>
                        </div>
                    </div><!-- End Carousel Item -->

                    <div class="carousel-item">
                        <div class="carousel-container">
                            <h2>All time-Shop</h2>
                            <p>Making Softmartt a place for all the things people may need all over the world all the
                                time.</p>
                            <a href="#about" class="btn-get-started">Read More</a>
                        </div>
                    </div><!-- End Carousel Item -->

                    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                    </a>

                    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                    </a>

                    <ol class="carousel-indicators"></ol>

                </div>

            </div>

        </section><!-- /Hero Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item item-cyan position-relative">
                            <div class="icon">
                                <i class="bi bi-briefcase"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>Business Growth</h3>
                            </a>
                            <p>
                                SoftMartt Online Marketing App is built to revolutionize how businesses
                                approach digital marketing. With tools for social media, SEO, email campaigns,
                                and analytics, it empowers businesses to expand their online presence,
                                connect with customers, and drive unstoppable growth.
                            </p>
                        </div>
                    </div>

                    <!-- End Service Item -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item item-orange position-relative">
                            <div class="icon">
                                <i class="bi bi-people"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>Jobs & Opportunities</h3>
                            </a>
                            <p>
                                SoftMartt creates new opportunities by connecting businesses with talent
                                and clients worldwide. From digital marketers to freelancers, it helps
                                people find jobs, grow their careers, and build lasting professional
                                networks in the digital space.
                            </p>
                        </div>
                    </div>

                    <!-- End Service Item -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item item-teal position-relative">
                            <div class="icon">
                                <i class="bi bi-mortarboard"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>Experts & Services</h3>
                            </a>
                            <p>
                                SoftMartt brings together experts and service providers, giving them
                                a platform to showcase skills and connect with businesses. From
                                digital marketing to technical support, it’s the place where
                                professionals offer solutions and clients find the right expertise.
                            </p>
                        </div>
                    </div>


                    <!-- End Service Item -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item item-red position-relative">
                            <div class="icon">
                                <i class="bi bi-heart"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>Charity & Giving Back</h3>
                            </a>
                            <p>
                                SoftMartt is more than just business — it’s also about impact.
                                The platform creates opportunities to support charities, empower
                                communities, and give back by connecting donors, volunteers, and
                                organizations in need.
                            </p>
                            <a href="service-details.html" class="stretched-link"></a>
                        </div>
                    </div>

                    <!-- End Service Item -->
                </div>

            </div>

        </section><!-- /Featured Services Section -->

        <!-- About Section -->
        <section id="about" class="about section light-background">

            <div class="container">

                <div class="row gy-4">
                    <!-- Left Column: Image + Video -->
                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="About SoftMartt">
                        <a href="https://softmartt.web.app" class="glightbox pulsating-play-btn"></a>
                    </div>

                    <!-- Right Column: Content -->
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>About SoftMartt Online Marketing App</h3>
                        <p class="fst-italic">
                            SoftMartt is a dynamic digital platform designed to transform the way businesses,
                            professionals, and communities connect online.
                            It combines powerful marketing tools with opportunities for growth, expertise, and social
                            impact.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i>
                                <span><strong>Business Growth:</strong> Boost your online presence with social media,
                                    SEO, email marketing, and analytics tools.</span>
                            </li>
                            <li><i class="bi bi-check2-all"></i>
                                <span><strong>Jobs & Opportunities:</strong> Connect talent with businesses worldwide,
                                    fostering careers and professional growth.</span>
                            </li>
                            <li><i class="bi bi-check2-all"></i>
                                <span><strong>Experts & Services:</strong> Showcase skills, offer services, and link
                                    professionals with clients seamlessly.</span>
                            </li>
                            <li><i class="bi bi-check2-all"></i>
                                <span><strong>Charity & Giving Back:</strong> Support communities, charities, and causes
                                    by connecting donors, volunteers, and organizations.</span>
                            </li>
                        </ul>
                        <p>
                            Whether you are a business owner, freelancer, expert, or community leader, SoftMartt
                            provides an all-in-one solution to grow, connect, and make a real impact in the digital
                            world.
                        </p>
                    </div>
                </div>

            </div>

        </section>

        <!-- /About Section -->

        <!-- Features Section -->
        <section id="features" class="features section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Features</h2>
                <p>Discover how SoftMartt empowers businesses, professionals, and communities in the digital world.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <!-- Feature 1: Business Growth -->
                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                        <img src="assets/img/features-1.svg" class="img-fluid" alt="Business Growth">
                    </div>
                    <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                        <h3>Business Growth</h3>
                        <p class="fst-italic">
                            Boost your online presence and reach your target audience with SoftMartt’s suite of
                            marketing tools.
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i><span>Manage social media campaigns effortlessly.</span></li>
                            <li><i class="bi bi-check"></i><span>Optimize your website for search engines (SEO).</span>
                            </li>
                            <li><i class="bi bi-check"></i><span>Track performance with detailed analytics.</span></li>
                        </ul>
                    </div>
                </div><!-- Features Item -->

                <!-- Feature 2: Jobs & Opportunities -->
                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out"
                        data-aos-delay="200">
                        <img src="assets/img/features-2.svg" class="img-fluid" alt="Jobs & Opportunities">
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                        <h3>Jobs & Opportunities</h3>
                        <p class="fst-italic">
                            Connect talent with businesses and discover new career paths in the digital economy.
                        </p>
                        <p>
                            SoftMartt enables freelancers, professionals, and job seekers to find the right
                            opportunities, grow their careers, and build meaningful networks worldwide.
                        </p>
                    </div>
                </div><!-- Features Item -->

                <!-- Feature 3: Experts & Services -->
                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                        <img src="assets/img/features-3.svg" class="img-fluid" alt="Experts & Services">
                    </div>
                    <div class="col-md-7" data-aos="fade-up">
                        <h3>Experts & Services</h3>
                        <p>
                            Showcase your skills and offer services on a platform that connects professionals with
                            clients worldwide.
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i><span>Provide solutions in marketing, tech, and creative
                                    fields.</span></li>
                            <li><i class="bi bi-check"></i><span>Expand your professional reach globally.</span></li>
                            <li><i class="bi bi-check"></i><span>Gain recognition and build your reputation
                                    online.</span></li>
                        </ul>
                    </div>
                </div><!-- Features Item -->

                <!-- Feature 4: Charity & Giving Back -->
                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                        <img src="assets/img/features-4.svg" class="img-fluid" alt="Charity & Giving Back">
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                        <h3>Charity & Giving Back</h3>
                        <p class="fst-italic">
                            Make an impact in communities by supporting charities, volunteering, and giving back.
                        </p>
                        <p>
                            SoftMartt connects donors, volunteers, and organizations to create meaningful social impact
                            and promote community growth.
                        </p>
                    </div>
                </div><!-- Features Item -->

            </div>

        </section>

        <!-- /Features Section -->

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