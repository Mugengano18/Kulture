<?php
session_start()

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

  <!-- Main css file -->
  <link href="assets/css/main.css" rel="stylesheet">
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
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#category">Cultural Items</a></li>
          <li><a href="#museum">Museums</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contacts</a></li>
          <li><a href="./forms/login.php">Login</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
  <!-- ======= Home Section ======= -->
  <section id="home" class="home d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start ml-5">
          <h2 data-aos="fade-up">Kulture Rwanda.<br>BANYARWANDA.</h2>
          <p data-aos="fade-up" data-aos-delay="100">Rwandans share cultural values notably unity, patriotism, social
            cohesion, resilience, hard work among others, with Kinyarwanda being the common language, spoken in all
            parts the country.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="https://www.youtube.com/watch?v=uOJV9OLnwT8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Brief
                history</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/agaseke.png" class="img-fluid agaseke" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Home Section -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Brief Cultural Description</h2>
          <p>Uniqueness of the traditional dance</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/intore.jpg) ; background-repeat: none; background-size:cover;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>INTORE</h4>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic"> <b>Intore</b>
                was a highly choreographed routine consisting of three components:</p>
              <ul>
                <li><i class="bi bi-check2-all"></i>the ballet,
                  performed by women</li>
                <li><i class="bi bi-check2-all"></i> the dance of heroes, performed by men</li>
                <li><i class="bi bi-check2-all"></i> and the drums. Traditionally, music is
                  transmitted orally with styles varying between the social groups.</li>
              </ul>
              <p>
                It should be noted that traditional music and dance is a vital component of the Rwanda people. Natives
                have a variety of music and dance associated with acts and performance that demonstrates epics
                commemorating bravery, harmony and humorous lyrics to hunting root.
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/kingpalace.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=zmy-zm1Z0b8" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Cultural Benefits ======= -->
    <section id="cultural-benefit" class="cultural-benefit section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Rwandan Culture and Traditions</h3>
              <p>
                Weaving and basket making is a traditional art still used today to make dry containers for storing food
                and medicines. These are also known as peace pots and had traditional values such as to commemorate
                weddings or as a welcome gift.


              </p>
              <div class="text-center">
                <a onclick="myFunction()" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <img src="assets/img/IMG-0928.JPG" alt="" class="img-fluid">
                  <h4>Poetry</h4>
                  <p>Ibitekerezo is a form of epic hero poetry that was performed at the royal court in precolonial
                    Rwanda. This oral tradition serves to explain the history of Rwandan dynasties in poetic form. </p>
                </div>
              </div>

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <img src="assets/img/imigongo.jfif" alt="" class="img-fluid">
                  <h4>Imigongo</h4>
                  <p>A distinctively Rwandan craft is the Imigongo or cow dung paintings that are produced by a local
                    co-operative in the village of Nyakarambi near the border with Tanzania.</p>
                </div>
              </div>

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <img src="assets/img/umuganda.jpg" alt="" class="img-fluid">
                  <h4>Umuganda</h4>
                  <p>In traditional Rwandan culture, members of the community would call upon their family, friends and
                    neighbors to help them complete a difficult task.</p>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Cultural benefits Section -->

    <!-- ======= culture showcase Section ======= -->
    <section id="" class="culture-showcase">
      <div class="container" data-aos="zoom-out">
        <div class="row gy-4">
        </div>
      </div>
    </section><!-- culture showcase Section -->

    <!-- ======= category Section ======= -->
    <section id="category" class="category">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p>Cultural Categories</p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#imitako">
              <h4>Decorations</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#abami">
              <h4>Kings</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#imyidagaduro">
              <h4>Entertainment</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#imyambaro">
              <h4>Clothing</h4>
            </a>
          </li>
          <!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="imitako">

            <div class="tab-header text-center">

              <h3>Imitako(Decorations)</h3>
            </div>


            <div class="row group_overlay">

              <div class="col-lg-4 category-item">
                <a href="assets/img/imitako/imitako1.jpg" class="glightbox"><img src="assets/img/imitako/imitako1.jpg" class="category-img img-fluid" alt=""></a>

              </div><!-- category Item -->

              <div class="col-lg-4 category-item">
                <a href="assets/img/imitako/imitako2.jpg" class="glightbox"><img src="assets/img/imitako/imitako2.jpg" class="category-img img-fluid" alt=""></a>


              </div><!-- category Item -->

              <div class="col-lg-4 category-item">
                <a href="assets/img/imitako/imitako3.jpg" class="glightbox"><img src="assets/img/imitako/imitako3.jpg" class="category-img img-fluid" alt=""></a>


              </div><!-- category Item -->

              <div class="col-lg-4 category-item">
                <a href="assets/img/imitako/imitako4.jpg" class="glightbox"><img src="assets/img/imitako/imitako4.jpg" class="category-img img-fluid" alt=""></a>



              </div><!-- category Item -->

              <div class="col-lg-4 category-item">
                <a href="assets/img/imitako/imitako5.jpg" class="glightbox"><img src="assets/img/imitako/imitako5.jpg" class="category-img img-fluid" alt=""></a>



              </div><!-- category Item -->

              <div class="col-lg-4 category-item">
                <a href="assets/img/imitako/imitako6.webp" class="glightbox"><img src="assets/img/imitako/imitako6.jpg" class="category-img img-fluid" alt=""></a>



              </div><!-- category Item -->
            </div>
          </div><!-- End imitako category Content -->

          <div class="tab-pane fade" id="abami">

            <div class="tab-header text-center">

              <h3>Kings(Abami)</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 category-item">
                <a href="assets/img/kings/king1.jpg" class="glightbox"><img src="assets/img/kings/king1.jpg" class="category-img img-fluid" alt=""></a>
              </div><!-- category Item -->

              <div class="col-lg-4 category-item">
                <a href="assets/img/kings/king2.jpg" class="glightbox"><img src="assets/img/kings/king2.jpg" class="category-img img-fluid" alt=""></a>
              </div><!-- category Item -->

              <div class="col-lg-4 category-item">
                <a href="assets/img/kings/king3.jpg" class="glightbox"><img src="assets/img/kings/king3.jpg" class="category-img img-fluid" alt=""></a>
              </div><!-- category Item -->

              <div class="col-lg-4 category-item">
                <a href="assets/img/kings/king4.jpg" class="glightbox"><img src="assets/img/kings/king4.jpg" class="category-img img-fluid" alt=""></a>
              </div><!-- category Item -->

              <div class="col-lg-4 category-item">
                <a href="assets/img/kings/king5.jpg" class="glightbox"><img src="assets/img/kings/king5.jpg" class="category-img img-fluid" alt=""></a>

              </div><!-- category Item -->

              <div class="col-lg-4 category-item">
                <a href="assets/img/kings/king6.jpg" class="glightbox"><img src="assets/img/kings/king6.jpg" class="category-img img-fluid" alt=""></a>

              </div><!-- category Item -->

            </div>
          </div><!-- End abami category Content -->

          <div class="tab-pane fade" id="imyidagaduro">

            <div class="tab-header text-center">
              <h3>Imyidagaduro</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/game1.jpg" class="glightbox"><img src="assets/img/game1.jpg" style="width:500px; height:200px;" class="menu-img img-fluid" alt=""></a>

              </div><!-- Category Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/game2.jpg" class="glightbox"><img src="assets/img/game2.jpg" style="width:500px; height:200px;" class="menu-img img-fluid" alt=""></a>

              </div><!-- Category Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/game5.jpg" class="glightbox"><img src="assets/img/game5.jpg" style="width:500px; height:200px;" class="menu-img img-fluid" alt=""></a>

              </div><!-- Category Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/game4.jpg" class="glightbox"><img src="assets/img/game4.jpg" style="width:500px; height:200px;" sstyle="width:500px; height:200px;" class="menu-img img-fluid" alt=""></a>

              </div><!-- Category Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/game6.jpg" class="glightbox"><img src="assets/img/game6.jpg" style="width:500px; height:200px;" class="menu-img img-fluid" alt=""></a>

              </div><!-- Category Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/game7.jpg" class="glightbox"><img src="assets/img/game7.jpg" style="width:500px; height:200px;" class="menu-img img-fluid" alt=""></a>

                </p>
              </div><!-- Category Item -->

            </div>
          </div><!-- End imyidagaduro category Content -->

          <div class="tab-pane fade" id="imyambaro">

            <div class="tab-header text-center">
              <h3>Imyambaro</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/inkandaclothing1.jpg" class="glightbox"><img src="assets/img/inkandaclothing1.jpg" style="width:500px; height:200px;" class="menu-img img-fluid" alt=""></a>

              </div><!-- Category Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/inkandaclothing2.jpg" class="glightbox"><img src="assets/img/inkandaclothing2.jpg" style="width:500px; height:200px;" class="menu-img img-fluid" alt=""></a>

              </div><!-- Category Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/inkandaclothing3.jpg" class="glightbox"><img src="assets/img/inkandaclothing3.jpg" style="width:500px; height:200px;" class="menu-img img-fluid" alt=""></a>

              </div>

            </div>
          </div><!-- End entertainment Category Content -->

        </div>
        <div class="col">
          <a href="categories.php">Load More</a>
        </div>

      </div>
    </section><!-- End Category Section -->

    <!-- ======= Cultural places Section ======= -->
    <section id="museum" class="museums">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <!-- <h2>Events</h2> -->
          <p>MUSEUMS</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide museum-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/museums/museum4.jpg); background-size:cover;">
              <h3>Ethnographic museum of Rwanda</h3>
              <p class="description">

                A gift from Belgium’s King Badouin in the late 1980s, the Ethnographic Museum now houses one of Africa’s
                finest ethnographic collections.<br>


              </p>
            </div>

            <div class="swiper-slide museum-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/museums/museum3.jpg); background-size:cover;">
              <h3>King 's Palace</h3>

              <p class="description">
                A reconstruction of the traditional royal residence, the King’s Palace is a beautifully-crafted thatched
                dwelling shaped like a beehive.
              </p>
            </div>

            <div class="swiper-slide museum-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/museums/museum2.jpeg);background-size:contain;">
              <h3>Rwanda Art museum</h3>

              <p class="description">
                Formerly the Presidential Palace Museum, this new museum displays contemporary artworks from Rwanda as
                well as abroad.
              </p>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>gallery</h2>
          <p>Check <span>Our Gallery</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/igisabo2.jpg"><img src="assets/img/gallery/igisabo2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/igisabo3.jpg"><img src="assets/img/gallery/igisabo3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/imbehe1.jpg"><img src="assets/img/gallery/imbehe1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/ingobyi2.jfif"><img src="assets/img/gallery/ingobyi2.jfif" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/ingoma1.jpg"><img src="assets/img/gallery/ingoma1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/inkongoro.jpg"><img src="assets/img/gallery/inkongoro.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/inkongoro4.jpg"><img src="assets/img/gallery/inkongoro4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/inkongoro6.jpg"><img src="assets/img/gallery/inkongoro6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k1.jpg"><img src="assets/img/gallery/k1.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k11.jpg"><img src="assets/img/gallery/k11.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k12.jpg"><img src="assets/img/gallery/k12.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k3.jpg"><img src="assets/img/gallery/k3.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k4.jpg"><img src="assets/img/gallery/k4.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k17.jpg"><img src="assets/img/gallery/k17.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k2.jpg"><img src="assets/img/gallery/k2.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k15.jpg"><img src="assets/img/gallery/k15.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k5.jpg"><img src="assets/img/gallery/k5.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k19.jpg"><img src="assets/img/gallery/k19.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k22.jpg"><img src="assets/img/gallery/k22.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k23.jpg"><img src="assets/img/gallery/k23.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k20.jpg"><img src="assets/img/gallery/k20.jpg" class="img-fluid" alt=""></a>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="row gy-4">



          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>Kulture@rwanda.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+250788997530</p>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/submit.php" method="POST" role="form" class="php-email-form px-3 py-3">
          <div class="row rounded-2">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="text-center"><button type="submit" on>Send Message</button></div>
        </form>
        <!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->

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

  <script>
    function myFunction() {
      alert("Sorry the pages are not build yet!!");
    }
  </script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>