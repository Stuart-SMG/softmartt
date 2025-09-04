<!DOCTYPE html>
<html lang="en" data-bs-theme="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Map CSS -->
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/libs.bundle.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.bundle.css') }}">

    <!-- Title -->
    <title>Softmartt</title>
</head>

<body>
    <!-- OFFCANVAS -->
    <!-- Offcanvas: Demo -->
    <form class="offcanvas offcanvas-end" id="offcanvasDemo" tabindex="-1">
        <div class="offcanvas-body">

            <!-- Close -->
            <a class="btn-close" href="#" data-bs-dismiss="offcanvas" aria-label="Close"></a>

            <!-- Image -->
            <div class="text-center">
                <img src="assets/img/illustrations/designer-life.svg" alt="..." class="img-fluid mb-3">
            </div>



            <!-- Text -->
            <p class="text-center mb-4">
                Set preferences that will favour you!
            </p>

            <!-- Divider -->
            <hr class="mb-4">

            <!-- Heading -->
            <h4 class="mb-1">
                Color Scheme
            </h4>

            <!-- Text -->
            <p class="small text-body-secondary mb-3">
                Overall light or dark presentation.
            </p>

            <!-- Button group -->
            <div class="btn-group-toggle row gx-2 mb-4">
                <div class="col">
                    <input class="btn-check" name="colorScheme" id="colorSchemeLight" type="radio" value="light">
                    <label class="btn w-100 btn-white" for="colorSchemeLight">
                        <i class="fe fe-sun me-2"></i> Light Mode
                    </label>
                </div>
                <div class="col">
                    <input class="btn-check" name="colorScheme" id="colorSchemeDark" type="radio" value="dark">
                    <label class="btn w-100 btn-white" for="colorSchemeDark">
                        <i class="fe fe-moon me-2"></i> Dark Mode
                    </label>
                </div>
            </div>

        </div>
        <div class="offcanvas-header">

            <!-- Button -->
            <button type="submit" class="btn w-100 btn-primary mt-auto">
                Preview
            </button>

        </div>
    </form>


    <!-- NAVIGATION -->
    <div data-bs-theme="">
        <nav class="navbar navbar-vertical fixed-start navbar-expand-md" id="sidebar">
            <div class="container-fluid">

                <!-- Toggler (for mobile) -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse"
                    aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Brand -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/logo.png') }}" class="navbar-brand-img mx-auto" alt="...">
                </a>

                <!-- User (Mobile) -->
                <div class="navbar-user d-md-none">
                    <div class="dropdown">
                        <a href="#" id="sidebarIcon" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="avatar avatar-sm avatar-online">
                                <img src="{{ asset('assets/img/avatars/profiles/avatar-1.jpg') }}"
                                    class="avatar-img rounded-circle" alt="...">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="{{ url('profile') }}" class="dropdown-item">Profile</a>
                            <hr class="dropdown-divider">
                            <a href="{{ route('logout') }}" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidebarCollapse">

                    <!-- Search (mobile only) -->
                    <form class="mt-4 mb-3 d-md-none">
                        <div class="input-group input-group-rounded input-group-merge input-group-reverse">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-text"><span class="fe fe-search"></span></div>
                        </div>
                    </form>

                    <!-- Sidebar Menu -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('homee') }}">
                                <i class="fe fe-home"></i> Admin Dashboard
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#sidebarPages" data-bs-toggle="collapse">
                                <i class="fe fe-eye"></i> View
                            </a>
                            <div class="collapse" id="sidebarPages">
                                <ul class="nav nav-sm flex-column ms-3">
                                    <li class="nav-item"><a href="{{ route('all.agent') }}" class="nav-link">All
                                            agents</a>
                                    </li>
                                    <li class="nav-item"><a href="{{ route('all.customer') }}" class="nav-link">All
                                            Customers</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#sidebarAuth" data-bs-toggle="collapse">
                                <i class="fe fe-user"></i> Authentication
                            </a>
                            <div class="collapse" id="sidebarAuth">
                                <ul class="nav nav-sm flex-column ms-3">
                                    <li class="nav-item">

                                        <a class="nav-link" href="{{ route('admin.create') }}">
                                            Register new user
                                        </a>

                                        {{-- <div class="collapse" id="sidebarRegister">
                                            <ul class="nav nav-sm flex-column ms-3">
                                                <li class="nav-item"><a href="{{ url('admin.create.') }}"
                                                        class="nav-link">Agent</a></li>
                                                <li class="nav-item"><a href="{{ url('register/customer') }}"
                                                        class="nav-link">Customer</a></li>
                                            </ul>
                                        </div> --}}
                                    </li>


                                    <li class="nav-item">
                                        <a class="nav-link collapsed" href="#sidebarPassword" data-bs-toggle="collapse">
                                            Password reset
                                        </a>
                                        <div class="collapse" id="sidebarPassword">
                                            <ul class="nav nav-sm flex-column ms-3">
                                                <li class="nav-item"><a href="{{ route('password.request') }}"
                                                        class="nav-link">Forget password</a></li>
                                                <li class="nav-item"><a href="{{ route('password.request') }}"
                                                        class="nav-link">Change password</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    <!-- Push content down -->
                    <div class="mt-auto"></div>

                    <!-- Customize -->
                    <div class="mb-4">
                        <a class="btn w-100 btn-primary" data-bs-toggle="offcanvas" href="#offcanvasDemo">
                            <i class="fe fe-sliders me-2"></i> Customize
                        </a>
                    </div>

                    <!-- User (Desktop) -->
                    <div class="navbar-user d-none d-md-flex">
                        <a class="navbar-user-link" data-bs-toggle="offcanvas" href="#sidebarOffcanvasActivity">
                            <i class="fe fe-bell"></i>
                        </a>
                        <div class="dropup">
                            <a href="#" id="sidebarIconCopy" class="dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="avatar avatar-sm avatar-online">
                                    <img src="{{ asset('assets/img/avatars/profiles/avatar-1.jpg') }}"
                                        class="avatar-img rounded-circle" alt="...">
                                </div>
                            </a>
                            <div class="dropdown-menu">
                                <a href="{{ url('profile') }}" class="dropdown-item">Profile</a>
                                <hr class="dropdown-divider">
                                <a href="{{ route('logout') }}" class="dropdown-item">Logout</a>
                            </div>
                        </div>
                    </div>

                </div><!-- / .navbar-collapse -->

            </div>
        </nav>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">
        @yield('content')
    </div>

    <!-- JAVASCRIPT -->
    <script src="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js"></script>
    <script src="{{ asset('assets/js/vendor.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/theme.bundle.js') }}"></script>
</body>

</html>