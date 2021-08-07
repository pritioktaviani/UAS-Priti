<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Halaman Depan | PritiOtaviani</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio - v4.3.0
  // PRITI OKTAVIANI
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="#hero">Home</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#about">Profile</a></li>
          <li><a class="nav-link scrollto" href="#services">History Pendidikan</a></li>
          <li><a class="nav-link scrollto " href="#work">Pengalaman</a></li>
          <li><a class="nav-link scrollto " href="#contact">Contact Me</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('index.php/auth') ?>">Edit Data</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/hero-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
        <?php foreach($prof as $listprof): ?>
        <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">I am <?= $listprof['nama'] ?></h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="UAS Pemograman Internet 2"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/testimonial-2.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                    <?php foreach($prof as $listprof): ?>
                      <div class="about-info">
                        <p><span class="title-s">Nama   : </span> <span><?= $listprof['nama'] ?></span></p>
                        <p><span class="title-s">Jenis Kelamin: </span> <span><?= $listprof['jk'] ?></span></p>
                        <p><span class="title-s">Usia   : </span> <span><?= $listprof['umur'] ?></span></p>
                        <p><span class="title-s">Status  : </span> <span><?= $listprof['status'] ?></span></p>
                        <p><span class="title-s">Tempat, Tanggal Lahir: </span> <span><?= $listprof['tgl_lhr'] ?></span></p>
                        <p><span class="title-s">Hobi    : </span> <span><?= $listprof['hobi'] ?></span></p>
                        <p><span class="title-s">Alamat  : </span> <span><?= $listprof['alamat'] ?></span></p>
                      
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
                    <p class="lead">
                    <?= $listprof['tentang'] ?></span>
                    </p>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Riwayat Pendidiak Section ======= -->
    <section id="services" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Riwayat Pendidikan
              </h3>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="service-box">
            <?php foreach($pend as $listpend): ?>
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-card-checklist"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title"><?= $listpend['tk'] ?></h2>
                <p class="s-description text-center">

                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-bar-chart"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title"><?= $listpend['sd'] ?></h2>
                <p class="s-description text-center">
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-binoculars"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title"><?= $listpend['smp'] ?></h2>
                <p class="s-description text-center">
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-brightness-high"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title"><?= $listpend['sma'] ?></h2>
                <p class="s-description text-center">
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-calendar4-week"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title"><?= $listpend['univ'] ?></h2>
                <p class="s-description text-center">
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section><!-- End Services Section -->

  
    <!-- ======= Pengalaman Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Pengalaman Kerja
              </h3>
              <p class="subtitle-a">
                Berikut adalah daftar pengalaman kerja saya selama ini :
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/work-1.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <?php foreach($peng as $listpeng): ?>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title" align=center>Pengalaman 1</h2>
                    <div class="w-more">
                      <span class="w-ctegory"><?= $listpeng['peng_1'] ?></span> 
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/work-2.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                  <h2 class="w-title" align=center>Pengalaman 2</h2>
                    <div class="w-more">
                      <span class="w-ctegory"><?= $listpeng['peng_2'] ?></span> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/work-3.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                  <h2 class="w-title" align=center>Pengalaman 3</h2>
                    <div class="w-more">
                      <span class="w-ctegory"><?= $listpeng['peng_3'] ?></span> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/work-4.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                  <h2 class="w-title" align=center>Pengalaman 4</h2>
                    <div class="w-more">
                      <span class="w-ctegory"><?= $listpeng['peng_4'] ?></span> 
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-3">

                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Hubungi Saya
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        Terima kasih telah membaca halaman profile lengkap saya, jika anda tertarik untuk merekrut saya untuk berkerja pada 
                        anda, anda dapat menghubungin saya melalui email atau media sosial saya.
                        </p>  
                        <p> Daftar Kontak Saya :
                        <?php foreach($cont as $listcont): ?>
                      <ul class="list-ico">
                        <li><span class="bi bi-phone"></span> <?= $listcont['nohp'] ?></li>
                        <li><span class="bi bi-envelope"></span> <?= $listcont['email'] ?></li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href=""><i class="bi bi-facebook">  <?= $listcont['fb'] ?></i></span></a></li><br>
                        <li><a href=""><i class="bi bi-instagram">  <?= $listcont['ig'] ?></i></span></a></li><br>
                        <li><a href=""><i class="bi bi-youtube">  <?= $listcont['yt'] ?></i></span></a></li>
                      </ul>
                      <?php endforeach ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>Priti Oktaviani</strong>. All Rights Reserved</p>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- PRITI OKTAVIANI -->
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>