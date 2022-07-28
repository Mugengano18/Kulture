<?php

if (isset($_SESSION['user'])) {


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kulture</title>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main css file -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- tailwind css
  <script src="https://cdn.tailwindcss.com"></script> -->

  <style>
    .close {
      font-size: 1.5rem;
    }

    .col-12 img {
      opacity: 0.7;
      cursor: pointer;
      margin: 2rem;
      width: 100%;
    }

    .col-12 img:hover {
      opacity: 1;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
  </style>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Kulture<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php #home">Home</a></li>
          <li><a href="index.php #about">About</a></li>
          <li><a href="index.php #category">Cultural Items</a></li>
          <li><a href="index.php #museum">Museums</a></li>
          <li><a href="index.php #gallery">Gallery</a></li>
          <li><a href="index.php #contact">Contacts</a></li>
          <li><a href="./forms/login.php">Login</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
  <main style="width: 100%;
  min-height: 60vh;
  padding: 120px 30px">
    <!-- Gallery -->
    <div class="container">
      <div class="row d-flex flex-wrap align-items-center" data-toggle="modal" data-target="#lightbox">
        <div class="col-12 col-md-6 col-lg-3">

          <img src="https://source.unsplash.com/random/200" data-target="#indicators" data-slide-to="0" alt="" />
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <img src="https://source.unsplash.com/random/201" data-target="#indicators" data-slide-to="1" alt="" />
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <img src="https://source.unsplash.com/random/202" data-target="#indicators" data-slide-to="2" alt="" />
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <img src="https://source.unsplash.com/random/203" data-target="#indicators" data-slide-to="3" alt="" />
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <img src="https://source.unsplash.com/random/204" data-target="#indicators" data-slide-to="3" alt="" />
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <img src="https://source.unsplash.com/random/205" data-target="#indicators" data-slide-to="4" alt="" />
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="lightbox" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <button type="button" class="close text-right p-2" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <div id="indicators" class="carousel slide" data-interval="false">
              <ol class="carousel-indicators">
                <li data-target="#indicators" data-slide-to="0" class="active"></li>
                <li data-target="#indicators" data-slide-to="1"></li>
                <li data-target="#indicators" data-slide-to="2"></li>
                <li data-target="#indicators" data-slide-to="3"></li>
                <li data-target="#indicators" data-slide-to="4"></li>
                <li data-target="#indicators" data-slide-to="5"></li>
              </ol>
              <div class="carousel-inner">

                <div class="carousel-item active">

                  <img class="d-block w-100" src="https://source.unsplash.com/random/200" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://source.unsplash.com/random/201" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://source.unsplash.com/random/202" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://source.unsplash.com/random/203" alt="Fourth slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://source.unsplash.com/random/204" alt="Fifth slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://source.unsplash.com/random/205" alt="Sixth slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#indicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- end of gallery -->

    <?php
}

else{
  
  header("Location: ./forms/login.php");
}

?>
  </main>
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">

        <div class="footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex justify-content-center">
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
        &copy; Copyright <strong><span>Kulture & Heritage</span></strong>. All Rights Reserved
      </div>

    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>