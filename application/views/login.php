<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DevFolio Bootstrap Portfolio Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio - v4.3.0
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<body>

	</div>
	<section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      
	  <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
     
	<h1 align=center>Silahkan login terlebih dahulu...</h1>
	<div style="color: red;margin-bottom: 15px;">
		<?php
		// Cek apakah terdapat session nama message
		if($this->session->flashdata('message')){ // Jika ada
			echo $this->session->flashdata('message'); // Tampilkan pesannya
		}
		?>

	<div class="row">
					<div class="title-box-12">
						<div class="col-md-12">
                      <h5 class="title-mid" align=center>
                        Login
                      </h5>
                    </div>
                    <div>
					<form method="post" action="<?php echo base_url('index.php/auth/login') ?>">
                        <div class="row">
                          <div class="col-md-12 ">
                            <div class="form-group">
                              <input type="text" name="username" class="form-control" id="name" placeholder="Username" required>
                            </div>
                          </div>
                          <div class="col-md-12 ">
                            <div class="form-group">
                              <input type="password" name="password" class="form-control" id="name" placeholder="Password" required>
                            </div>
                          </div>
                         
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Login</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>


</body>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/typed.js/typed.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>

</html>