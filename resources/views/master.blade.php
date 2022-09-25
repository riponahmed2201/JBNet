<!DOCTYPE html>
<html lang="en">

<head>

    @include('frontend.partials.css')

</head>

<body>

    <!-- ======= Top Bar ======= -->
    @include('frontend.partials.topbar')

    @include('frontend.partials.navbar')

    <!-- ======= Header ======= -->
    @include('frontend.partials.header')
    <!-- End Header -->

    @yield('main-content')

    <!-- ======= Footer ======= -->
    @include('frontend.partials.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('frontend.partials.js')

</body>

</html>
