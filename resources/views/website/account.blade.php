<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoftMartt Login</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Poppins&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <style>
        .gold-btn {
            background: rgb(242, 206, 4);
            color: #fff;
            border-radius: 999px;
            padding: 12px 22px;
            border: none;
            font-weight: 600;
            box-shadow: 0 6px 12px rgba(218, 165, 32, 0.4);
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .gold-btn:hover {
            background: #f3d34c;
            color: #000;
            transform: translateY(-2px);
        }

        .login-container {
            max-width: 450px;
            margin: 120px auto;
            padding: 40px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            font-weight: 700;
            margin-bottom: 25px;
            color: #333;
            text-align: center;
        }

        .login-container .form-control {
            border-radius: 50px;
            padding: 12px 20px;
            margin-bottom: 15px;
        }

        .login-container .login-footer {
            text-align: center;
            margin-top: 15px;
            font-size: 0.9rem;
        }

        .login-container .login-footer a {
            color: #f2ce04;
            text-decoration: none;
        }

        .login-container .login-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body class="index-page">

    <!-- Header -->
    <header style="background-color:#1e4356;" id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="{{ route('webhome') }}" class="logo d-flex align-items-center">
                <img style="width: 190px" src="{{ asset('assets/img/logo.png') }}" alt="">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('webhome') }}">HOME</a></li>
                    <li><a href="{{ route('webbusiness') }}">BUSINESS</a></li>
                    <li><a href="{{ route('webservice') }}">SERVICE</a></li>
                    <li><a href="{{ route('webcharity') }}">CHARITY</a></li>
                    <li><a href="{{ route('webexperty') }}">EXPERTS</a></li>
                    <li><a href="{{ route('webjob')}}">JOBS</a></li>
                    <li><a href="{{ route('webabout') }}">ABOUT US</a></li>
                    <li><a href="" class="active">MY ACCOUNT</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <!-- Main Section -->
    <main class="main">
        <div class="login-container">
            <h2>SoftMartt Login</h2>
            <form id="loginForm">
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                <button type="submit" class="gold-btn w-100">Login</button>
            </form>
            <div class="login-footer">
                <p>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer id="footer" class="footer dark-background">
        <div class="footer-newsletter">
            <div class="container text-center">
                <h4>Stay Connected with SoftMartt</h4>
                <form action="{{ asset('forms/newsletter.php') }}" method="post" class="php-email-form">
                    <div class="newsletter-form d-flex justify-content-center">
                        <input type="email" name="email" placeholder="Enter your email address" required>
                        <input type="submit" value="Subscribe">
                    </div>
                    <div class="loading">Loading...</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Thanks for subscribing!</div>
                </form>
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
                    Reserved</span></p>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">Stuart SMG</a>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Vendor JS -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Login API JS -->
    <script>
        const loginApiUrl = "{{ route('login') }}";

        document.getElementById('loginForm').addEventListener('submit', async function (e) {
            e.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            try {
                const response = await fetch(loginApiUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({ email, password })
                });

                const data = await response.json();

                if (response.ok) {
                    alert('Login successful!');
                    localStorage.setItem('token', data.token || '');
                    window.location.href = "{{ route('account') }}";
                } else {
                    alert(data.message || 'Login failed! Check your credentials.');
                }
            } catch (err) {
                console.error(err);
                alert('Network error. Try again later.');
            }
        });
    </script>

</body>

</html>