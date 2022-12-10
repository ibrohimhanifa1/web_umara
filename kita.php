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
                    <a href="wawasan.php" class="nav-item nav-link">Wawasan</a>
                    <a href="latih.php" class="nav-item nav-link">Berlatih UMKM</a>
                    <a href="kita.php" class="nav-item nav-link active">UMKM kita</a>
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
        <h1 class="display-3 text-uppercase text-white mb-3">UMKM kita</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="index.php">Beranda</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">UMKM</h6>
        </div>
    </div>
    <!-- Page Header Start -->



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