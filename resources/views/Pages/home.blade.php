@extends('layouts.master')
@section('contents')

<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

    <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
        <h2>Hi, I'am Ephrem HOUNKPATIN!</h2>
        <p>I am web developer and computer maintenance and network technician<br></p>
        <a href="#about" class="btn-scroll" title="Scroll Down"><i class="bi bi-chevron-down"></i></a>
    </div>

</section><!-- /Hero Section -->
<!-- About Section -->
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
                            <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>In progres</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+229 0197649465</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Porto-Novo, Bénin</span></li>
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

<!-- Skills Section -->
<section id="skills" class="skills section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

            <div class="col-lg-6">

                <div class="progress">
                    <span class="skill"><span>HTML & CSS</span> <i class="val">80%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div><!-- End Skills Item -->

                <div class="progress">
                    <span class="skill"><span>PHP</span> <i class="val">75%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div><!-- End Skills Item -->

                <div class="progress">
                    <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div><!-- End Skills Item -->

            </div>

            <div class="col-lg-6">

                <div class="progress">
                    <span class="skill"><span>Laravel & Boostrap</span> <i class="val">80%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div><!-- End Skills Item -->
                <div class="progress">
                    <span class="skill"><span>WordPress/CMS</span> <i class="val">75%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div><!-- End Skills Item -->


                <div class="progress">
                    <span class="skill"><span>Canva</span> <i class="val">75%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div><!-- End Skills Item -->


            </div>

        </div>

    </div>

</section><!-- /Skills Section -->

<!-- Resume Section -->
<section id="resume" class="resume section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
    </div><!-- End Section Title -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <h3 class="resume-title">Sumary</h3>
                <div class="resume-item pb-0">
                    <h4>Benoît Ephrem Mahugnon HOUNKPATIN</h4>
                    <p><em>Passionate about information technology, I am a professional engaged in the design and maintenance of robust and secure IT systems.
                            With solid experience in web development and network administration, I am looking for new challenges to put my skills at the service of
                            innovative projects.
                        </em></p>
                    <ul>
                        <li>Porto-Novo, C/127 Foun-Foun SODJI M/HOUNKPATIN</li>
                        <li>+229 0197649465</li>
                        <li>pkhagency@gmail.com</li>
                    </ul>
                </div><!-- Edn Resume Item -->

                <h3 class="resume-title">Education</h3>
                <div class="resume-item">
                    <h4>Bachelor's in Computer Network Administration, Cotonou, Bénin</h4>
                    <h5>2021 - 2024</h5>
                    <p><em>National school of applied economics and management</em></p>
                </div><!-- Edn Resume Item -->


            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <h3 class="resume-title">Professional Experience</h3>
                <div class="resume-item">
                    <h4>Intern</h4>
                    <h5>April 2024 - July 2024</h5>
                    <p><em>Public Treasury, Cotonou, Bénin </em></p>
                    <ul>
                        <li>Network equipment maintenance configuration</li>
                        <li>Preventive maintenance work on site</li>
                    </ul>
                </div><!-- Edn Resume Item -->

                <div class="resume-item">
                    <h4>Intern</h4>
                    <h5>June 2023- September 2023</h5>
                    <p><em>Romas Technology, Cotonou, Bénin</em></p>
                    <ul>
                        <li>Creation of a rental property collection platform</li>
                        <li>Creation of an online restaurant platform</li>
                    </ul>
                </div><!-- Edn Resume Item -->

            </div>

        </div>

    </div>

</section><!-- /Resume Section -->

@endsection