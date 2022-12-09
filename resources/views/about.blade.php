@extends('layout')

@section('main')
<header class="hero-section d-flex align-items-center bd-bottom" data-scroll-index="0">
    <div class="container">
        <div class="hero-content text-center">
            <h4>Hello! I'M</h4>
            <h1>Victor Azangu</h1>
            <h2>I'm <span class="typed"></span></h2>
        </div>
        <ul class="hero-social">
            <li><a href="https://www.facebook.com/victorshem.azangu.3" target="_blank"><i class="ti-facebook"></i></a></li>
            <li><a href="https://twitter.com/victor_azangu" target="_blank"><i class="ti-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/v.azangu/?hl=en" target="_blank"><i class="ti-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/in/victor-shem-7a13821a3/" target="_blank"><i class="ti-linkedin"></i></a></li>
            <li><a href="https://github.com/victorazangu" target="_blank"><i class="ti-github"></i></a></li>
        </ul>
    </div>
</header>


            <section id="about" class="about-section section-padding bd-bottom" data-scroll-index="1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7 sm-padding wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
                            <div class="about-content">
                               <h2>Let Me Introduce Myself.</h2>
                                <p>I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user experience.</p>
                                <ul class="profile-info">
                                    <li><span>Address</span> TRM drive,Roysambu. Nairobi, Kenya</li>
                                    <li><span>Email</span> <a href="mailto:victorsazangu@gmail.com">victorsazangu@gmail.com</a></li>
                                    <li><span>Phone</span> <a href="tel:+254726262033">+254726262033</a></li>
                                </ul>
                                <a href="https://docs.google.com/document/d/1H35uJCUEn4Peh5dbudzPDrL1Ybx4Zkdf/edit?usp=sharing&ouid=106891562225904113106&rtpof=true&sd=true" class="default-btn" download>Download CV <i class="ti-download"></i></a>
                            </div>
                        </div>
                        <div class="col-md-5 sm-padding wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms">
                            <div class="about-bg">
                               <img src="{{ asset('img/profile.png') }}" alt="img" style="border-radius: 9px">
                               <div class="dots" style="color:#cba982"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="resume" class="resume-section section-padding bd-bottom" data-scroll-index="2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 sm-padding wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
                            <div class="section-heading mb-40">
                               <h2>Working Experience</h2>
                            </div>
                            <ul class="exp-list">
                                <li>
                                    <div class="exp-date">
                                        <i class="ti-bookmark"></i>
                                        <span>January 2021 - Till Now</span>
                                    </div>
                                    <div class="exp-content">
                                        <h4>Freelancer<span>Web developer</span></h4>
                                        <p>I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="exp-date">
                                        <i class="ti-bookmark"></i>
                                        <span>February 2014 - March 2019</span>
                                    </div>
                                    <div class="exp-content">
                                        <h4>GilGil Marttress Limited<span>Assistant salesperson</span></h4>
                                        <p>I worked as an assistant salesperson in charge of taking costomers order and making sure the order reach the customer at the right time</p>
                                    </div>
                                </li>
                                 <li>
                                    <div class="exp-date">
                                        <i class="ti-bookmark"></i>
                                        <span>February 2019 - March 2021</span>
                                    </div>
                                    <div class="exp-content">
                                        <h4>Self-employed<span>Business</span></h4>
                                        <p>I owned a general shop</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 sm-padding wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms">
                            <div class="skill-wrap">
                               <div class="section-heading mb-40">
                                   <h2>Professional Skills</h2>
                               </div>
                                <ul class="skill-items">
                                    <li class="skill-item">
                                        <h5>HTML & CSS</h5>
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2000ms" role="progressbar" style="width: 95%;">
                                            <span>95%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="skill-item">
                                        <h5>JAVASCRIPT</h5>
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLeft" data-wow-delay="200ms" data-wow-duration="2000ms" role="progressbar" style="width: 85%;">
                                            <span>85%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="skill-item">
                                        <h5>BOOTSTRAP</h5>
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLeft" data-wow-delay="300ms" data-wow-duration="2000ms" role="progressbar" style="width: 85%;">
                                            <span>85%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="skill-item">
                                        <h5>REACT JS</h5>
                                        <div class="progress">
                                             <div class="progress-bar wow slideInLeft" data-wow-delay="400ms" data-wow-duration="2000ms" role="progressbar" style="width: 75%;">
                                            <span>75%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="skill-item">
                                        <h5>DGANGO</h5>
                                        <div class="progress">
                                             <div class="progress-bar wow slideInLeft" data-wow-delay="400ms" data-wow-duration="2000ms" role="progressbar" style="width: 75%;">
                                            <span>75%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="skill-item">
                                        <h5>JAVA & PYTHON</h5>
                                        <div class="progress">
                                             <div class="progress-bar wow slideInLeft" data-wow-delay="400ms" data-wow-duration="2000ms" role="progressbar" style="width: 75%;">
                                            <span>75%</span>
                                            </div>
                                        </div>
                                    </li>
                                     <li class="skill-item">
                                        <h5>GIT</h5>
                                        <div class="progress">
                                             <div class="progress-bar wow slideInLeft" data-wow-delay="400ms" data-wow-duration="2000ms" role="progressbar" style="width: 95%;">
                                            <span>95%</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="services" class="services-section section-padding bd-bottom" data-scroll-index="3">
                <div class="container">
                    <div class="section-heading mb-40 text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <h2>Outstanding Services</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 sm-padding wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                            <div class="services-item">
                                <i class="icon-genius"></i>
                                <h3>Web Development</h3>
                                <p>I build great website and high quality responsive website </p>
                                <div class="dots"></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 sm-padding wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                            <div class="services-item">
                                <i class="icon-tools"></i>
                                <h3>UX UI Design</h3>
                                <p>i design beautiful websites  </p>
                                <div class="dots"></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 sm-padding wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
                            <div class="services-item">
                                <i class="icon-search"></i>
                                <h3>Front-End Deeloper</h3>
                                <p>iam good at developing responsive front end  </p>
                                <div class="dots"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="portfolios" class="portfolio-section section-padding bd-bottom" data-scroll-index="4">
                <div class="container">
                   <div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                       <h2>Work Portfolios</h2>
                   </div>
                    <div class="portfolio-wrapper">
                        <ul class="portfolio-filter text-center mb-30">
                            <li class="active" data-filter="*">All</li>


                        </ul>
                        <div class="row portfolio-items">
                            <div class="col-md-4 col-sm-6 padding-10 single-item design wordpress">
                               <div class="portfolio-box">
                                   <img src="{{ asset('img/Screenshot.png') }}" alt="img">
                                   <div class="portfolio-content">
                                       <h3><a class="img-popup" href="{{ asset('img/Screenshot .png') }}">Design and Development<span>By me</span></a></h3>
                                   </div>
                               </div>
                            </div>
                            <div class="col-md-4 col-sm-6 padding-10 single-item branding marketing">
                               <div class="portfolio-box">
                                   <img src="{{ asset('img/form.png') }}" alt="img">
                                   <div class="portfolio-content">
                                       <h3><a class="img-popup" href="{{ asset('img/form.png') }}">Design and Development<span>By me</span></a></h3>
                                   </div>
                               </div>
                            </div>
                            <div class="col-md-4 col-sm-6 padding-10 single-item design marketing">
                               <div class="portfolio-box">
                                   <img src="{{ asset('img/dash2.png') }}" alt="img">
                                   <div class="portfolio-content">
                                       <h3><a class="img-popup" href="{{ asset('img/dash2.png') }}">Design and Development<span>By me</span></a></h3>
                                   </div>
                               </div>
                            </div>
                            <div class="col-md-4 col-sm-6 padding-10 single-item marketing wordpress">
                               <div class="portfolio-box">
                                   <img src="{{ asset('img/login.png') }}" alt="img">
                                   <div class="portfolio-content">
                                       <h3><a class="img-popup" href="{{ asset('img/login.png') }}">Design Studio<span>Branding</span></a></h3>
                                   </div>
                               </div>
                            </div>
                            <div class="col-md-4 col-sm-6 padding-10 single-item wordpress branding">
                               <div class="portfolio-box">
                                   <img src="{{ asset('img/signup.png') }}" alt="img">
                                   <div class="portfolio-content">
                                       <h3><a class="img-popup" href="{{ asset('img/signup.png') }}">Design Studio<span>Branding</span></a></h3>
                                   </div>
                               </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>



            <section class="cta-section section-padding bd-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 xs-padding">
                            <div class="cta-content">
                                <h3>Need a Developer?</h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="mailto:victorsazangu@gmail.com" class="default-btn">Hire Me Now!</a>
                        </div>
                    </div>
                </div>
            </section>


@endsection
