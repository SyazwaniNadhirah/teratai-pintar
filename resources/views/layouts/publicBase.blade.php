<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Teratai Pintar</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo.png') }}" rel="logo">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href=" {{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href=" {{ asset('assets/css/styleUser.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/logo.png') }}" alt="">
                <span class="d-none d-lg-block">Teratai Pintar</span>
            </a>

        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->
                <li class="nav-item pe-5">
                    <a class="nav-link collapsed" href="#">
                        <span class="d-none d-md-block">Home</span>
                    </a>
                </li><!-- End Home Page Nav -->
                <li class="nav-item pe-5">
                    <a class="nav-link collapsed" href="#">
                        <span class="d-none d-md-block">Programme</span>
                    </a>
                </li><!-- End Programme Page Nav -->
                <li class="nav-item pe-5">
                    <a class="nav-link collapsed" href="#">
                        <span class="d-none d-md-block">Class</span>
                    </a>
                </li><!-- End Class Page Nav -->
                <li class="nav-item pe-5">
                    <a class="nav-link collapsed" href="#">
                        <span class="d-none nav-profile d-md-block"><b>Apply</b></span>
                    </a>
                </li><!-- End Event Page Nav -->
                <li class="nav-item pe-5">
                    <a class="nav-link collapsed" href="#">
                        <span class="d-none d-md-block">Event</span>
                    </a>
                </li><!-- End Event Page Nav -->
                <li class="nav-item pe-5">
                    <a class="nav-link collapsed" href="# ">
                        <span class="d-none d-md-block">Contact Us</span>
                    </a>
                </li><!-- End Contact Us Page Nav -->
                @guest
                @if (Route::has('login'))
                <li class="nav-item pe-5">
                    <a class="nav-link collapsed"  href="{{ route('login') }}">
                        <span class="d-none d-md-block">{{ __('Login') }}</span>
                    </a>
                </li><!-- End Contact Us Page Nav -->
                @endif
                @if (Route::has('register'))
                <li class="nav-item pe-5">
                    <a class="nav-link collapsed"  href="{{ route('register') }}">
                        <span class="d-none d-md-block">{{ __('Register') }}</span>
                    </a>
                </li><!-- End Contact Us Page Nav -->
                @endif
                @endguest
            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->


    <main id="main" class="main">

        <main class="py-4">
            @yield('content')
        </main>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src=" {{ asset('assets/js/main.js') }}"></script>

</body>

</html>
