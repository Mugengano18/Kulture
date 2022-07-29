<?php
session_start();

if (isset($_SESSION['id'])) {

?>


  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kulture</title>
    <!-- Favicons -->
    <link href="assets/img/kultureicon.svg" rel="icon">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Main css file -->

    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

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
            <li><a href="./forms/logout.php">Logout</a></li>
          </ul>
        </nav><!-- .navbar -->

      </div>
    </header>
    <!-- End Header -->
    <main class="mt-5" data-aos="fade-up" data-aos-delay="200">
      <!--Learn section-->
      <section id="learn" class="p-5">
        <div class="container">
          <div class="row align-iteams-center justify-content-between">
            <div class="col-md py-5">
            <a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/inyambo3.jpg"><img src="assets/img/gallery/inyambo3.jpg" class="img-fluid h-100" alt="" title="Inyambo"></a>
            </div>
            <div class="col-md p-5 ">
              <h2>Rwandan culture values</h2>
              <p>Rwandan values are centered on fundamental ideas that allow people to live happily, freely, and with mutual respect. Individual rights and dignity in the family are prioritized based on how people carry out their activities.
                The fundamental principles are also expressed in the citizen's freedom to live freely, peacefully, and humanely in his or her nation.</p>

              <p>Rwandan values are based on fundamental ideas that allow people to live happily, freely, and with mutual respect. They emphasize individual rights and dignity in the family, depending on how people carry out their activities.

                The fundamental principles are also expressed in the citizen's freedom to live freely, peacefully, and humanely in his nation.</p>

              <p>A patriotic Rwandan should be happy to be a Rwandan, regardless of birthplace, area, religion, social stratification, ethnicity,
                or any other behavior that prevents others from identifying them as Rwandans.</p>
            </div>

          </div>
          <div class="row align-iteams-center justify-content-between">
            <div class="col-md p-5 ">
              <h2>Culture's Influence</h2>
              <p>Culture influences the formation of our attitudes. Our cultural values shape how we live our lives.
                It is the ultimate social control system in which individuals monitor their own standards and conduct.
                Our cultural values serve as the foundation of our lives. They have an impact on our thinking, conduct, and personality.</p>

              <h5 class="pt-5">Why then should individuals engage concerning Rwandan culture?</h5>
              <p style="color: black;  ">Citizens should be familiar with Rwandan culture in order to comprehend what it means to be a Rwandan, mostly by learning Rwanda's history from the beginning in order to plan for a better future. They also study Rwandan values like patriotism, heroism,
                hard effort, transparency, and others to help them develop their beliefs and attributes of a good citizen.</p>
            </div>
            <div class="col-md py-5">
            <a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/ingoma1.jpg"><img src="assets/img/gallery/ingoma1.jpg" class="img-fluid h-100" alt="" title="Ingoma"></a>
            </div>

          </div>
        </div>
      </section>

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
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  <?php
} else {

  header("Location: ./forms/login.php?id=3");
}

  ?>
  </body>

  </html>