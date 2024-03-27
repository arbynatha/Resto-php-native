<?php
include("configurasi/koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">


<!--
   template landing page untuk client
   
   nama   : Ebnu arbynatha
   Kelas  : 12 RPL 4
   Absen  : 09
   
-->


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rynth Restaurant</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- bootstrap css-->
  <link rel="stylesheet" href="../../assets/css/bootstrap.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="customer/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="customer/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="customer/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="customer/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="customer/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="customer/assets/css/main.css" rel="stylesheet">

</head>

<?php
$query_select_a = $koneksi->query("SELECT * FROM menu");

//menghitung jumlah menu
$jumlahMenu   = mysqli_num_rows($query_select_a);

$query_select_b = $koneksi->query("SELECT * FROM transaksi where status_transaksi = 'onproses'");

//menghitung jumlah status on-proses dalam status_transaksi
$jumlahOnproses   = mysqli_num_rows($query_select_b);

$query_select_c = $koneksi->query("SELECT * FROM transaksi where status_transaksi = 'selesai'");

//menghitung jumlah transaksi yang tersedia
$jumlahTransaksi   = mysqli_num_rows($query_select_c);

$query_select_d = $koneksi->query("SELECT * FROM user where id_role_user = '2'");

//menghitung jumlah kasir yang tersedia
$jumlahKasir  = mysqli_num_rows($query_select_d);

?>


<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Rynth Restaurant<span>.</span></h1>
      </a>


      <!-- navigasi bar -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#events">Kategori Menu</a></li>
          <li>
            <a href="#contact">Contact</a>
          </li>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Enjoy Your Healthy<br>Delicious Food</h2>
          <p data-aos="fade-up" data-aos-delay="100">Resto 123 menyediakan menu menu terbaik untuk pelanggan pelanggan terbaik</p>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="customer/assets/img/image1.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Nomor Reservasi.</h4>
              <p>089515407880</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                ayo makan di resto 123 dijamin puas
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Menyediakan Makanan yang Enak.</li>
                <li><i class="bi bi-check2-all"></i> Bersertifikat Halal.</li>
                <li><i class="bi bi-check2-all"></i> Harga Yang Terjangkau dan cinta masyarakat.</li>
              </ul>
              <p>
                Menyediakan Menu Sarapan, Makan Siang, Dessert dan aneka minuman.
              </p>

              <div class="position-relative mt-4">
                <img src="customer/assets/img/about-2.jpg" class="img-fluid" alt="">
                <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> -->
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Kenapa Pilih Rynth Restaurant?</h3>
              <p>
                Kami percaya pada komitmen terhadap komunitas kami dan membina hubungan jangka panjang dengan
                petani dan nelayan setempat. Menu kami mencerminkan hubungan ini, menampilkan produk lokal musiman serta makanan laut dan daging yang bersumber secara lestari.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Harga Terjangkau</h4>
                  <p>Rynth Restaurant menyediakan makanan berkualitas tinggi dengan harga yang ramah dikantong.</p>
                </div>
              </div>
              <!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Halal</h4>
                  <p>Rynth Restaurant sudah mendapat sertifikasi halal dari MUI.</p>
                </div>
              </div>
              <!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>kualias makanan</h4>
                  <p>kualitas makanan yang kami sediakan ndak main-main loh.</p>
                </div>
              </div>
              <!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Why Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="<?= $jumlahTransaksi ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>
                Transaksi Selesai
              </p>
            </div>
          </div>
          <!-- End Stats Item -->

          <div class="col-lg-4 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="<?= $jumlahMenu ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Menu</p>
            </div>
          </div>
          <!-- End Stats Item -->

          <div class="col-lg-4 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="<?= $jumlahKasir ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Kasir</p>
            </div>
          </div>
          <!-- End Stats Item -->

        </div>

      </div>
    </section>
    <!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Menu kami</h2>
          <p>Cek menu <span>Rynth Restaurant.</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <?php
          $categories = ['Breakfast', 'Lunch', 'Snack', 'Dessert', 'Drink', 'Lainnya'];

          foreach ($categories as $index => $category) {
          ?>
            <li class="nav-item">
              <a class="nav-link <?= $index === 0 ? 'active show' : ''; ?>" data-bs-toggle="tab" data-bs-target="#menu-<?= strtolower($category); ?>">
                <h4><?= $category ?></h4>
              </a>
            </li>
            <!-- End tab nav item -->
          <?php
          }
          ?>
        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
          <?php
          foreach ($categories as $index => $category) {
            $lowercaseCategory = strtolower($category);
            $query = $koneksi->query("SELECT * FROM menu JOIN kategori_menu
                                        ON menu.id_kategori_menu = kategori_menu.id_kategori_menu
                                        WHERE nama_kategori_menu = '$category'");
          ?>
            <div class="tab-pane fade <?= $index === 0 ? 'active show' : ''; ?>" id="menu-<?= $lowercaseCategory; ?>">
              <div class="tab-header text-center">
                <p>Menu</p>
                <h3><?= $category ?></h3>
              </div>

              <div class="row gy-5">
                <?php
                while ($hasil = $query->fetch_object()) {
                ?>
                  <div class="col-lg-4 menu-item">
                    <a href="assets/image/menu/<?= $hasil->photo_menu ?>" class="glightbox">
                      <img src="assets/image/menu/<?= $hasil->photo_menu ?>" style="width: 100%; height: 150px;" class="menu-img img-fluid" alt="">
                    </a>
                    <h4><?= $hasil->nama_menu ?></h4>
                    <p class="ingredients"><?= $hasil->deskripsi_menu ?></p>
                    <p class="price">Rp.<?= $hasil->harga_menu ?></p>
                  </div>
                  <!-- Menu Item -->
                <?php
                }
                $query->free_result();
                ?>
              </div>
            </div>
            <!-- End Category Content -->
          <?php
          }
          ?>
        </div>
      </div>
    </section>
    <!-- End Menu Section -->



    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Kategori Menu</h2>
          <p>Ingin <span>Makan apa</span> Hari ini?</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <?php
            $query = $koneksi->query(" SELECT *FROM kategori_menu
                                        WHERE nama_kategori_menu = 'Breakfast'");
            while ($hasil = $query->fetch_object()) {
            ?>
              <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/image/kategori_menu/<?= $hasil->photo_kategori_menu ?>)">
                <h3>Breakfast</h3>
                <div class="price align-self-start"></div>
                <p class="description">
                  Buat Sarapanmu Jadi lebih berarti
                </p>
              <?php
            }
              ?>
              </div>
              <!-- End Event item -->
              <?php
              $query = $koneksi->query(" SELECT *FROM kategori_menu
                                              WHERE nama_kategori_menu = 'Lunch'");
              while ($hasil = $query->fetch_object()) {
              ?>
                <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/image/kategori_menu/<?= $hasil->photo_kategori_menu ?>)">
                  <h3>Lunch</h3>
                  <div class="price align-self-start"></div>
                  <p class="description">
                    Makan Siang? Rynth Restaurant aja.
                  </p>
                <?php
              }
                ?>
                </div>
                <!-- End Event item -->
                <?php
                $query = $koneksi->query(" SELECT *FROM kategori_menu
                                              WHERE nama_kategori_menu = 'Snack'");
                while ($hasil = $query->fetch_object()) {
                ?>
                  <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/image/kategori_menu/<?= $hasil->photo_kategori_menu ?>)">
                    <h3>Snack</h3>
                    <div class="price align-self-start"></div>
                    <p class="description">
                      Mau makan tapi perut kenyang? ayo coba snack kami.... <b>DIJAMIN PUAS</b>
                    </p>
                  <?php
                }
                  ?>
                  </div>
                  <!-- End Event item -->

                  <?php
                  $query = $koneksi->query(" SELECT *FROM kategori_menu
                                              WHERE nama_kategori_menu = 'Dessert'");
                  while ($hasil = $query->fetch_object()) {
                  ?>
                    <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/image/kategori_menu/<?= $hasil->photo_kategori_menu ?>)">
                      <h3>Dessert</h3>
                      <div class="price align-self-start"></div>
                      <p class="description">
                        Kami juga punya menu yang manis-manis loh, apalagi klo dimakan bareng gebetan bisa diabetes.
                      </p>
                    <?php
                  }
                    ?>
                    </div>
                    <!-- End Event item -->

                    <?php
                    $query = $koneksi->query(" SELECT *FROM kategori_menu
                                              WHERE nama_kategori_menu = 'Drink'");
                    while ($hasil = $query->fetch_object()) {
                    ?>
                      <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/image/kategori_menu/<?= $hasil->photo_kategori_menu ?>)">
                        <h3>Drink</h3>
                        <div class="price align-self-start"></div>
                        <p class="description">
                          Aneka Minuman yang dijamin nyegerin
                        </p>
                      <?php
                    }
                      ?>
                      </div>
                      <!-- End Event item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Events Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Kontak</h2>
          <p>Butuh bantuan? <span>Hubungi Kami</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.5991663070212!2d107.00313355497262!3d-6.211300565241482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d4575679817%3A0x7fee7e380448fb8e!2sKp%20nangka!5e0!3m2!1sid!2sid!4v1701393549004!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
        </div>
        <!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Alamat Kami</h3>
                <p>Kampung Nangka</p>
              </div>
            </div>
          </div>
          <!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Kami</h3>
                <p>Rynth Restaurant@gmail.com</p>
              </div>
            </div>
          </div>
          <!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Kontak Telepon</h3>
                <p>087772735095</p>
              </div>
            </div>
          </div>
          <!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Senin-Jumat:</strong> 10-21 WIB;
                  <strong>Sabtu-Minggu:</strong> Tutup.
                </div>
              </div>
            </div>
          </div>
          <!-- End Info Item -->

        </div>

        <form action="https://formspree.io/f/myyqqlrn" method="post" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
        <!--End Contact Form -->

      </div>
    </section>
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Alamat</h4>
            <p>
              Jalan Kaliabang Tengah <br>
              Bekasi, Jawa Barat - indonesia<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservasi</h4>
            <p>
              <strong>Phone:</strong> +62 895 1540 7880<br>
              <strong>Email:</strong> Rynth Restaurant@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Jam Buka</h4>
            <p>
              <strong>Senin-Jumat:</strong>10 - 21 Wib<br>
              Sabtu - Minggu : Libur
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Rynth Restaurant</span></strong>. All Rights Reserved
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="customer/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="customer/assets/vendor/aos/aos.js"></script>
  <script src="customer/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="customer/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="customer/assets/vendor/swiper/swiper-bundle.min.js"></script>


  <!-- Template Main JS File -->
  <script src="customer/assets/js/main.js"></script>

  <!-- bootstrap js-->
  <script src="../../assets/js/bootstrap.bundle.js"></script>

</body>

</html>