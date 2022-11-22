@extends('master')

@section('main-content')
    <main id="main">
        
            <div class="mainCarousel">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active cImage">
      <img src="assets/img/slider-img/c1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item cImage">
      <img src="assets/img/slider-img/c2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item cImage">
      <img src="assets/img/slider-img/c3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item cImage">
      <img src="assets/img/slider-img/c4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item cImage">
      <img src="assets/img/slider-img/c5.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item cImage">
      <img src="assets/img/slider-img/c6.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item cImage">
      <img src="assets/img/slider-img/c7.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item cImage">
      <img src="assets/img/slider-img/c8.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            </div>
        
        <section id="notice-section">
            <div class="container">
                <div class="section-title">
                    <h2>Notice</h2>
                </div>
                <img style="width: 1300px; height: 780px" src="{{ asset('assets/notice/capture.png') }}" alt="">
            </div>
        </section>
        <!-- ======= Our Companies Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Our Companies</h2>
                </div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="">
                                <img style="width: 360px; height: 211px" src="{{ asset('assets/img/01.jpg') }}"
                                    alt="">
                                <br>
                                <div
                                    style="margin-top: 10px; margin-bottom: 10px; font-family: 'Montserrat', sans-serif; font-weight: 600; color: black">
                                    JB HALAL FOOD
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="">
                                <img style="width: 360px; height: 211px" src="{{ asset('assets/img/jbhra.jpg') }}"
                                    alt="">
                                <br>
                                <div
                                    style="margin-top: 10px; margin-bottom: 10px; font-family: 'Montserrat', sans-serif; font-weight: 600;color: black">
                                    JBHRA
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="">
                                <img style="width: 360px; height: 211px" src="{{ asset('assets/img/02.jpg') }}"
                                    alt="">
                                <br>
                                <div
                                    style="margin-top: 10px; margin-bottom: 10px; font-family: 'Montserrat', sans-serif; color: black; font-weight: 600;">
                                    JBNET TELECOM
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="">
                                <img style="width: 360px; height: 211px" src="{{ asset('assets/img/03.jpg') }}"
                                    alt="">
                                <br>
                                <div
                                    style="margin-top: 10px; margin-bottom: 10px; font-family: 'Montserrat', sans-serif; font-weight: 600; color: black">
                                    IKIAGI CORPORATION
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="">
                                <img style="width: 360px; height: 211px" src="{{ asset('assets/img/04.jpg') }}"
                                    alt="">
                                <br>
                                <div
                                    style="margin-top: 10px; margin-bottom: 10px; font-family: 'Montserrat', sans-serif; font-weight: 600; color: black">
                                    JBNET TRAVELS
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="">
                                <img style="width: 360px; height: 211px" src="{{ asset('assets/img/05.jpg') }}"
                                    alt="">
                                <br>
                                <div
                                    style="margin-top: 10px; margin-bottom: 10px; font-family: 'Montserrat', sans-serif; font-weight: 600; color: black">
                                    JB FASHION
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Companies Section -->

        <!-- ======= Our Major Business Partners ======= -->
        <section id="clients" class="clients">
            <div class="container">
                <div class="section-title">
                    <h2>Our Major Business Partners</h2>
                </div>
                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid"
                                alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Our Major Business Partners -->


        <!-- ======= Our Services ======= -->
        <section id="clients" class="clients">
            <div class="container">
                <div class="section-title">
                    <h2>Check Our Services</h2>
                </div>
                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            Internet Connection
                        </div>

                        <div class="swiper-slide">
                            Halal Food Services
                        </div>

                        <div class="swiper-slide">
                            Corporate Consultancy
                        </div>

                        <div class="swiper-slide">
                            Discount Air Ticket
                        </div>

                        <div class="swiper-slide">
                            Visa Processing
                        </div>

                        <div class="swiper-slide">
                            Send Money
                        </div>

                        <div class="swiper-slide">
                            Translation
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Our Major Business Partners -->

        <!-- ======= Our Major Business Partners ======= -->
        <section id="clients" class="clients">
            <div class="container">
                <div class="section-title">
                    <h2>Gallery</h2>
                </div>
                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid"
                                alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Our Major Business Partners -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>
                                <div class="form-group col-md-6 mt-3 mt-md-0">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main>
@endsection
