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
                    <a href="index.php" class="nav-item nav-link active">Beranda</a>
                    <a href="tentang.php" class="nav-item nav-link">Tentang</a>
                    <a href="wawasan.php" class="nav-item nav-link">Wawasan</a>
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


    <!-- Header Start -->
    <div style="background-image: url('img/headerbanner4.png');" class="container-fluid bg-info bg-gradient py-5 px-0" style="margin-bottom: 90px;">
        <div class="row mx-0 align-items-center">
            <div class="col-lg-6 px-md-5 text-center text-lg-left">
                <h1 class="display-2 text-uppercase text-white mb-3">UMKM maju & Sejahtera</h1>
                <p class="text-white mb-4">Sebagai sarana promosi dan informasi bagi pelaku umkm yang baru terjun ke
                    dunia usaha kecil menengah, dan ingin mengembangkan usahanya, agar meningkatkan produktivitas,
                    meningkatkan keterampilan produksi dan manajemen, menambah pengetahuan mengenai bagaimana
                    langkah-langkah awal untuk memulai usaha,dll..</p>
                <a href="#akak"  class="tombol-header btn btn-light text-uppercase mt-1 py-3 px-5">Selengkapnya</a>
            </div>
            <div class="col-lg-6 px-0 text-right">
                <img class="img-fluid mt-5 mt-lg-0" src="img/header5.png" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- tentang Start -->
    <div id="akak" class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid mb-4 mb-lg-0" src="img/Logo UMARA.png" alt="">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-4 text-uppercase mb-4">Mengapa harus UMARA?</h1>
                    <h5 class="text-uppercase text-info mb-3">Umara dapat membantu UMKM untuk mencapai tujuannya, agar
                        umkm menjadi maju dan sejahtera.</h5>
                    <p class="mb-4">Umara menjadi sarana promosi dan informasi bagi pelaku umkm yang baru terjun ke
                        dunia usaha kecil menengah, dan ingin mengembangkan usahanya, agar meningkatkan produktivitas,
                        meningkatkan keterampilan produksi dan manajemen, menambah pengetahuan mengenai bagaimana
                        langkah-langkah awal untuk memulai usaha.</p>
                    <a href="tentang.php" class="btn btn-info text-uppercase py-3 px-5 shadow border-0">Pelajari lebih Lanjut</a>
                </div>
            </div>
        </div>
    </div>
    <!-- tentang End -->
    

    <!-- wawasan Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3 align-items-center">
            <h1 class="display-4 text-uppercase text-center mb-5">Fitur Web UMARA</h1>
            <div class="row">
                <div class="col-lg-5 mb-2">
                    <div class="service-item rounded p-5 mb-4 shadow border-0">
                        <i class="fa fa-3x fa-laptop text-info mb-4"></i>
                        <h4 class="text-uppercase mb-4">Wawasan <span class="d-block text-body">Bisnis</span></h4>
                        <p class="m-0">Temukan wawasan dan berita seputar bisnis untuk membantu pemgembangan UMKM anda</p>
                    </div>
                </div>
                <div class="col-lg-7 mb-2">
                    <div class="service-item rounded p-5 mb-4 shadow border-0">
                        <i class="fa fa-3x fa-calendar text-info mb-4"></i>
                        <h4 class="text-uppercase mb-4">Event <span class="d-block text-body">UMKM</span></h4>
                        <p class="m-0">Temukan berbagai event menarik terkait pemgembangan UMKM yang dapat anda ikuti sesuai dengan minat dan kemauan anda</p>
                    </div>
                </div>
                <div class="col-lg-7 mb-2">
                    <div class="service-item rounded p-5 mb-4 shadow border-0">
                        <i class="fa fa-3x fa-edit text-info mb-4"></i>
                        <h4 class="text-uppercase mb-4">Berlatih <span class="d-block text-body">UMKM</span></h4>
                        <p class="m-0">Mulai berlatih memulai atau mengembangkan UMKM anda agar menjadi UMKM yang maju dan sejahtera</p>
                    </div>
                </div>
                <div class="col-lg-5 mb-2">
                    <div class="service-item rounded p-5 mb-4 shadow border-0">
                        <i class="fa fa-3x fa-archive text-info mb-4"></i>
                        <h4 class="text-uppercase mb-4">UMKM<span class="d-block text-body">Kita</span></h4>
                        <p class="m-0">Eksplor dan jajakan UMKM anda di UMARA, temukan inspirasi dan relasi untuk menambah ambisi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wawasan End -->


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
                <?php
                    include("koneksi.php");

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
      </section>


    <!-- tips End -->


    <!-- UMKM Kita Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Cari tau UMKM kita !</h1>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">

                        <li class="btn btn-outline-dark text-uppercase py-2 px-4 active" data-filter="*">
                            <i class="fa fa-star text-info mr-2"></i>Semua
                        </li>
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4" data-filter=".first">
                            <i class="fa fa-utensils text-info mr-2"></i>Kuliner
                        </li>
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4" data-filter=".second">
                            <i class="fa fa-tshirt text-info mr-2"></i>Fashion
                        </li>

                    </ul>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                        data-target="#myModal">Daftarkan UMKM mu !!!</button>
                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="container">
                                        <h2>Isi data UMKM mu</h2>
                                        <form action="/action_page.php">
                                            <div class="col-12 text-left mb-2">
                                                <div class="form-group">
                                                    <label for="nama">Nama:</label>
                                                    <input type="nama" class="form-control" id="nama"
                                                        placeholder="Nama UMKM mu" name="nama">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jenis">Jenis:</label>
                                                    <input type="jenis" class="form-control" id="jenis"
                                                        placeholder="kategori UMKM mu" name="jenis">
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat:</label>
                                                    <input type="alamat" class="form-control" id="alamat"
                                                        placeholder="alamat UMKM mu" name="alamat">
                                                </div>
                                                <div class="form-group">
                                                    <label for="sosmed">Sosial Media:</label>
                                                    <input type="sosmed" class="form-control" id="sosmed"
                                                        placeholder="Sosial Media UMKM mu" name="sosmed">
                                                </div>
                                                <div class="form-group">
                                                    <label for="kontak">kontak UMKM:</label>
                                                    <input type="kontak" class="form-control" id="kontak"
                                                        placeholder="Kontak UMKM yang bisa kami hubungi" name="kontak">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-info">Daftar</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/umkmsafira.jpeg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://mobile.twitter.com/ibrownimm"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://www.instagram.com/brown.imm"><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://wa.me/62895373078331"><i
                                            class="fab fa-whatsapp"></i></a>
                                </div>
                                <a data-toggle="modal"
                                data-target="#myModal4" href="img/safiraproduk.jpeg">
                                    <i class="fa fa-2x fa-cart-arrow-down text-info">
                                    </i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/ukmmadu.png" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-lg btn-info btn-lg-square mx-1" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-lg btn-info btn-lg-square mx-1" href="#"><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="btn btn-lg btn-info btn-lg-square mx-1" href="#"><i
                                            class="fab fa-whatsapp"></i></a>
                                </div>
                                <a data-toggle="modal"
                                data-target="#myModal5" href="img/safiraproduk.jpeg">
                                    <i class="fa fa-2x fa-cart-arrow-down text-info">
                                    </i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/baju1.png" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://mobile.twitter.com/ibrownimm"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://www.instagram.com/brown.imm"><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://wa.me/62895373078331"><i
                                            class="fab fa-whatsapp"></i></a>
                                </div>
                                <a data-toggle="modal"
                                data-target="#myModal6" href="img/safiraproduk.jpeg">
                                    <i class="fa fa-2x fa-cart-arrow-down text-info">
                                    </i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/ukmkopi.png" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://mobile.twitter.com/ibrownimm"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://www.instagram.com/brown.imm"><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://wa.me/62895373078331"><i
                                            class="fab fa-whatsapp"></i></a>
                                </div>
                                <a data-toggle="modal"
                                data-target="#myModal7" href="img/safiraproduk.jpeg">
                                    <i class="fa fa-2x fa-cart-arrow-down text-info">
                                    </i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/umkmsusu.png" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://mobile.twitter.com/ibrownimm"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://www.instagram.com/brown.imm"><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://wa.me/62895373078331"><i
                                            class="fab fa-whatsapp"></i></a>
                                </div>
                                <a data-toggle="modal"
                                data-target="#myModal8" href="img/safiraproduk.jpeg">
                                    <i class="fa fa-2x fa-cart-arrow-down text-info">
                                    </i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/umkmbatik.png" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://mobile.twitter.com/ibrownimm"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://www.instagram.com/brown.imm"><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://wa.me/62895373078331"><i
                                            class="fab fa-whatsapp"></i></a>
                                </div>
                                <a data-toggle="modal"
                                data-target="#myModal9" href="img/safiraproduk.jpeg">
                                    <i class="fa fa-2x fa-cart-arrow-down text-info">
                                    </i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- UMKM kita End -->


    <!-- latih Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Ikut Kelas UMKM kami !!</h1>
            <div class="row">
                <div class="col-lg-4 mb-2 ">
                    <div class="bg-light rounded text-center pt-5 mt-5 mb-4 shadow border-0">
                        <h2 class="text-uppercase">Pemula</h2>
                        <h6 class="text-uppercase text-body mb-5">yang baru join</h6>
                        <div class="text-center bg-info rounded-square p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">Rp.</small>450.000<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;"></small>
                            </h1>
                        </div>
                        <div class="text-center py-4">
                            <p>Ide bisnis</p>
                            <p>Modal dan Tempat Bisnis</p>
                            <p>strategi bisnis</p>
                            <p>mentor</p>
                            <button type="button" class="btn btn-dark btn-lg" data-toggle="modal"
                            data-target="#myModal3">Gabung Sekarang</button>
                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="bg-info rounded text-center pt-5 mb-4 shadow border-0">
                        <h2 class="text-uppercase text-white">Mikro</h2>
                        <h6 class="text-uppercase text-secondary mb-5">yang ingin berkembang</h6>
                        <div class="text-center bg-light rounded-square p-4 mb-2">
                            <h1 class="display-4 mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">Rp.</small>Gratis<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Bln</small>
                            </h1>
                        </div>
                        <div class="text-center text-secondary py-4">
                            <p>Pengembangan Bisnis</p>
                            <p>Mentor</p>
                            <p>menyebar luaskan UMKM mu</p>
                            <p>Strategi Bisnis</p>
                            <button type="button" class="btn btn-light btn-lg" data-toggle="modal"
                            data-target="#myModal3">Gabung Sekarang</button>
                        <!-- Modal -->
                        <div id="myModal3" class="modal fade" role="dialog">
                            <div class="modal-dialog">
    
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="container">
                                            <h2>Isi data dirimu</h2>
                                            <form action="/action_page.php">
                                                <div class="col-12 text-left mb-2">
                                                    <div class="form-group">
                                                        <label for="nama">Nama:</label>
                                                        <input type="nama" class="form-control" id="nama"
                                                            placeholder="Nama lengkap mu" name="nama">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="job">Pekerjaan:</label>
                                                        <input type="job" class="form-control" id="job"
                                                            placeholder="isi Pekerjaan mu" name="job">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat">Alamat:</label>
                                                        <input type="alamat" class="form-control" id="alamat"
                                                            placeholder="isi alamat mu" name="alamat">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ttl">tempat & tgl lahir:</label>
                                                        <input type="ttl" class="form-control" id="ttl"
                                                            placeholder="isi tempat dan tanggal lahir mu" name="ttl">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="kontak">kontak:</label>
                                                        <input type="kontak" class="form-control" id="kontak"
                                                            placeholder="isi email mu" name="kontak">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-info">Daftar</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="bg-light rounded text-center pt-5 mt-lg-5 mb-4 shadow border-0">
                        <h2 class=" text-uppercase">Pengusaha</h2>
                        <h6 class="text-uppercase text-body mb-5">yang ingin buka cabang</h6>
                        <div class="text-center bg-info rounded-square p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">Rp.</small>1.2Jt<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Thn</small>
                            </h1>
                        </div>
                        <div class="text-center py-4">
                            <p>Dicarikan tempat strategis</p>
                            <p>menyediakan pegawai kompeten</p>
                            <p>Relasi yang luas</p>
                            <p>Penasihat</p>
                            <button type="button" class="btn btn-dark btn-lg" data-toggle="modal"
                            data-target="#myModal3">Gabung Sekarang</button>
                        <!-- Modal -->
                        <div id="myModal3" class="modal fade" role="dialog">
                            <div class="modal-dialog">
    
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="container">
                                            <h2>Isi data dirimu</h2>
                                            <form action="/action_page.php">
                                                <div class="col-12 text-left mb-2">
                                                    <div class="form-group">
                                                        <label for="nama">Nama:</label>
                                                        <input type="nama" class="form-control" id="nama"
                                                            placeholder="Nama lengkap mu" name="nama">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="job">Pekerjaan:</label>
                                                        <input type="job" class="form-control" id="job"
                                                            placeholder="isi Pekerjaan mu" name="job">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat">Alamat:</label>
                                                        <input type="alamat" class="form-control" id="alamat"
                                                            placeholder="isi alamat mu" name="alamat">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ttl">tempat & tgl lahir:</label>
                                                        <input type="ttl" class="form-control" id="ttl"
                                                            placeholder="isi tempat dan tanggal lahir mu" name="ttl">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="kontak">kontak:</label>
                                                        <input type="kontak" class="form-control" id="kontak"
                                                            placeholder="isi email mu" name="kontak">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-info">Daftar</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- latih End -->


    <!-- event Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-4 text-uppercase text-center mb-5">Event UMKM</h1>
            <div class="col-12 text-center mb-2">
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Daftarkan Event
                    mu !!!</button>
                <!-- Modal -->
                <div id="myModal2" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="container">
                                    <div class="col-12 text-left mb-2">
                                        <div class="col-12 text-center mb-2">
                                            <h2>Isi data UMKM mu</h2>
                                        </div>
                                        <form action="/action_page.php">
                                            <div class="form-group">
                                                <label for="nama">Nama:</label>
                                                <input type="nama" class="form-control" id="nama"
                                                    placeholder="Nama Event mu" name="nama">
                                            </div>
                                            <div class="form-group">
                                                <label for="jenis">Jenis:</label>
                                                <input type="jenis" class="form-control" id="jenis"
                                                    placeholder="kategori Event mu" name="jenis">
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat:</label>
                                                <input type="alamat" class="form-control" id="alamat"
                                                    placeholder="alamat Event mu" name="alamat">
                                            </div>
                                            <div class="form-group">
                                                <label for="sosmed">Sosial Media:</label>
                                                <input type="sosmed" class="form-control" id="sosmed"
                                                    placeholder="Sosial Media Event mu" name="sosmed">
                                            </div>
                                            <div class="form-group">
                                                <label for="kontak">kontak UMKM:</label>
                                                <input type="kontak" class="form-control" id="kontak"
                                                    placeholder="Kontak Event yang bisa kami hubungi" name="kontak">
                                            </div>
                                            <div class="col-12 text-center mb-2">
                                                <button type="submit" class="btn btn-info">Daftar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding-left: 30px;">
                <div class="team-item rounded overflow-hidden shadow border-0">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/event1.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://mobile.twitter.com/ibrownimm"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://www.instagram.com/brown.imm"><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://wa.me/62895373078331"><i
                                        class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h4 class="text-uppercase">WEBINAR</h4>
                        <p class="m-0">UMKM Kuat</p>
                        <p class="m-0">Indonesia berdaulat</p>
                        <p class="m-0">8 Oktober 2022</p>
                    </div>
                </div>
                <div class="team-item rounded overflow-hidden shadow border-0">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/event5.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://mobile.twitter.com/ibrownimm"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://www.instagram.com/brown.imm"><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://wa.me/62895373078331"><i
                                        class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h4 class="text-uppercase">forum</h4>
                        <p class="m-0">UMKM Bangkit</p>
                        <p class="m-0">Ekonomi Pulih</p>
                        <p class="m-0">16 Oktober 2020</p>
                    </div>
                </div>
                <div class="team-item rounded overflow-hidden shadow border-0">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/event3.jpeg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://mobile.twitter.com/ibrownimm"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://www.instagram.com/brown.imm"><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://wa.me/62895373078331"><i
                                        class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h4 class="text-uppercase">bazar</h4>
                        <p class="m-0">Pasar Kreatif</p>
                        <p class="m-0">BANDUNG</p>
                        <p class="m-0">September - Oktober 2020</p>
                    </div>
                </div>
                <div class="team-item rounded overflow-hidden shadow border-0">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/event4.jpeg" alt="">
                        <div class="team-overlay">
                            <div class="row">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://mobile.twitter.com/ibrownimm"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://www.instagram.com/brown.imm"><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="btn btn-lg btn-info btn-lg-square mx-1" href="https://wa.me/62895373078331"><i
                                            class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h4 class="text-uppercase">festival</h4>
                        <p class="m-0">UMKM Expo</p>
                        <p class="m-0">Festival Kuliner dan Produk Unggulan</p>
                        <p class="m-0">28 - 29 April 2018</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- event End -->


    <!-- kami Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-4 text-uppercase text-center mb-5">Berkenalan dengan kami !!</h1>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item position-relative text-center rounded p-4">
                    <img class="img-fluid rounded mx-auto my-4" src="img/boim.jpeg" alt="">
                    <h5 class="text-uppercase">Ibrohim Hanifa</h5>
                    <p class="text-uppercase">Mahasiswa</p>
                    <p class="text-secondary">hai, panggilan aku boim, aku pendiem, orang baik dan gasuka tahu sumedang</p>
                </div>
                <div class="testimonial-item position-relative text-center rounded p-4">
                    <img class="img-fluid rounded mx-auto my-4" src="img/safirafix2.jpeg" alt="">
                    <h5 class="text-uppercase">Safira Aisha</h5>
                    <p class="text-uppercase">Mahasiswa</p>
                    <p class="text-secondary">Halo nama aku safira aisha majid, umur 20 tahun, sedang berkuliah di sekolah vokasi IPB, aku orangnya pendiem, kalau didiemin, malah makin diem.</p>
                </div>
                <div class="testimonial-item position-relative text-center rounded p-4">
                    <img class="img-fluid rounded mx-auto my-4" src="img/alungfix.jpeg" alt="">
                    <h5 class="text-uppercase">Fachrul Rozy</h5>
                    <p class="text-uppercase">Mahasiswa</p>
                    <p class="text-secondary">Halo. Saya Fachrul Rozy, 20 tahun di bumi. Motto hidup, jadilah apapun asal jangan jahat sama orang, nanti orang jahat juga sama kita. Satu lagi, Tuhan memberkati kita semua. Ya. Amin</p>
                </div>
                <div class="testimonial-item position-relative text-center rounded p-4">
                    <img class="img-fluid rounded mx-auto my-4" src="img/donifix.jpeg" alt="">
                    <h5 class="text-uppercase">Rahmat Doni</h5>
                    <p class="text-uppercase">Mahasiswa</p>
                    <p class="text-secondary">Halo nama saya doni, saya asli bogor, makanan kesukaan saya tahu sumedang</p>
                </div>
            </div>
        </div>
    </div>
    <!-- kami End -->


    <!-- kontak Start -->
    <div class="container-fluid py-5 px-0">
        <div class="row mt-5 mx-0">
            <div class="col-12 px-0" style="height: 500px;">
                <div class="position-relative h-100">
                    <iframe class="position-relative w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126829.29133526179!2d106.72167963728192!3d-6.595188591640181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c44a0cd6aab5%3A0x301576d14feb9a0!2sBogor%2C%20Kp.%20Parung%20Jambu%2C%20Bogor%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1664451529088!5m2!1sen!2sid"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <div class="row mx-0 justify-content-center" style="margin-top: -200px;">
            <div class="col-lg-6 col-md-8 col-sm-10 px-0 shadow border-0">
                <div class="contact-form bg-white rounded p-5 shadow border-0">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col-md-6 ">
                                <div class="control-group">
                                    <input type="text" class="form-control bg-light border-0 p-4" id="name"
                                        placeholder="Nama" required="required"
                                        data-validation-required-message="isi nama mu" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="control-group">
                                    <input type="email" class="form-control bg-light border-0 p-4" id="email"
                                        placeholder="Email" required="required"
                                        data-validation-required-message="email tidak ada" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control bg-light border-0 p-4" id="subject"
                                placeholder="judul" required="required"
                                data-validation-required-message="tolong masukan judul" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control bg-light border-0 py-3 px-4" rows="5" id="message"
                                placeholder="Pesan" required="required"
                                data-validation-required-message="tolong masukan pesan"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-info text-uppercase py-3 px-5" type="submit"
                                id="sendMessageButton">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- kontak End -->

    <!-- Modal 3 -->
    <div id="myModal3" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <h2>Isi data dirimu</h2>
                        <form action="/action_page.php">
                            <div class="col-12 text-left mb-2">
                                <div class="form-group">
                                    <label for="nama">Nama:</label>
                                    <input type="nama" class="form-control" id="nama"
                                        placeholder="Nama lengkap mu" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="job">Pekerjaan:</label>
                                    <input type="job" class="form-control" id="job"
                                        placeholder="isi Pekerjaan mu" name="job">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat:</label>
                                    <input type="alamat" class="form-control" id="alamat"
                                        placeholder="isi alamat mu" name="alamat">
                                </div>
                                <div class="form-group">
                                    <label for="ttl">tempat & tgl lahir:</label>
                                    <input type="ttl" class="form-control" id="ttl"
                                        placeholder="isi tempat dan tanggal lahir mu" name="ttl">
                                </div>
                                <div class="form-group">
                                    <label for="kontak">kontak:</label>
                                    <input type="kontak" class="form-control" id="kontak"
                                        placeholder="isi email mu" name="kontak">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info">Daftar</button>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal teh -->
    <div id="myModal4" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                    
                        <h2>Produk Clarettatea</h2>
                        <p class="text-secondary">Claretta Tea adalah teh yang berasal dari perkebunan teh yang terletak di kaki Gunung Kerinci, Solok Selatan, Sumatera Barat. Merupakan salah satu perkebunan teh hijau terluas dengan lahan mencapai 2.025 hektar dalam satu hamparan, menghasilkan salah satu teh terbaik dunia</p>
                        <img class="mb-1" src="img/safiraproduk2.jpeg" alt="claritea" width="300px" style="border-radius:5px" >
                        <h5 class="text-uppercase">Claretta Tea</h5>
                        <p class="text-uppercase">Rp.25000</p>
                        <img class="mb-1" src="img/safiraproduk3.jpeg" alt="claritea" width="300px" style="border-radius:5px" >
                        <h5 class="text-uppercase">lemon black tea</h5>
                        <p class="text-uppercase">Rp.89.000</p>
                        <img class="mb-1" src="img/safiraproduk4.jpeg" alt="claritea" width="300px" style="border-radius:5px" >
                        <h5 class="text-uppercase">lavender black tea</h5>
                        <p class="text-uppercase">Rp.89.000</p>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

        <!-- Modal madu -->
    <div id="myModal5" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                    
                        <h2>Mago Bee</h2>
                        <p class="text-secondary">Mago Bee merupakan madu murni fresh dari hutan Sumbar, lebah apis dorsata, kualitas raw honey, madu tiris TANPA PERAS TANGAN. Lebih higenis dan bersih!</p>
                        <img class="mb-1" src="img/produkmadu.jpeg" alt="claritea" width="300px" style="border-radius:5px" >
                        <h5 class="text-uppercase">Madu Murni</h5>
                        <p class="text-uppercase">Rp.20000</p>
                        <!-- <img class="mb-1" src="img/safiraproduk3.jpeg" alt="claritea" width="300px" style="border-radius:5px" >
                        <h5 class="text-uppercase">lemon black tea</h5>
                        <p class="text-uppercase">Rp.89.000</p>
                        <img class="mb-1" src="img/safiraproduk4.jpeg" alt="claritea" width="300px" style="border-radius:5px" >
                        <h5 class="text-uppercase">lavender black tea</h5>
                        <p class="text-uppercase">Rp.89.000</p> -->

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal baju -->
    <div id="myModal6" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                    
                        <h2>Produk Aera.Fashion</h2>
                        <p class="text-secondary">Aera.fashion adalah merk baju masa kini dengan design design elegan, tetapi di jual dengan harga murah namun kualitas internasional.</p>
                        <img class="mb-1" src="img/produkbaju.jpeg" alt="claritea" width="300px" style="border-radius:5px" >
                        <h5 class="text-uppercase">sweter</h5>
                        <p class="text-uppercase">Rp.60.000</p>
                        <img class="mb-1" src="img/produkbaju2.jpeg" alt="claritea" width="300px" style="border-radius:5px" >
                        <h5 class="text-uppercase">cardingan</h5>
                        <p class="text-uppercase">Rp.37.000</p>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal kopi -->
    <div id="myModal7" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                    
                        <h2>Produk KopiKita</h2>
                        <p class="text-secondary">Kopi Kita adalah Arabica Specialty Dan Fine Robusta. Berasal dari biji terbaik petik merah dan diproses secara halal dan higienis. Berasal dari kebun sendiri dan kebun petani mitra. Memproduksi Green Bean, Roasted Bean dan bubuk.</p>
                        <img class="mb-1" src="img/safiraproduk2.jpeg" alt="claritea" width="300px" style="border-radius:5px" >
                        <h5 class="text-uppercase">Claretta Tea</h5>
                        <p class="text-uppercase">Rp.25000</p>
                        <img class="mb-1" src="img/safiraproduk3.jpeg" alt="claritea" width="300px" style="border-radius:5px" >
                        <h5 class="text-uppercase">lemon black tea</h5>
                        <p class="text-uppercase">Rp.89.000</p>
                        <img class="mb-1" src="img/safiraproduk4.jpeg" alt="claritea" width="300px" style="border-radius:5px" >
                        <h5 class="text-uppercase">lavender black tea</h5>
                        <p class="text-uppercase">Rp.89.000</p>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal susu -->
    <div id="myModal8" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                    
                        <h2>Produk Susu Sueger</h2>
                        <p class="text-secondary">Susu Sueger adalah pelopor susu murni langsung dari sapi pertama di dunia, dengan berkomitmen tidak akan menambah perasa apapun untuk susunya, namun dengan sapi pilihan diclaim susu ini tahan lama.</p>
                        <img class="mb-1" src="img/susu murnii.jpg" alt="claritea" width="300px" style="border-radius:5px" >
                        <h5 class="text-uppercase">Susu Murni</h5>
                        <p class="text-uppercase">Rp.56000/liter</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal batik -->
    <div id="myModal9" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <h2>Produk Batik nu.sae</h2>
                        <p class="text-secondary">Batik Nusae spesialis tunik dan blouse batik nusantara , menggunakan kualitas terbaik dengan harga terjangkau, cocok untuk acara formal maupun casual.</p>
                        <img class="mb-1" src="img/produkbatik.jpeg" alt="claritea" width="300px" style="border-radius:5px" >
                        <h5 class="text-uppercase">Tunik Batik Merah</h5>
                        <p class="text-uppercase">Rp.225.000</p>
                        <img class="mb-1" src="img/produkbatik2.jpeg" alt="claritea" width="300px" style="border-radius:5px" >
                        <h5 class="text-uppercase">Blouse Batik Biru</h5>
                        <p class="text-uppercase">Rp.176.000</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


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

