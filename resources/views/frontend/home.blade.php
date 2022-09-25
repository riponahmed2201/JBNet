@extends('master')

@section('main-content')
    @include('frontend.partials.slider')

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
                                        <a href="#" class="btn btn-grad">Contact us</a>
                                    </div>
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
                    <div class="text-center">
                        <h2 class="text-danger">Our Company</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mt-30">
                    <a target="_blank" href="https://jbhalalfood.com/">
                        <div class="feature-box f-style-2 icon-grad h-100">
                            <img src="{{ asset('frontend/images/01.jpg') }}" class="img-fluid" alt="">
                            <p class="mt-3 text-center">JB HALAL
                                FOOD</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mt-30">
                    <a target="_blank" href="http://jbhra.com/">
                        <div class="feature-box f-style-2 icon-grad h-100">
                            <img src="{{ asset('frontend/images/jbhra.jpg') }}" class="img-fluid" alt="">
                            <p class="mt-3 text-center">JBHRA</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mt-30">
                    <a target="_blank" href="https://gaijinmobile.com/">
                        <div class="feature-box f-style-2 icon-grad h-100">
                            <img src="{{ asset('frontend/images/02.jpg') }}" class="img-fluid" alt="">
                            <p class="mt-3 text-center">JBNET
                                TELECOM</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mt-30">
                    <a target="_blank" href="https://www.ikiagi.com/">
                        <div class="feature-box f-style-2 icon-grad h-100">
                            <img src="{{ asset('frontend/images/03.jpg') }}" class="img-fluid" alt="">
                            <p class="mt-3 text-center">IKIAGI
                                CORPORATION</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mt-30">
                    <a target="_blank" href="">
                        <div class="feature-box f-style-2 icon-grad h-100">
                            <img src="{{ asset('frontend/images/04.jpg') }}" class="img-fluid" alt="">
                            <p class="mt-3 text-center">JBNET TRAVELS</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mt-30">
                    <a target="" href="">
                        <div class="feature-box f-style-2 icon-grad h-100">
                            <img src="{{ asset('frontend/images/05.jpg') }}" class="img-fluid" alt="">
                            <p class="mt-3 text-center">JB FASHION</p>
                        </div>
                    </a>
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
@endsection
