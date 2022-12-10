<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Umara</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <!-- Favicon -->
    <link href="img/Logo UMARA.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-white position-relative">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="index.php" class="navbar-brand text-secondary">
                <h1 class="display-4 text-uppercase">UMARA</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0 pr-3 border-right">
                    <a href="index.php" class="nav-item nav-link">Beranda</a>
                    <a href="tentang.php" class="nav-item nav-link">Tentang</a>
                    <a href="wawasan.php" class="nav-item nav-link active">Wawasan</a>
                    <a href="latih.php" class="nav-item nav-link">Berlatih UMKM</a>
                    <a href="kita.php" class="nav-item nav-link">UMKM kita</a>
                    <a href="event.php" class="nav-item nav-link">Event UMKM</a>
                    <a href="kami.php" class="nav-item nav-link">Kami</a>
                    <?php session_start(); if(!isset($_SESSION['email'])) { ?>
                        <a href="admin/login.php" class="nav-item nav-link">Login</a>
                    <?php } else { ?>
                        <a href="admin/dashboard.php" class="nav-item nav-link">Dashboard</a>
                    <?php } ?>
                    </div>
                </div>
                <div class="d-none d-lg-flex align-items-center pl-4">
                    <i class="fa fa-2x fa-mobile-alt text-info mr-3"></i>
                    <div>
                        <h6 class="text-body text-uppercase mb-1"><small>Hubungi kami</small></h6>
                        <h6 class="m-0">+62 812373078331</h6>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div style="background-image: url('img/baner.png');" class="page-header container-fluid bg-info d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase text-white mb-3">Wawasan & Tips'n Trick UMKM</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="index.php">Beranda</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">Wawasan</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- tips Start -->
    <section class="section pb-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="section-title text-info">Tips UMKM</h1>
            <!-- accordion -->
            <div id="accordion">
              <?php
                include("koneksi.php");

                $result = mysqli_query($con, "SELECT * FROM wawasan WHERE tipe='Tips' ORDER BY id DESC");
                $no = 1;
                while($data = mysqli_fetch_array($result)) {
              ?>
              <div class="card mb-4 rounded-0 shadow border-0">
                <div class="card-header rounded-0 bg-white border p-0 border-0">
                  <a class="card-link h4 d-flex tex-dark mb-0 py-3 px-4 justify-content-between" data-toggle="collapse"
                    href="#data-<?=$data['id'];?>">
                    <span><?=$data['judul']?></span> <i class="ti-plus text-info text-right"></i>
                  </a>
                </div>
                <div id="data-<?=$data['id'];?>" class="collapse" data-parent="#accordion">
                  <div class="card-body font-secondary text-color">
                      <h5>
                          <?=$data['sub_judul']?>
                      </h5>
                      <div class="font-secondary">
                          <?=$data['isi']?> 
                      </div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>

            <h1  class="section-title text-info">Wawasan UMKM</h1>
            <div id="accordion">
              <div id="accordion">
              <?php
                $result = mysqli_query($con, "SELECT * FROM wawasan WHERE tipe='Wawasan' ORDER BY id DESC");
                $no = 1;
                while($data = mysqli_fetch_array($result)) {
              ?>
              <div class="card mb-4 rounded-0 shadow border-0">
                <div class="card-header rounded-0 bg-white border p-0 border-0">
                  <a class="card-link h4 d-flex tex-dark mb-0 py-3 px-4 justify-content-between" data-toggle="collapse"
                    href="#data-<?=$data['id'];?>">
                    <span><?=$data['judul']?></span> <i class="ti-plus text-info text-right"></i>
                  </a>
                </div>
                <div id="data-<?=$data['id'];?>" class="collapse" data-parent="#accordion">
                  <div class="card-body font-secondary text-color">
                      <h5>
                          <?=$data['sub_judul']?>
                      </h5>
                      <div class="font-secondary">
                          <?=$data['isi']?> 
                      </div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>


  <!-- tips End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
      <div class="row pt-5">
          <div class="col-lg-3 col-md-6 mb-5">
              <a href="index.php" class="navbar-brand">
                  <h1 class="m-0 mt-n2 text-white display-4">UMARA</h1>
              </a>
              <p>UMKM maju & Sejahtera</p>
              <h6 class="text-uppercase text-white py-2">Follow Us</h6>
              <div class="d-flex justify-content-start">
                  <a class="btn btn-lg btn-info btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                  <a class="btn btn-lg btn-info btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-lg btn-info btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                  <a class="btn btn-lg btn-info btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5">
              <h4 class="text-uppercase text-white mb-4">Kontak Kami</h4>
              <p>Teknology Perangkat Lunak, Sekolah Vokasi, Institut Pertanian Bogor</p>
              <p><i class="fa fa-map-marker-alt text-white mr-2"></i>Gunung gede, Bogor, Indonesia</p>
              <p><i class="fa fa-phone-alt text-white mr-2"></i>+62 857303070881</p>
              <p><i class="fa fa-envelope text-white mr-2"></i>umara@gmail.com</p>
          </div>
          <div class="col-lg-3 col-md-6 mb-5">
              <h4 class="text-uppercase text-white mb-4">Quick Links</h4>
              <div class="d-flex flex-column justify-content-start">
                  <a class="text-white-50 mb-2" href="index.php"><i class="fa fa-angle-right text-white mr-2"></i>Beranda</a>
                  <a class="text-white-50 mb-2" href="tentang.php"><i class="fa fa-angle-right text-white mr-2"></i>Tentang</a>
                  <a class="text-white-50 mb-2" href="wawasan.php"><i class="fa fa-angle-right text-white mr-2"></i>Wawasan</a>
                  <a class="text-white-50 mb-2" href="latih.php"><i class="fa fa-angle-right text-white mr-2"></i>Berlatih UMKM</a>
                  <a class="text-white-50 mb-2" href="kami.php"><i class="fa fa-angle-right text-white mr-2"></i>Kami</a>
                  <a class="text-white-50 mb-2" href="kita.php"><i class="fa fa-angle-right text-white mr-2"></i>Kita</a>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5">
              <h4 class="text-uppercase text-white mb-4">Pesan & Kesan</h4>
              <p class="mb-4">kirim kan keluh kesah dan pesan untuk membantu kami dalam pembuatan Website ini</p>
              <div class="w-100 mb-3">
                  <div class="input-group">
                      <input type="text" class="form-control border-light" style="padding: 25px;"
                          placeholder="Isi pesan">
                      <div class="input-group-append">
                          <button class="btn btn-info text-uppercase px-3">Kirim</button>
                      </div>
                  </div>
              </div>
              <i>Terimakasi telah membantu</i>
          </div>
      </div>
  </div>
  <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
      <p class="mb-2 text-center text-white-50">&copy; <a href="kita.php">Umara</a>. All Rights Reserved.</p>
      <p class="m-0 text-center text-white-50">Designed by <a>Team Umara</a></p>
  </div>
  <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-info btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>