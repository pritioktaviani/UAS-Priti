<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Data</title>
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
<h3 align=center>MENGUBAH DATA TAMPILAN DEPAN</h3><br>
<h6 align=center ><a href="<?php echo base_url('index.php/auth/logout') ?>" text-color=red>Kembali Ke Tampilan</a></h6>
  <!-- About me -->
  <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-12">
                    <div class="title-box-2">
                      <h5 class="title-left">
               Tentang Saya
                      </h5>
                    </div>
                    <div>
                    <form  action="<?= base_url('index.php/page/edit_profile') ?>" method="POST">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <p>Nama</p>
                            <input type="hidden" name="id" value="<?= $tbl_profile['id'] ?>" >
                              <input type="text" name="nama" class="form-control" id="name" value="<?= $tbl_profile['nama'] ?>"required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <p>Jenis Kelamin</p>
                              <input type="text" name="jk" class="form-control" id="name" required value="<?= $tbl_profile['jk'] ?>">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <p>Umur</p>
                              <input type="text" name="umur" class="form-control" id="name" required value="<?= $tbl_profile['umur'] ?>">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <p>Tempat, Tanggal Lahir</p>
                              <input type="text" name="tgl_lhr" class="form-control" id="name"  required value="<?= $tbl_profile['tgl_lhr'] ?>">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <p>Status</p>
                              <input type="text" name="status" class="form-control" id="name" required value="<?= $tbl_profile['status'] ?>">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <p>Hobi</p>
                              <input type="text" name="hobi" class="form-control" id="name" required value="<?= $tbl_profile['hobi'] ?>">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <p>Alamat</p>
                              <textarea type="text" name="alamat" class="form-control" id="name" required ><?= $tbl_profile['alamat'] ?></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <p>Tentang Saya</p>
                              <textarea type="text" name="tentang" class="form-control" id="name" required><?= $tbl_profile['tentang'] ?> </textarea>
                            </div>
                          </div>

                            <button type="submit" class="button button-a button-big button-rouded">Simpan Update</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
    
    
    <!-- Pendidikan -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-12">
                    <div class="title-box-2">
                      <h5 class="title-left">
               Riwayat Pendidikan
                      </h5>
                    </div>
                    <div>
                    <form  action="<?= base_url('index.php/page/edit_pendidikan') ?>" method="POST">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <p>TK</p>
                            <input type="hidden" name="id" value="<?= $tbl_pendidikan['id'] ?>" >
                              <input type="text" name="tk" class="form-control" id="name" value="<?= $tbl_pendidikan['tk'] ?>"required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <p>SD</p>
                              <input type="text" name="sd" class="form-control" id="name" required value="<?= $tbl_pendidikan['sd'] ?>">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <p>SMPr</p>
                              <input type="text" name="smp" class="form-control" id="name" required value="<?= $tbl_pendidikan['smp'] ?>">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <p>SMA</p>
                              <input type="text" name="sma" class="form-control" id="name"  required value="<?= $tbl_pendidikan['sma'] ?>">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <p>UNIVERSITAS</p>
                              <input type="text" name="univ" class="form-control" id="name" required value="<?= $tbl_pendidikan['univ'] ?>">
                            </div>
                          </div>
                            <button type="submit" class="button button-a button-big button-rouded">Simpan Update</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

        <!-- Pengalaman -->
  <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-12">
                    <div class="title-box-2">
                      <h5 class="title-left">
               Pengalaman
                      </h5>
                    </div>
                    <div>
                    <form  action="<?= base_url('index.php/page/edit_peng') ?>" method="POST">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <p>Pengalaman 1</p>
                            <input type="hidden" name="id" value="<?= $tbl_pengalaman['id'] ?>" >
                              <input type="text" name="peng_1" class="form-control" id="name" value="<?= $tbl_pengalaman['peng_1'] ?>"required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <p>Pengalaman 2</p>
                              <input type="text" name="peng_2" class="form-control" id="name" required value="<?= $tbl_pengalaman['peng_2'] ?>">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <p>Pengalaman 3</p>
                              <input type="text" name="peng_3" class="form-control" id="name" required value="<?= $tbl_pengalaman['peng_3'] ?>">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <p>Pengalaman 4</p>
                              <input type="text" name="peng_4" class="form-control" id="name"  required value="<?= $tbl_pengalaman['peng_4'] ?>">
                            </div>
                          </div>
                          </div>
                            <button type="submit" class="button button-a button-big button-rouded">Simpan Update</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

<!-- ======= Contact Section ======= -->
  <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-12">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Contact Me
                      </h5>
                    </div>
                    <div>
                    <form  action="<?= base_url('index.php/page/edit_contact') ?>" method="POST">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <p>Nomor HP</p>
                            <input type="hidden" name="id" value="<?= $tbl_contact['id'] ?>" >
                              <input type="text" name="nohp" class="form-control" id="name" placeholder="Nomor Hp" value="<?= $tbl_contact['nohp'] ?>"required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <p>Email</p>
                              <input type="email" name="email" class="form-control" id="name" placeholder="email" required value="<?= $tbl_contact['email'] ?>">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <p>Facebook</p>
                              <input type="text" name="fb" class="form-control" id="name" placeholder="Facebook" required value="<?= $tbl_contact['fb'] ?>">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <p>Instagram</p>
                              <input type="text" name="ig" class="form-control" id="name" placeholder="Facebook" required value="<?= $tbl_contact['ig'] ?>">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <p>Youtube</p>
                              <input type="text" name="yt" class="form-control" id="name" placeholder="Facebook" required value="<?= $tbl_contact['yt'] ?>">
                            </div>
                          </div>

                            <button type="submit" class="button button-a button-big button-rouded">Simpan Update</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
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
            <p class="copyright">&copy; Copyright <strong>PritiOktav</strong>. All Rights Reserved</p>
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
