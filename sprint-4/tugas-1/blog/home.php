<?php
session_start();
include 'koneksi.php';
if ($_SESSION['id_user'] === null) {
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>AlMishbah</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="portfolio, AlMishbah" name="keywords">
  <meta content="Portfolio milik roihan mishbahul anam" name="description">

  <!-- Favicons -->
  <link href="img/a.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style-sky-blue.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">AlMishbah</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">

      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#category">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="buat.php">Buat Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/back.jpg); background-position: top">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4 text-light" style="margin-top: 300px">Hallo ! <?= $_SESSION['id_user'] ?></h1>
          <p class="intro-subtitle"><span class="text-slider-items">Selamat Datang,Di Blog</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  
  <!--/ Section Services Star /-->
  <section id="category" class="services-mf route">
      </section>
  <!--/ Section Services End /-->

  
  <!--/ Section Portfolio Star /-->
  <?php
  $sql = "SELECT * FROM artikel INNER JOIN kategori ON artikel.id_kategori = kategori.id_kategori INNER JOIN user ON artikel.id_user = user.id_user ";
  $conn = new PDO("mysql:host=localhost; dbname=blog", 'root', '');
  $statement = $conn->prepare($sql);
  $statement->execute();
  $getData = $statement->fetchAll(PDO::FETCH_ASSOC);
  ?>
  <section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Kategori
            </h3>
            <p class="subtitle-a">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
            <a href="?id=1" class="btn btn-outline-primary btn-sm">Web Programming</a>
            <a href="?id=2" class="btn btn-outline-primary btn-sm">Mobile</a>
            <?php

              if (isset($_GET['id'])) {
                $sql = "SELECT * FROM artikel INNER JOIN user ON artikel.id_user = user.id_user WHERE id_kategori= $_GET[id]";
                
                
              }
              $conn = new PDO("mysql:host=localhost; dbname=blog", 'root', '');
                $statement = $conn->prepare($sql);
                $statement->execute();
                $getData = $statement->fetchAll(PDO::FETCH_ASSOC);
            ?>
            
          </div>
        </div>
      </div>
      <div class="row">
        <?php foreach ($getData as $key => $data):
        $_SESSION['id'] = $data['id_user'];
        
       ?>

        <div class="col-md-4">
          <div class="work-box">
            <a href="tampil.php?id=<?= $data['id_artikel'] ?>">
              <div class="work-img">
                <img src="img/work-1.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  
                  <div class="col-sm-8">  
                    <h2 class="w-title"><?= $data['judul'] ?></h2>
                    <div class="w-more">
                      Penulis <span class="w-ctegory"><?= $data['username'] ?></span>/ <span class="w-date"><?= $data['tanggal'] ?></span>
                    </div>
                    <div class="col-sm-3">
                    <div class="w-like">
                    <a onclick="return confirm('Anda yakin akan menghapusnya?')" href="delete.php?id=<?= $data['id_artikel'] ?>"><span class="ion-ios-trash-outline"></span></a>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <?php endforeach; ?>
        
      </div>
    </div>
  </section>
  <!--/ Section Portfolio End /-->

  
  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-10">
                  
                <div class="col-md-10">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Get in Touch
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum dolorem soluta quidem
                      expedita aperiam aliquid at.
                      Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis
                      mollitia inventore?
                    </p>
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span> Jl. Raya Karang Sembung No.32, Karangtengah, Kec. Karangsembung, Cirebon, Jawa Barat 45186</li>
                      <li><span class="ion-ios-telephone"></span> +62895347432531</li>
                      <li><span class="ion-email"></span> roihanmisbahulanam140@gmail.com</li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href="https://www.facebook.com/roihanmish28"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href="https://www.instagram.com/roihanmish_28/"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      <li><a href="https://github.com/AlMishbah"><span class="ico-circle"><i class="ion-social-github"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
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
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
