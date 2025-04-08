@extends('home')
@section('about')
<section id="about" class="about section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4">
                <img src="{{asset('boot/assets/img/IMG_0093.JPG')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 content">
                <h2>Computer maintenance and network technician &amp; Web Developer.</h2>
                <p class="fst-italic py-3">
                    I have expertise in network management, hardware maintenance, as well as IT security.
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>16 April 2003</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+229 0168815549</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Cotonou, Bénin</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>21</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Licence</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>pkhagency@gmail.com</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                        </ul>
                    </div>
                </div>
                <p class="py-3">
                    My skills include building websites, optimizing IT systems and sloving complex technical problems.
                    I am passionate about new technologies and determined to actively contribute to the success of innovative IT project.
                </p>
            </div>
        </div>

    </div>
</section><!-- /About Section -->
@endsection