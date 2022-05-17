<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portofolio - Muny Safitri</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>
    <style>
        #hero {
            width: 100%;
            height: 100vh;
            background: url("assets/img/foto-bg.jpg") top center;
            background-size: cover;
        }
    </style>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="assets/img/foto2.jpg" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="index.html">{{$nama}}</a></h1>
                <div class="social-links mt-3 text-center">
                    <a target="_blank" href="{{$linkIG}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                </div>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
                    <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                    <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Foto Bersama</span></a></li>
                    <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>

                </ul>
            </nav>
            <!-- .nav-menu -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>{{$nama}}</h1>
            <p>I'm <span class="typed" data-typed-items="A Student Of Syiah Kuala University, A Beauty Lover, A Developer, A Dreamer"></span></p>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>
                    <p>{{$about}}</p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="assets/img/foto3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>Student &amp; Dreamer.</h3>
                        <p class="fst-italic">
                            Detail Informasi tentang {{$nama}}
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Tanggal Lahir:</strong> <span>{{$birthday}}</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>IG:</strong> <span>{{$IG}}</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Kota:</strong> <span>{{$city}}</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Umur:</strong> <span>{{$age}}</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Github:</strong> <span>{{$Github}}</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Gmail:</strong> <span>{{$email}}</span></li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            {{$minatHobi}}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
            <div class="container">

                <div class="section-title">
                    <h2>Facts</h2>
                    <p>Berikut adaah Fakta tentang {{$nama}}.</p>
                </div>

                <div class="row no-gutters">
                    {{-- @dd($sifat[0]) --}}
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{$sifat[0][2]}}" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>{{$sifat[0][0]}}</strong> {{$sifat[0][1]}}</p>
                        </div>
                    </div>
                {{-- @dd($sifat[0]["Ceria"]) --}}

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{$sifat[1][2]}}" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>{{$sifat[1][0]}}</strong> {{$sifat[1][1]}}</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{$sifat[2][2]}}" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>{{$sifat[2][0]}}</strong>{{$sifat[2][1]}}</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="80" data-purecounter-end="{{$sifat[3][2]}}" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>{{$sifat[3][0]}}</strong>{{$sifat[3][1]}}</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Skills and Abilities</h2>
                    <p>Berikut adalah Kemampuan dan Keahlian {{$nama}}.</p>
                </div>

                <div class="mb-4">
                    <h2 >Skills Detail</h2>
                </div>

                <div class="row skills-content">
                    <div class="col-lg-6" data-aos="fade-up">
                        @for ($i =0; $i<9; $i++)
                        <div class="progress">
                            <span class="skill">{{$skill[$i][0]}} <i class="val">{{$skill[$i][1]}}</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill[$i][1]}}" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                        </div>
                        @endfor
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        @for ($i =9; $i<18; $i++)
                        <div class="progress">
                                        <span class="skill">{{$skill[$i][0]}} <i class="val">{{$skill[$i][1]}}</i></span>
                                        <div class="progress-bar-wrap">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill[$i][1]}}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                        @endfor

                    </div>
                </div>

                <div class="mb-4">
                    <h2 >Abilities Details</h2>
                </div>

                <div class="row skills-content">

                    <div class="col-lg-6" data-aos="fade-up">

                        @for ($i =0; $i<6; $i++)
                        <div class="progress">
                            <span class="skill">{{$ability[$i][0]}} <i class="val">{{$ability[$i][1]}}</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$ability[$i][1]}}" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                        </div>
                        @endfor

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        @for ($i =6; $i<12; $i++)
                        <div class="progress">
                                        <span class="skill">{{$ability[$i][0]}} <i class="val">{{$ability[$i][1]}}</i></span>
                                        <div class="progress-bar-wrap">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="{{$ability[$i][1]}}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                        @endfor

                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

              <div class="section-title">
                <h2>Foto Bersama</h2>
                <p>foto Bersama dengan {{$nama}}</p>
              </div>


              <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                  @for ($i =0; $i<=29; $i++)

                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                      <img src="assets/img/{{$kawan[$i][0]}}.jpg" class="img-fluid" alt="">
                      <div class="portfolio-links">
                        <a href="assets/img/{{$kawan[$i][0]}}.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$kawan[$i][1]}}"><i class="bx bx-plus"></i></a>
                      </div>
                    </div>
                  </div>
                  @endfor
              </div>

            </div>
          </section><!-- End Portfolio Section -->

           <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

          <div class="section-title">
            <h2>Resume</h2>
            <p>Pengalaman dan Latar Belakang Pendidikan.</p>
          </div>

          <div class="row">
            <div class="col-lg-6" data-aos="fade-up">
              <h3 class="resume-title">Ringkasan</h3>
              <div class="resume-item pb-0">
                <h4>{{$nama}}</h4>
                <p><em>{{$minatHobi}}.</em></p>
                <ul>
                  <li>{{$born}},{{$birthday}}</li>
                  <li>{{$IG}}</li>
                  <li>{{$email}}</li>
                </ul>
              </div>

              <h3 class="resume-title">Pengalaman</h3>
              <div class="resume-item">
                @for ($i =0; $i<10; $i++)
                    <p><em>{{$pengalaman[$i][0]}}</em></p>
                @endfor
              </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <h3 class="resume-title">Pendidikan Formal</h3>
              <div class="resume-item">
                @for ($i =0; $i<4; $i++)
                    <p><em>{{$pendidikanFormal[$i][0]}}</em></p>
                @endfor
              </div>
              <div class="resume-item">
                @for ($i =0; $i<8; $i++)
                    <p><em>{{$pengalaman[$i][0]}}</em></p>
                @endfor
              </div>
            </div>
          </div>

        </div>
      </section><!-- End Resume Section -->

    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
