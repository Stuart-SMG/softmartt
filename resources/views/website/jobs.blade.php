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


<body class="blog-details-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img style="width: 190px" src="assets/img/logo.png" alt="">
                <button type="button" class="gold-btn" aria-label="My Account">
                    my account
                </button>


                {{-- <h1 class="sitename">SOFT</h1> --}}
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ Route('webhome') }}">HOME</a></li>
                    <li><a href="{{ route('webbusiness') }}">BUSINESS</a></li>
                    <li><a href="{{ route('webservice') }}">SERVICE</a></li>
                    <li><a href="{{ route('webcharity') }}">CHARITY</a></li>
                    <li><a href="{{ route('webexperty') }}">EXPERTS</a></li>
                    <li><a href="{{ route('webjob')}}" class="active">JOBS</a></li>
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

        <!-- Page Title -->
        <div class="page-title dark-background">
            <div class="container position-relative">
                <h1>Job Details</h1>
            <p>Discover available jobs posted by SoftMartt. Find trusted local opportunities in Tanzania.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Job Details</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row">

            <!-- Job Content -->
            <div class="col-lg-8">

                <section id="job-details" class="job-details section">
                    <div class="container">

                        <article class="article">

                            <div class="post-img">
                                <img src="assets/img/jobs/job-1.jpg" alt="" class="img-fluid">
                            </div>

                            <h2 class="title">Fundi Ujenzi / Construction Worker</h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-building"></i> <a
                                            href="job-details.html">SoftMartt</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-geo-alt"></i> <a
                                            href="job-details.html">Dar es Salaam, Tanzania</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="job-details.html"><time datetime="2025-08-28">Aug 28,
                                                2025</time></a></li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">
                                <p>
                                    SoftMartt is looking for a reliable Fundi Ujenzi to handle construction projects
                                    within Tanzanian communities. Tasks include house renovations, minor repairs, and
                                    assisting in new building projects.
                                </p>

                                <h3>Job Requirements</h3>
                                <ul>
                                    <li>Proven experience in construction or renovation works</li>
                                    <li>Knowledge of safety regulations and local construction standards</li>
                                    <li>Ability to work in teams and independently</li>
                                    <li>Available in Dar es Salaam and nearby regions</li>
                                </ul>

                                <h3>Responsibilities</h3>
                                <ul>
                                    <li>Assist in building, repairing, and renovating structures</li>
                                    <li>Ensure materials are used efficiently and safely</li>
                                    <li>Report progress to supervisors and maintain high-quality work</li>
                                    <li>Collaborate with other SoftMartt experts on multi-skill projects</li>
                                </ul>

                                <h3>Application Process</h3>
                                <p>
                                    Interested candidates can apply by sending their CV and contact details via
                                    WhatsApp or email. SoftMartt provides opportunities for local workers with reliable
                                    skills and experience.
                                </p>

                                <img src="assets/img/jobs/job-inside.jpg" class="img-fluid" alt="">

                            </div><!-- End job content -->

                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">Construction</a></li>
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    <li><a href="#">Fundi</a></li>
                                    <li><a href="#">SoftMartt</a></li>
                                    <li><a href="#">Tanzania</a></li>
                                </ul>
                            </div><!-- End meta bottom -->

                        </article>

                    </div>
                </section><!-- /Job Details Section -->

            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 sidebar">

                <div class="widgets-container">

                    <!-- Company Widget -->
                    <div class="company-widget widget-item">
                        <div class="d-flex flex-column align-items-center">
                            <img src="assets/img/jobs/company-logo.jpg" class="rounded-circle flex-shrink-0" alt="">
                            <h4>SoftMartt</h4>
                            <div class="social-links">
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-twitter-x"></i></a>
                            </div>
                            <p>
                                SoftMartt connects Tanzanians with local experts and job opportunities, ranging from
                                construction and healthcare to creative services.
                            </p>
                        </div>
                    </div><!--/Company Widget -->

                    <!-- Search Widget -->
                    <div class="search-widget widget-item">
                        <h3 class="widget-title">Search Jobs</h3>
                        <form action="">
                            <input type="text" placeholder="Search jobs...">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>
                    </div><!--/Search Widget -->

                    <!-- Job Categories Widget -->
                    <div class="categories-widget widget-item">
                        <h3 class="widget-title">Job Categories</h3>
                        <ul class="mt-3">
                            <li><a href="#">Construction <span>(12)</span></a></li>
                            <li><a href="#">Healthcare <span>(8)</span></a></li>
                            <li><a href="#">Transport <span>(6)</span></a></li>
                            <li><a href="#">Child Care <span>(4)</span></a></li>
                            <li><a href="#">Creative & Media <span>(10)</span></a></li>
                        </ul>
                    </div><!--/Job Categories Widget -->

                    <!-- Recent Jobs Widget -->
                    <div class="recent-posts-widget widget-item">
                        <h3 class="widget-title">Recent Jobs</h3>

                        <div class="post-item">
                            <img src="assets/img/jobs/job-recent-1.jpg" alt="" class="flex-shrink-0">
                            <div>
                                <h4><a href="job-details.html">Dokta wa Mifugo</a></h4>
                                <time datetime="2025-08-01">Aug 1, 2025</time>
                            </div>
                        </div>

                        <div class="post-item">
                            <img src="assets/img/jobs/job-recent-2.jpg" alt="" class="flex-shrink-0">
                            <div>
                                <h4><a href="job-details.html">Fundi Piki Piki</a></h4>
                                <time datetime="2025-07-28">Jul 28, 2025</time>
                            </div>
                        </div>

                        <div class="post-item">
                            <img src="assets/img/jobs/job-recent-3.jpg" alt="" class="flex-shrink-0">
                            <div>
                                <h4><a href="job-details.html">Anatairi Watoto</a></h4>
                                <time datetime="2025-07-15">Jul 15, 2025</time>
                            </div>
                        </div>

                    </div><!--/Recent Jobs Widget -->

                    <!-- Tags Widget -->
                    <div class="tags-widget widget-item">
                        <h3 class="widget-title">Tags</h3>
                        <ul>
                            <li><a href="#">Fundi</a></li>
                            <li><a href="#">Expert</a></li>
                            <li><a href="#">SoftMartt</a></li>
                            <li><a href="#">Tanzania</a></li>
                            <li><a href="#">Jobs</a></li>
                        </ul>
                    </div><!--/Tags Widget -->

                </div>

            </div>

        </div>
    </div>

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