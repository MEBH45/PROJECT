<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>| MEBH |</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{asset('boot/assets/img/logo.png')}}" rel="icon">
    <link href="{asset('boot/assets/img/logo.png')}}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('boot/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('boot/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('boot/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('boot/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('boot/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{asset('boot/assets/css/main.css')}}" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="#" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">MEBH</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('home')}}#about">About</a></li>
                    <li><a href="#service" class="active">Services</a></li>
                    <!-- <li><a href="#portfolio">Achievements</a></li> -->
                    <li><a href="#contact">Contact us</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>
    <main>


        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>We offer a range of professional services tailored to your needs. Whether you are looking for a dynamic website creation solution, maintenance of your computer equipment, or specialized training, we have the skills and resources to support you. Discover below the services we offer and contact us to find out more or to request a personalized quote.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-code-slash icon"></i></div>
                            <h4><a href="https://docs.google.com/forms/d/e/1FAIpQLScd_AnFzUzvO4iydAl1Dtu-Rs5DZZ9Zr5fZzwZUSZGfCliCNA/viewform?usp=header" class="stretched-link">Dynamic website creation</a></h4>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-tools icon"></i></div>
                            <h4><a href="https://docs.google.com/forms/d/e/1FAIpQLScd_AnFzUzvO4iydAl1Dtu-Rs5DZZ9Zr5fZzwZUSZGfCliCNA/viewform?usp=header" class="stretched-link">Maintenace of computer equipment</a></h4>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-easel icon"></i></div>
                            <h4><a href="https://docs.google.com/forms/d/e/1FAIpQLScd_AnFzUzvO4iydAl1Dtu-Rs5DZZ9Zr5fZzwZUSZGfCliCNA/viewform?usp=header" class="stretched-link">Training organization</a></h4>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-router icon"></i></div>
                            <h4><a href="https://docs.google.com/forms/d/e/1FAIpQLScd_AnFzUzvO4iydAl1Dtu-Rs5DZZ9Zr5fZzwZUSZGfCliCNA/viewform?usp=header" class="stretched-link">Instalation and configuration of IT equipement</a></h4>
                        </div>
                    </div><!-- End Service Item -->

                </div> <br>
                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-palette icon"></i></div>
                            <h4><a href="https://docs.google.com/forms/d/e/1FAIpQLScd_AnFzUzvO4iydAl1Dtu-Rs5DZZ9Zr5fZzwZUSZGfCliCNA/viewform?usp=header" class="stretched-link">Poster design for event</a></h4>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-funnel icon"></i></div>
                            <h4><a href="https://docs.google.com/forms/d/e/1FAIpQLScd_AnFzUzvO4iydAl1Dtu-Rs5DZZ9Zr5fZzwZUSZGfCliCNA/viewform?usp=header" class="stretched-link">Creation of a sales funnel</a></h4>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-shield-lock icon"></i></div>
                            <h4><a href="https://docs.google.com/forms/d/e/1FAIpQLScd_AnFzUzvO4iydAl1Dtu-Rs5DZZ9Zr5fZzwZUSZGfCliCNA/viewform?usp=header" class="stretched-link">Intallation of surveillance cameras</a></h4>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-file-bar-graph icon"></i></div>
                            <h4><a href="https://docs.google.com/forms/d/e/1FAIpQLScd_AnFzUzvO4iydAl1Dtu-Rs5DZZ9Zr5fZzwZUSZGfCliCNA/viewform?usp=header" class="stretched-link">Data management and analysis</a></h4>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section -->
        <!-- Projects Section -->
        <section id="projects" class="projects section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our projects</h2>
            </div><!-- End Section Title -->

            <div class="container mt-2">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="bold">Online Restauration</h1>
                        <p>You can see many African and European dishes there. This platform allows you to place orders online without having to travel. It also includes a secure online payment method. You can select whatever you want and place your order.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4" class=""></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5" class=""></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6" class=""></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7" class=""></button>

                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('boot/image/Resaturant1.JPG')}}" class="d-block w-100" height="300" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('boot/image/Resaturant2.JPG')}}" class="d-block w-100" height="300" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('boot/image/Resaturant3.JPG')}}" class="d-block w-100" height="300" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('boot/image/Resaturant4.JPG')}}" class="d-block w-100" height="300" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('boot/image/Resaturant5.JPG')}}" class="d-block w-100" height="300" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('boot/image/Resaturant6.JPG')}}" class="d-block w-100" height="300" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('boot/image/Resaturant7.JPG')}}" class="d-block w-100" height="300" alt="...">
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
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="bold">Online Location</h1>
                        <p>We can see the many Appartement and buy.This platform allows you to make room reservations online without having to travel. Everything from an online loaction contract to obtaining the room or apartment for your activities. It also includes a secure online payment method for the payment of rents and advances for rentals. I have digitized the system of renting and paying rent and advances. </p>
                    </div>
                    <div class="col-md-6">
                        <div id="carouselIndicators" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="3" aria-label="Slide 4" class=""></button>
                                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="4" aria-label="Slide 5" class=""></button>
                                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="5" aria-label="Slide 6" class=""></button>
                                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="6" aria-label="Slide 7" class=""></button>

                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('boot/image/Location1.JPG')}}" class="d-block w-100" height="300" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('boot/image/Location2.JPG')}}" class="d-block w-100" height="300" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('boot/image/Location3.JPG')}}" class="d-block w-100" height="300" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('boot/image/Location4.JPG')}}" class="d-block w-100" height="300" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('boot/image/Location5.JPG')}}" class="d-block w-100" height="300" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('boot/image/Location6.JPG')}}" class="d-block w-100" height="300" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('boot/image/Location7.JPG')}}" class="d-block w-100" height="300" alt="...">
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>


        </section><!-- /Services Section -->


        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>Porto-Novo, Cotonou</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+229 01 97 64 94 65</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email</h3>
                                <p>pkhagency@gmail.com</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-8">
                        <form action="{{ route('saveMessage') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">

                            @csrf
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->
    </main>


    <footer id="footer" class="footer light-background">
        <div class="container">
            <h3 class="sitename">MEBH</h3>
            <p>I am present on diferrent social networks</p>
            <div class="social-links d-flex justify-content-center">
                <a href="https://www.facebook.com/share/1F7hRLD1Ba/?mibextid=wwXIfr"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/ephrem_hounkpatin?igsh=MTRxcXhnZmllYnhucQ%3D%3D&utm_source=qr"><i class="bi bi-instagram"></i></a>
                <a href="https://x.com/phremo45?s=21"><i class="bi bi-twitter"></i></a>
                <a href="https://www.linkedin.com/in/beno%C3%AEt-ephrem-mahugnon-hounkpatin-6443b9284?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class="bi bi-linkedin"></i></a>
            </div>
            <div class="container">
                <div class="copyright">
                    <span>Copyright</span> <strong class="px-1 sitename">MEBH</strong> <span>All Rights Reserved</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset('boot/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('boot/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{('boot/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('boot/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{asset('boot/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('boot/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('boot/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('boot/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{asset('boot/assets/js/main.js')}}"></script>
</body>

</html>