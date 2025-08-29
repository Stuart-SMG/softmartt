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


<body class="team-page">

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
                    <li><a href="{{ route('webexperty') }}" class="active">EXPERTS</a></li>
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

        <!-- Page Title -->
        <div class="page-title dark-background">
            <div class="container position-relative">
                <h1>SoftMartt Local Experts</h1>
                <p>Find trusted Tanzanian experts for practical services, from construction to healthcare and community
                    support.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Experts</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Experts Section -->
        <section id="team" class="team section">

            <div class="container">

                <div class="row gy-5">

                    <!-- Cameraman -->
                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/experts/cameraman.jpg') }}" class="img-fluid"
                                alt="Cameraman">
                            <div class="social">
                                <a href="#"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Ashraf Juma</h4>
                            <span>Cameraman & Videographer</span>
                            <p>Capturing events, weddings, and professional videos with high-quality standards across
                                Tanzania.</p>
                        </div>
                    </div>

                    <!-- Fundi Ujenzi -->
                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/experts/fundi-ujenzi.jpg') }}" class="img-fluid"
                                alt="Fundi Ujenzi">
                            <div class="social">
                                <a href="#"><i class="bi bi-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Mohammed Salim</h4>
                            <span>Fundi Ujenzi</span>
                            <p>Reliable construction worker handling house renovations, repairs, and new builds
                                professionally.</p>
                        </div>
                    </div>

                    <!-- Fundi Piki Piki -->
                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/experts/fundi-pikipiki.jpg') }}" class="img-fluid"
                                alt="Fundi Piki Piki">
                            <div class="social">
                                <a href="#"><i class="bi bi-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Emmanuel Komba</h4>
                            <span>Motorbike Mechanic</span>
                            <p>Expert in repairing and maintaining piki piki motorcycles across Dar es Salaam and nearby
                                regions.</p>
                        </div>
                    </div>

                    <!-- Dokta wa Mifugo -->
                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/experts/dokta-mifugo.jpg" class="img-fluid" alt="Dokta wa Mifugo">
                            <div class="social">
                                <a href="#"><i class="bi bi-facebook"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Dr. Asha Mwakyusa</h4>
                            <span>Veterinarian</span>
                            <p>Providing livestock health services and animal care solutions throughout Tanzania.</p>
                        </div>
                    </div>

                    <!-- Anatairi Watoto -->
                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
                        <div class="member-img">
                            <img src="assets/img/experts/anatairi.jpg" class="img-fluid" alt="Child Care Expert">
                            <div class="social">
                                <a href="#"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Rashida Said</h4>
                            <span>Child Care Specialist</span>
                            <p>Professional child caretaker offering reliable services for busy parents in urban and
                                rural areas.</p>
                        </div>
                    </div>

                    <!-- Other Practical Expert -->
                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
                        <div class="member-img">
                            <img src="assets/img/experts/other-expert.jpg" class="img-fluid" alt="Other Expert">
                            <div class="social">
                                <a href="#"><i class="bi bi-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Juma Mkubwa</h4>
                            <span>Electrician & Handyman</span>
                            <p>Reliable electrician and handyman for residential and commercial work within Tanzanian
                                communities.</p>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Experts Section -->

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