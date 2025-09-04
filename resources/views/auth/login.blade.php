<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoftMartt Login</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts & CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Poppins&display=swap" rel="stylesheet">
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

        #toast {
            position: fixed;
            top: 20px;
            right: 20px;
            min-width: 250px;
            background: #333;
            color: #fff;
            padding: 15px 20px;
            border-radius: 8px;
            display: none;
            z-index: 9999;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>

    <header style="background-color:#1e4356;" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
                <img style="width: 190px" src="{{ asset('assets/img/logo.png') }}" alt="SoftMartt Logo">
            </a>
            <nav class="navmenu">
                <ul>
                    <li><a href="{{ route('agent') }}">agent</a></li>
                    <li><a href="{{ route('admin') }}">admin</a></li>
                    <li><a href="#">HOME</a></li>
                    <li><a href="{{ route('webbusiness') }}">BUSINESS</a></li>
                    <li><a href="{{ route('webservice') }}">SERVICE</a></li>
                    <li><a href="{{ route('webcharity') }}">CHARITY</a></li>
                    <li><a href="{{ route('webexperty') }}">EXPERTS</a></li>
                    <li><a href="{{ route('webjob') }}">JOBS</a></li>
                    <li><a href="{{ route('webabout') }}">ABOUT US</a></li>
                    <li><a href="#" class="active">MY ACCOUNT</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">
        <div class="login-container">
            <h2>SoftMartt Login</h2>

            <form id="loginForm">
                @csrf
                <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
                <input type="password" id="password" class="form-control" placeholder="Enter your password" required>
                <button type="submit" class="gold-btn w-100">Login</button>
            </form>

            <div class="login-footer">
                <p>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
            </div>

            <div id="toast"><span id="toastMessage"></span></div>
        </div>
    </main>

    <footer class="footer dark-background">
        <div class="container text-center py-3">
            <p class="mb-0">&copy; {{ date('Y') }} SoftMartt. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script>
        const loginApiUrl = "{{ route('apilogin') }}";

        function showToast(message, bgColor = '#333') {
            const toast = document.getElementById('toast');
            toast.querySelector('#toastMessage').textContent = message;
            toast.style.background = bgColor;
            toast.style.display = 'block';
            setTimeout(() => toast.style.display = 'none', 3000);
        }

        document.getElementById('loginForm').addEventListener('submit', async function (e) {
            e.preventDefault();

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            try {
                const response = await fetch(loginApiUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    },
                    body: JSON.stringify({ email, password })
                });

                const data = await response.json();

                if (response.ok) {
                    // store token if your controller returns it
                    localStorage.setItem('token', data.token || '');
                    showToast('Login successful!', '#28a745');

                    // redirect to dashboard
                    setTimeout(() => window.location.href = "#", 1200);
                } else {
                    showToast(data.message || 'Invalid credentials!', '#dc3545');
                }
            } catch (err) {
                console.error(err);
                showToast('Network error. Try again.', '#dc3545');
            }
        });
    </script>

</body>

</html>