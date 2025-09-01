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

                <img style="width: 190px" src="{{ asset('assets/img/logo.png') }}" alt="">
                <!-- Trigger button -->

                <a href="{{ route('account') }}"><button type="button" class="gold-btn">
                        My Account
                    </button></a>








                {{-- <h1 class="sitename">SOFT</h1> --}}
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ Route('webhome') }}">HOME</a></li>
                    <li><a href="{{ route('webbusiness') }}" class="active">BUSINESS</a></li>
                    <li><a href="{{ route('webservice') }}">SERVICE</a></li>
                    <li><a href="{{ route('webcharity') }}">CHARITY</a></li>
                    <li><a href="{{ route('webexperty') }}">EXPERTS</a></li>
                    <li><a href="{{ route('webjob')}}">JOBS</a></li>
                    <li><a href="{{ route('webabout') }}">ABOUT US</a></li>

                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background">
            <div class="container position-relative">
                <h1>SoftMartt Business Solutions</h1>
                <p>Discover how SoftMartt empowers businesses to grow online, connect with their audience, and manage
                    marketing campaigns effortlessly with cutting-edge digital tools.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('webhome') }}">Home</a></li>
                        <li class="current">Business</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <div class="container">
            <div class="row">

                <div class="col-lg-8">

                    <!-- Blog Details Section -->
                    <section id="blog-details" class="blog-details section">
                        <div class="container">

                            <article class="article">

                                <div class="post-img">
                                    <img src="assets/img/blog/blog-1.jpg" alt="SoftMartt Business Solutions"
                                        class="img-fluid">
                                </div>

                                <h2 class="title">Grow Your Business with SoftMartt</h2>

                                <div class="meta-top">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                                            <a href="#">SoftMartt Team</a>
                                        </li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                                            <a href="#"><time datetime="2025-08-25">Aug 25, 2025</time></a>
                                        </li>
                                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i>
                                            <a href="#">0 Comments</a>
                                        </li>
                                    </ul>
                                </div><!-- End meta top -->

                                <div class="content">
                                    <p>
                                        SoftMartt is your partner for smarter business solutions. We help entrepreneurs
                                        and companies grow with innovative tools for marketing, client management, and
                                        operational efficiency.
                                    </p>

                                    <p>
                                        From launching new products to scaling existing operations, SoftMartt gives you
                                        insights and solutions to make decisions faster and smarter.
                                    </p>

                                    <blockquote>
                                        <p>
                                            "SoftMartt empowers businesses to succeed online and offline — smarter,
                                            faster, and easier."
                                        </p>
                                    </blockquote>

                                    <p>
                                        Our platform provides seamless tools for communication, marketing, and business
                                        analytics. Join thousands of businesses already leveraging SoftMartt to maximize
                                        their growth potential.
                                    </p>

                                    <h3>Why Choose SoftMartt?</h3>
                                    <p>
                                        SoftMartt integrates everything your business needs — client management,
                                        marketing analytics, and operational insights — into a single platform. Simplify
                                        your workflow and focus on what matters most.
                                    </p>

                                    <img src="assets/img/blog/blog-inside-post.jpg" class="img-fluid"
                                        alt="SoftMartt Tools">

                                    <h3>Boost Productivity & Sales</h3>
                                    <p>
                                        With SoftMartt, increase your sales, manage clients efficiently, and create
                                        marketing campaigns that truly convert. Our tools are designed for startups,
                                        SMEs, and large enterprises alike.
                                    </p>
                                </div><!-- End post content -->

                                <div class="meta-bottom">
                                    <i class="bi bi-folder"></i>
                                    <ul class="cats">
                                        <li><a href="#">Business</a></li>
                                    </ul>

                                    <i class="bi bi-tags"></i>
                                    <ul class="tags">
                                        <li><a href="#">SoftMartt</a></li>
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Marketing</a></li>
                                        <li><a href="#">Growth</a></li>
                                    </ul>
                                </div><!-- End meta bottom -->

                            </article>

                        </div>
                    </section><!-- /Blog Details Section -->

                    <!-- Blog Comments Section -->
                    <section id="blog-comments" class="blog-comments section">
                        <div class="container">
                            <h4 class="comments-count">0 Comments</h4>
                            <p>Be the first to comment on SoftMartt Business Solutions!</p>
                        </div>
                    </section>

                    <!-- Comment Form Section -->
                    <section id="comment-form" class="comment-form section">
                        <div class="container">
                            <form action="">
                                <h4>Post Comment</h4>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input name="name" type="text" class="form-control" placeholder="Your Name*">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="email" type="text" class="form-control" placeholder="Your Email*">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <textarea name="comment" class="form-control"
                                            placeholder="Your Comment*"></textarea>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Post Comment</button>
                                </div>
                            </form>
                        </div>
                    </section><!-- /Comment Form Section -->

                </div>

                <div class="col-lg-4 sidebar">

                    <div class="widgets-container">

                        <!-- Blog Author Widget -->
                        <div class="blog-author-widget widget-item">
                            <div class="d-flex flex-column align-items-center">
                                <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0"
                                    alt="SoftMartt Team">
                                <h4>SoftMartt Team</h4>
                                <div class="social-links">
                                    <a href="https://twitter.com/softmartt"><i class="bi bi-twitter"></i></a>
                                    <a href="https://facebook.com/softmartt"><i class="bi bi-facebook"></i></a>
                                    <a href="https://instagram.com/softmartt"><i class="bi bi-instagram"></i></a>
                                    <a href="https://linkedin.com/company/softmartt"><i class="bi bi-linkedin"></i></a>
                                </div>
                                <p>
                                    The SoftMartt team is dedicated to helping businesses grow with smart, integrated
                                    tools for marketing, client management, and operations.
                                </p>
                            </div>
                        </div><!--/Blog Author Widget -->

                        <!-- Search Widget -->
                        <div class="search-widget widget-item">
                            <h3 class="widget-title">Search</h3>
                            <form action="">
                                <input type="text" placeholder="Search SoftMartt Blogs">
                                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!--/Search Widget -->

                        <!-- Categories Widget -->
                        <div class="categories-widget widget-item">
                            <h3 class="widget-title">Categories</h3>
                            <ul class="mt-3">
                                <li><a href="#">Business <span>(25)</span></a></li>
                                <li><a href="#">Marketing <span>(12)</span></a></li>
                                <li><a href="#">SoftMartt Tips <span>(8)</span></a></li>
                                <li><a href="#">Success Stories <span>(10)</span></a></li>
                            </ul>
                        </div><!--/Categories Widget -->

                        <!-- Recent Posts Widget -->
                        <div class="recent-posts-widget widget-item">
                            <h3 class="widget-title">Recent Posts</h3>
                            <div class="post-item">
                                <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                                <div>
                                    <h4><a href="#">How SoftMartt Helps Startups Grow</a></h4>
                                    <time datetime="2025-08-01">Aug 1, 2025</time>
                                </div>
                            </div>
                            <div class="post-item">
                                <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                                <div>
                                    <h4><a href="#">Maximize Business Efficiency with SoftMartt</a></h4>
                                    <time datetime="2025-07-28">Jul 28, 2025</time>
                                </div>
                            </div>
                        </div><!--/Recent Posts Widget -->

                        <!-- Tags Widget -->
                        <div class="tags-widget widget-item">
                            <h3 class="widget-title">Tags</h3>
                            <ul>
                                <li><a href="#">SoftMartt</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">Growth</a></li>
                                <li><a href="#">Startup</a></li>
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