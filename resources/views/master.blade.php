<!doctype html>
<html lang="en">

<head>

    @include('frontend.partials.css')

</head>

<body>
<div class="preloader">
    <img src="{{ asset('frontend/assets/images/preloader.svg') }}" alt="Pre-loader">
</div>

<!-- =======================
header Start-->
@include('frontend.partials.header')
<!-- =======================
    header End-->

<div class="container">
    <div class="row mt-3">

        <div class="col-md-3">
            <div class="logo">
                <img src="{{ asset('frontend/assets/images/logo2.png') }}" alt="">
            </div>
        </div>

        <div class="col-md-3">
            <div class="info">
                <p>Call Us : (251) 854-6308</p>
                <p>Email Us : help@wizixo.com</p>
                <p>Business Hours : 10.00am - 6.00pm</p>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12">
            <div class="food">
                <button class="btn btn-success">Shop Halal Food</button>
                <button class="btn btn-success">JBNET travel</button>
                <br>
                <button class="btn btn-success">JBNET Money Exchange</button>
                <button class="btn btn-success">JBNET Telecome</button>

            </div>
        </div>
    </div>
</div>
<!-- =======================
Main Banner -->
@include('frontend.partials.navbar')

@yield('main-content')

<!-- =======================
footer  -->
@include('frontend.partials.footer')
<!-- =======================
footer  -->

<!-- Back to top -->
<div><a href="#" class="back-top btn btn-grad"><i class="ti-angle-up"></i></a></div>

@include('frontend.partials.js')

</body>

<!-- Mirrored from wizixo.webestica.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jul 2022 10:10:45 GMT -->

</html>
