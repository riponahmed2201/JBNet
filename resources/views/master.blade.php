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


<section class="p-0">
    <div class="tiny-slider arrow-dark arrow-large arrow-transparent arrow-hover">
        <div class="tiny-slider-inner h-400 h-lg-700" data-autoplay="true" data-autoplaytime="7000" data-gutter="0"
             data-arrow="true" data-dots="false" data-items="1">
            <!-- slide 1-->
            <div class="h-100 bg-overlay-dark-2"
                 style="background-image:url(frontend/assets/images/banner/05.jpg); background-position: center center; background-size: cover;">
                <div class="container h-100">
                    <div class="row d-flex h-100">
                        <div
                            class="col-lg-8 col-xl-6 me-auto slider-content justify-content-center align-self-center align-items-start text-start">
                            <h2
                                class="animate__animated animate__fadeInUp animate__delay-1s display-2 fw-bold text-white">
                                We are creating smart websites.</h2>
                            <h3
                                class="animate__animated animate__fadeInUp animate__delay-2s text-white display-7 alt-font fst-italic mb-2 my-md-4">
                                Crafting visually stunning memorable experiences for the web</h3>
                            <div class="animate__animated animate__fadeInUp animate__delay-3s mt-3 dealy-1500"><a
                                    href="#" class="btn btn-grad">Purchase Now!</a> <a href="#"
                                                                                       class="btn btn-link text-white">Check
                                    live demo!</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slide 2-->
            <div class="h-100 bg-overlay-dark-2"
                 style="background-image:url(frontend/assets/images/banner/02.jpg); background-position: center top; background-size: cover;">
                <div class="container h-100">
                    <div class="row d-flex h-100">
                        <div class="col-md-8 justify-content-center align-self-center align-items-start mx-auto">
                            <div class="slider-content text-center ">
                                <h3
                                    class="animate__animated animate__fadeInUp animate__delay-1s display-7 text-white alt-font fst-italic">
                                    Build a very unique and professional website</h3>
                                <h2
                                    class="animate__animated animate__fadeInUp animate__delay-2s display-3 fw-bold text-white">
                                    We’re good. Just ask our moms.</h2>
                                <div class="animate__animated animate__fadeInUp animate__delay-3s mt-3 dealy-1500">
                                    <a href="#" class="btn btn-grad">Contact us</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
Main banner -->


<section class="p-0">
    <div class="container">
        <div class="notice_head mt-3 text-center">
            <h2>Notice</h2>
        </div>
        <div class="row g-0 rounded overflow-hidden">
            <img src="{{ asset('frontend/assets/images/Capture.png') }}" class="img-fluid" alt="">
        </div>
    </div>
</section>
<!-- why-us
=======================  -->

<!-- =======================
service -->
<section class="service">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 mx-auto">
                <div class="our_company text-center">
                    <h2>Our Company</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mt-30">
                <div class="feature-box f-style-2 icon-grad h-100">
                    <img src="{{ asset('frontend/assets/images/01.jpg') }}" class="img-fluid" alt="">
                    <a class="mt-3 text-center" href="#">JB HALAL FOOD</a>
                </div>
            </div>
            <div class="col-md-4 mt-30">
                <div class="feature-box f-style-2 icon-grad h-100">
                    <img src="{{ asset('frontend/assets/images/02.jpg') }}" class="img-fluid" alt="">
                    <a class="mt-3 text-center" href="#">JBHRA</a>
                </div>
            </div>
            <div class="col-md-4 mt-30">
                <div class="feature-box f-style-2 icon-grad h-100">
                    <img src="{{ asset('frontend/assets/images/jbhra.jpg') }}" class="img-fluid" alt="">
                    <a class="mt-3 text-center" href="#">JBNET TELECOM</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mt-30">
                <div class="feature-box f-style-2 icon-grad h-100">
                    <img src="{{ asset('frontend/assets/images/01.jpg') }}" class="img-fluid" alt="">
                    <a class="mt-3 text-center" href="#">IKIAGI CORPORATION</a>
                </div>
            </div>
            <div class="col-md-4 mt-30">
                <div class="feature-box f-style-2 icon-grad h-100">
                    <img src="{{ asset('frontend/assets/images/02.jpg') }}" class="img-fluid" alt="">
                    <a class="mt-3 text-center" href="#">JBNET TRAVELS</a>
                </div>
            </div>
            <div class="col-md-4 mt-30">
                <div class="feature-box f-style-2 icon-grad h-100">
                    <img src="{{ asset('frontend/assets/images/jbhra.jpg') }}" class="img-fluid" alt="">
                    <a class="mt-3 text-center" href="#">JB FASHION</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Facebook</h5>
                <img src="{{ asset('frontend/assets/images/01.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-4">
                <h5>Latest Advertisement</h5>
                <img src="{{ asset('frontend/assets/images/01.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-4">
                <h5>LOCATION MAP</h5>
                <img src="{{ asset('frontend/assets/images/01.jpg') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>


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