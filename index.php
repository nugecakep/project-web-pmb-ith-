<?php 
session_start();
if (isset($_SESSION['login_user'])) {
    header("Location:user/layouts/index.php");
}

if (isset($_SESSION['login_admin'])) {
    header("Location:admin/layouts/index.php");
}

require 'function.php';

if (isset($_POST['daftar'])) {
   if (register($_POST) > 0) {
       echo "<script>
                alert('Kamu Berhasil Registrasi');
            </script>";
   }
}

if (isset($_POST['login'])) {
    $login_result = login($_POST);
    if ($login_result == "user_login") {
        header("Location:user/layouts/index.php");
    } elseif ($login_result == "admin_login") {
        header("Location:admin/layouts/index.php");
    } else {
        echo "<script>
            alert('Username / Password Kamu Salah');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PMB ITH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets2/img/ITHH.jpeg" rel="icon">
  <link href="assets2/img/ITHH.jpeg" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets3/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets3/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets3/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets3/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets3/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets3/css/main.css" rel="stylesheet">
  <script>
    
  </script>

  <!-- =======================================================
  * Template Name: BizLand
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Updated: Jun 14 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:admission@ith.ac.id">admission@ith.ac.id</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>082117775595</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="https://www.facebook.com/ith.parepare?mibextid=LQQJ4d" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/ith.campus?igsh=emVzYzluc296YTVx" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="https://youtube.com/@ith_idn?si=C30KThCx014w-YbX" class="youtube"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets3/img/logo.png" alt=""> -->
          <h1 class="sitename">ITH</h1>
          <span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#test-form" class="login popup-with-form login-icon">Login</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>

  <main class="main">


    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>APLIKASI PMB <span>ITH</span></h1>
            <p>APLIKASI PENERIMAAN MAHASISWA BARU INSTITUT TEKNOLOGI BACHARUDDIN JUSUF HABIBIE</p>
            <div class="d-flex">
              <a href="https://youtu.be/P67U3IKVeAc?si=n-JAhd4056srYFU9" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->
    <!-- Stats Section -->
    <section id="stats" class="stats section">

    <!-- Stats Section -->
  <section class="stats-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
          <i class="bi bi-laptop fa-3x"></i>
          <div class="stats-item">
            <span data-purecounter-start="0" data-purecounter-end="120" data-purecounter-duration="1" class="purecounter"></span>
            <p>JUMLAH ILMU KOMPUTER</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
          <i class="bi bi-file-text fa-3x"></i>
          <div class="stats-item">
            <span data-purecounter-start="0" data-purecounter-end="80" data-purecounter-duration="1" class="purecounter"></span>
            <p>JUMLAH SISTEM INFORMASI</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
          <i class="bi bi-calculator fa-3x"></i>
          <div class="stats-item">
            <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
            <p>JUMLAH MATEMATIKA</p>
          </div>
        </div><!-- End Stats Item -->
      </div><!-- End Row -->
    </div><!-- End Container -->
  </section><!-- /Stats Section -->


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  
    <!-- Form Log In -->
    <form id="test-form" class="white-popup-block mfp-hide animated fadeInUp" method="post" action="">
      <div class="form-container">
      <button type="button" class="close-button" onclick="closeForm()"><i class="fas fa-times"></i></button>
          <div class="logo text-center">
              <a href="#">
                  <img src="assets2/img/ii.png" alt="Logo">
              </a>
          </div>
          <h3 class="text-center">Masuk Untuk Mendaftar</h3>
          <input type="email" placeholder="Enter Email" name="email">
          <input type="password" placeholder="Password" name="password">
          <button type="submit" name="login">Sign in</button>
          <p class="text-center dont-have-acc"><a class="dont-hav-acc" href="#test-form2">Belum Punya Akun PMB ITH? Ayo Daftar !!</a></p>
      </div>
  </form>

  <form id="test-form2" class="white-popup-block mfp-hide animated fadeInUp" action="" method="post">
  <div class="form-container">
      <button type="button" class="close-button" onclick="closeForm()"><i class="fas fa-times"></i></button>
      <div class="logo text-center">
          <a href="#">
              <img src="assets2/img/ii.png" alt="Logo">
          </a>
      </div>
      <h3 class="text-center">Daftar Akun PMB ITH</h3>
      <input type="text" placeholder="Masukan Nama" name="nama">
      <input type="text" placeholder="Masukan NISN" name="nisn">
      <input type="text" placeholder="Masukan Username" name="username">
      <input type="email" placeholder="Masukan email" name="email">
      <input type="password" placeholder="Password" name="password">
      <input type="password" placeholder="Confirm password" name="password_confirmation">
      <button type="submit" class="boxed_btn_orange" name="daftar">Daftar</button>
  </div>
</form>

  <!-- Vendor JS Files -->
  <script src="assets3/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets3/vendor/php-email-form/validate.js"></script>
  <script src="assets3/vendor/aos/aos.js"></script>
  <script src="assets3/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets3/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets3/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets3/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets3/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets3/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets3/js/main.js"></script>
  <script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            nav: false,
            dots: true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });
    });
    $(document).ready(function() {
$(".close-button").click(function() {
    $.magnificPopup.close();
});
});
</script>
<script>
function closeForm() {
    document.getElementById("test-form2").classList.remove("fadeInUp");
    document.getElementById("test-form2").classList.add("fadeOutDown");
    setTimeout(function() {
        document.getElementById("test-form2").classList.remove("mfp-hide");
    }, 500);
}
</script>
</body>

    <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets2/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets2/css/magnific-popup.css">
    <link rel="stylesheet" href="assets2/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets2/css/themify-icons.css">
    <link rel="stylesheet" href="assets2/css/nice-select.css">
    <link rel="stylesheet" href="assets2/css/flaticon.css">
    <link rel="stylesheet" href="assets2/css/gijgo.css">
    <link rel="stylesheet" href="assets2/css/animate.css">
    <link rel="stylesheet" href="assets2/css/slicknav.css">
    <link rel="stylesheet" href="assets2/css/style.css">

    <style>
        body {
            background: #fff;
            font-size: 24px;
            margin: 0;
            padding: 0;
            position: relative;
        }
        .boxed_btn_orange {
            background: #184eba;
            border: none;
            color: #fff;
            display: inline-block;
            padding: 10px 20px;
            text-align: center;
            cursor: pointer;
            font-weight: 600;
            font-size: 16px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        .boxed_btn_orange:hover {
            background: #cc8400;
        }
        #hero {
        background: url('assets2/img/kampus.jpeg') center center/cover no-repeat;
    /* 
      - 'path/to/kampus.jpeg' adalah path relatif dari gambar Anda.
      - center center/cover no-repeat adalah untuk menentukan posisi, ukuran, dan pengulangan background.
    */
  }

        .popup_inner {
            padding: 40px;
            background: #fff;
            box-shadow: 0px 0px 20px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        .slider_info h4,.slider_info h3, .slider_info h2 {
            color: #fff;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
        }    
        .illustrator_png {
            max-width: 450px;
            margin: 0 auto;
        }

        .illustrator_png img {
            width: 80%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
        }

        .logo-img img {
            max-width: 150px;
        }

        .animated {
            animation-duration: 1s;
            animation-fill-mode: both;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .fadeInUp {
            animation-name: fadeInUp;
        }

        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0,0,0,0.1);
        }
        .form-container h3 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
            color: #184eba;
        }
        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background: none;
            border: none;
            color: #fff;
            cursor: pointer;
            font-size: 20px;
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
        .close-button:hover {
            color: #ccc;
        }

        .form-container button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px 20px;
            margin-top: 10px;
            border: none;
            background: #184eba;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .form-container button[type="submit"]:hover {
            background: #cc8400;
        }
        
        .footer_area {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
        .footer_social {
            margin-bottom: 10px;
        }
        .styled-logo {
            border: 5px solid #FFA500;
            border-radius: 15px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            padding: 10px; 
            transition: transform 0.3s ease; 
        }
        .styled-logo:hover {
            transform: scale(1.05); 
        }
        
        .footer_social a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
    </style>



    <!-- Form Log In -->
    <form id="test-form" class="white-popup-block mfp-hide animated fadeInUp" method="post" action="">
        <div class="form-container">
        <button type="button" class="close-button" onclick="closeForm()"><i class="fas fa-times"></i></button>
            <div class="logo text-center">
                <a href="#">
                    <img src="assets2/img/ii.png" alt="Logo">
                </a>
            </div>
            <h3 class="text-center">Masuk Untuk Mendaftar</h3>
            <input type="email" placeholder="Enter Email" name="email">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" name="login">Sign in</button>
            <p class="text-center dont-have-acc"><a class="dont-hav-acc" href="#test-form2">Belum Punya Akun PMB ITH? Ayo Daftar !!</a></p>
        </div>
    </form>

    <form id="test-form2" class="white-popup-block mfp-hide animated fadeInUp" action="" method="post">
    <div class="form-container">
        <button type="button" class="close-button" onclick="closeForm()"><i class="fas fa-times"></i></button>
        <div class="logo text-center">
            <a href="#">
                <img src="assets2/img/ii.png" alt="Logo">
            </a>
        </div>
        <h3 class="text-center">Daftar Akun PMB ITH</h3>
        <input type="text" placeholder="Masukan Nama" name="nama">
        <input type="text" placeholder="Masukan NISN" name="nisn">
        <input type="text" placeholder="Masukan Username" name="username">
        <input type="email" placeholder="Masukan email" name="email">
        <input type="password" placeholder="Password" name="password">
        <input type="password" placeholder="Confirm password" name="password_confirmation">
        <button type="submit" class="boxed_btn_orange" name="daftar">Daftar</button>
    </div>
</form>

 <!-- About Section -->
 <section id="about" class="about section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>About</h2>
  <p><span>TENTANG PMB ITH</span> <span class="description-title">INFORMASI JURUSAN DAN PRODI</span></p>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-3">

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
      <img src="assets2/img/ithh.jpg" alt="" class="img-fluid">
    </div>

    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
      <div class="about-content ps-0 ps-lg-3">
        <h3>ITH TAHUN 2024 MEMBUKA 2 JURUSAN, 3 PRODI DAN 2 JALUR YAITU UTBK DAN PRESTASI.</h3>
        <p class="fst-italic">
          Ilmu Komputer, Sistem Informasi, dan Matematika. PRODI tersebut sangat dibutuhkan di era sekarang. 
        </p>
        <ul>
          <li>
            <i class="bi bi-diagram-3"></i>
            <div>
              <h4>JURUSAN TEKNOLOGI PANGAN DAN INDUSTRI(TPI)</h4>
              <p>Prodi ILMU KOMPUTER</p>
            </div>
          </li>
          <li>
            <i class="bi bi-fullscreen-exit"></i>
            <div>
              <h4>JURUSAN SAINS</h4>
              <p>Prodi SISTEM INFORMASI DAN MATEMATIKA</p>
            </div>
          </li>
        </ul>
        <p>
         Institut Teknologi Bacharuddin Jusuf Habibie merupakan perguruan tinggi negeri ke 5 yang berbasis teknologi.
         ITH memiliki visi yaitu "unggul dalam Ilmu Pengetahuan dan Teknologi berbasis inovasi benua maritim Indonesia".
        </p>
      </div>

    </div>
  </div>

</div>

</section><!-- /About Section -->

   <!-- Contact Section -->
   <section id="contact" class="contact section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Contact</h2>
  <p><span>BUTUH BANTUAN?</span> <span class="description-title">HUBUNGI KAMI</span></p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">

    <div class="col-lg-5">

      <div class="info-wrap">
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h3>ALAMAT</h3>
            <p>Jl. Balaikota No.1, Bumi Harapan, Kec. Bacukiki Bar., Kota Parepare, Sulawesi Selatan 91122</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>NO TELP</h3>
            <p>082117775595</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>EMAIL</h3>
            <p>admission@ith.ac.id</p>
          </div>
        </div><!-- End Info Item -->

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.959094206951!2d119.63075877397165!3d-4.028765195944979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d95bbb762bcd13d%3A0x95845218a1ae2419!2sInstitut%20Teknologi%20Bacharuddin%20Jusuf%20Habibie%20(%20ITH%20)%20Kampus%201%20Rektorat!5e0!3m2!1sen!2sus!4v1719201511480!5m2!1sen!2sus" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <div class="col-lg-7">
  <form action="mailto:muhmmdanugrahh@gmail.com" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200" enctype="text/plain">
    <div class="row gy-4">

      <div class="col-md-6">
        <label for="name-field" class="pb-2">Nama</label>
        <input type="text" name="name" id="name-field" class="form-control" required="">
      </div>

      <div class="col-md-6">
        <label for="email-field" class="pb-2">Email</label>
        <input type="email" class="form-control" name="email" id="email-field" required="">
      </div>

      <div class="col-md-12">
        <label for="subject-field" class="pb-2">Subject</label>
        <input type="text" class="form-control" name="subject" id="subject-field" required="">
      </div>

      <div class="col-md-12">
        <label for="message-field" class="pb-2">Pesan</label>
        <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
      </div>

      <div class="col-md-12 text-center">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>

        <button type="submit">Send Message</button>
      </div>

    </div>
  </form>
</div><!-- End Contact Form -->

  </div>

</div>

</section><!-- /Contact Section -->



    <!-- JS here -->
    <script src="assets2/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="assets2/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets2/js/popper.min.js"></script>
    <script src="assets2/js/bootstrap.min.js"></script>
    <script src="assets2/js/owl.carousel.min.js"></script>
    <script src="assets2/js/isotope.pkgd.min.js"></script>
    <script src="assets2/js/ajax-form.js"></script>
    <script src="assets2/js/waypoints.min.js"></script>
    <script src="assets2/js/jquery.counterup.min.js"></script>
    <script src="assets2/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets2/js/scrollIt.js"></script>
    <script src="assets2/js/jquery.scrollUp.min.js"></script>
    <script src="assets2/js/wow.min.js"></script>
    <script src="assets2/js/nice-select.min.js"></script>
    <script src="assets2/js/jquery.slicknav.min.js"></script>
    <script src="assets2/js/jquery.magnific-popup.min.js"></script>
    <script src="assets2/js/plugins.js"></script>
    <script src="assets2/js/gijgo.min.js"></script>

    <!-- contact js -->
    <script src="assets2/js/contact.js"></script>
    <script src="assets2/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets2/js/jquery.form.js"></script>
    <script src="assets2/js/jquery.validate.min.js"></script>
    <script src="assets2/js/mail-script.js"></script>

    <script src="assets2/js/main.js"></script>

    <!-- Initialize Owl Carousel -->
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                nav: false,
                dots: true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });
        });
        $(document).ready(function() {
    $(".close-button").click(function() {
        $.magnificPopup.close();
    });
});
    </script>
    <script>
    function closeForm() {
        document.getElementById("test-form2").classList.remove("fadeInUp");
        document.getElementById("test-form2").classList.add("fadeOutDown");
        setTimeout(function() {
            document.getElementById("test-form2").classList.remove("mfp-hide");
        }, 500);
    }
</script>

</body>
</html>
