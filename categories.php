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

      .card {
        margin-top: 30px;
        height: auto;
      }
    </style>
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto ml-0">
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
    <main>
      <section id="category" class="category">
        <div class="container" data-aos="fade-up">
          <ul class="nav nav-tabs d-flex justify-content-center mt-5 mb-5" data-aos="fade-up" data-aos-delay="200">

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
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ibindi">
                <h4>More</h4>
              </a>
            </li>

            <!-- End tab nav item -->

          </ul>

          <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

            <div class="tab-pane fade active show" id="imitako">

              <div class="row group_overlay d-flex justify-content-start">

                <div class="col-3 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/imitako/imitako4.jpg" class="glightbox"><img src="assets/img/imitako/imitako4.jpg" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">Inkoko</p>
                    </div>
                  </div>
                </div><!-- category Item -->
                <div class="col-3 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/imitako/imitako1.jpg" class="glightbox"><img src="assets/img/imitako/imitako1.jpg" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">Wall Basket</p>
                    </div>
                  </div>
                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/imitako/insika.png" class="glightbox"><img src="assets/img/imitako/insika.png" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">Insika</p>
                    </div>
                  </div>


                </div><!-- category Item -->


                <div class="col-3 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/imitako/vase1.jpg" class="glightbox"><img src="assets/img/imitako/vase1.jpg" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">Flower Vase </p>
                    </div>
                  </div>
                </div><!-- category Item -->


                <div class="col-3 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/imitako/imigongo.jpg" class="glightbox"><img src="assets/img/imitako/imigongo.jpg" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">Imigongo Design</p>
                    </div>
                  </div>
                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/imitako/imitako8.jpg" class="glightbox"><img src="assets/img/imitako/imitako8.jpg" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">Yellow brown wall basket</p>
                    </div>
                  </div>
                </div><!-- category Item -->
              </div>
            </div><!-- End imitako category Content -->

            <div class="tab-pane fade" id="abami">

              <div class="row gy-5">

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k1.jpg" class="glightbox"><img src="assets/img/gallery/k1.jpg" class="category-img img-fluid" alt=""></a>
                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k2.jpg" class="glightbox"><img src="assets/img/gallery/k2.jpg" class="category-img img-fluid" alt=""></a>
                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k3.jpg" class="glightbox"><img src="assets/img/gallery/k3.jpg" class="category-img img-fluid" alt=""></a>
                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k4.jpg" class="glightbox"><img src="assets/img/gallery/k4.jpg" class="category-img img-fluid" alt=""></a>
                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k5.jpg" class="glightbox"><img src="assets/img/gallery/k5.jpg" class="category-img img-fluid" alt=""></a>

                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k6.jpg" class="glightbox"><img src="assets/img/gallery/k6.jpg" class="category-img img-fluid" alt=""></a>

                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k7.jpg" class="glightbox"><img src="assets/img/gallery/k7.jpg" class="category-img img-fluid" alt=""></a>

                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k8.jpg" class="glightbox"><img src="assets/img/gallery/k8.jpg" class="category-img img-fluid" alt=""></a>

                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k9.jpg" class="glightbox"><img src="assets/img/gallery/k9.jpg" class="category-img img-fluid" alt=""></a>

                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k10.jpg" class="glightbox"><img src="assets/img/gallery/k10.jpg" class="category-img img-fluid" alt=""></a>

                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k11.jpg" class="glightbox"><img src="assets/img/gallery/k11.jpg" class="category-img img-fluid" alt=""></a>

                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k12.jpg" class="glightbox"><img src="assets/img/gallery/k12.jpg" class="category-img img-fluid" alt=""></a>

                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k13.jpg" class="glightbox"><img src="assets/img/gallery/k13.jpg" class="category-img img-fluid" alt=""></a>

                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k14.jpg" class="glightbox"><img src="assets/img/gallery/k14.jpg" class="category-img img-fluid" alt=""></a>

                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k15.jpg" class="glightbox"><img src="assets/img/gallery/k15.jpg" class="category-img img-fluid" alt=""></a>

                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k16.jpg" class="glightbox"><img src="assets/img/gallery/k16.jpg" class="category-img img-fluid" alt=""></a>

                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k17.jpg" class="glightbox"><img src="assets/img/gallery/k17.jpg" class="category-img img-fluid" alt=""></a>

                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k18.jpg" class="glightbox"><img src="assets/img/gallery/k18.jpg" class="category-img img-fluid" alt=""></a>

                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k19.jpg" class="glightbox"><img src="assets/img/gallery/k19.jpg" class="category-img img-fluid" alt=""></a>

                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k20.jpg" class="glightbox"><img src="assets/img/gallery/k20.jpg" class="category-img img-fluid" alt=""></a>

                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k21.jpg" class="glightbox"><img src="assets/img/gallery/k21.jpg" class="category-img img-fluid" alt=""></a>

                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k22.jpg" class="glightbox"><img src="assets/img/gallery/k22.jpg" class="category-img img-fluid" alt=""></a>

                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <a href="assets/img/gallery/k23.jpg" class="glightbox"><img src="assets/img/gallery/k23.jpg" class="category-img img-fluid" alt=""></a>

                </div><!-- category Item -->

              </div>
            </div><!-- End abami category Content -->

            <div class="tab-pane fade" id="imyidagaduro">

              <div class="row gy-5 entertain">


                <div class="col-lg-4 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/game1.jpg" class="glightbox"><img src="assets/img/game1.jpg" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">Urukiramende jumping game</p>
                    </div>
                  </div>
                </div><!-- category Item -->

                <div class="col-lg-4 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/game2.jpg" class="glightbox"><img src="assets/img/game2.jpg" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">Kurasa imyambi(Arrow shooting)</p>
                    </div>
                  </div>


                </div><!-- category Item -->

                <div class="col-lg-4 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/game6.jpg" class="glightbox"><img src="assets/img/game6.jpg" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">Igisoro game </p>
                    </div>
                  </div>
                </div><!-- category Item -->
                <div class="col-lg-4 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/intore.jpg" class="glightbox"><img src="assets/img/intore.jpg" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">Intore traditional dancer</p>
                    </div>
                  </div>
                </div><!-- category Item -->

                <div class="col-lg-4 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/game7.jpg" class="glightbox"><img src="assets/img/game7.jpg" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">Abakaraza drumming</p>
                    </div>
                  </div>
                </div><!-- category Item -->

                <div class="col-lg-4 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/game4.jpg" class="glightbox"><img src="assets/img/game4.jpg" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">Ubuhigi Hunting</p>
                    </div>
                  </div>
                </div><!-- category Item -->

                <div class="col-lg-4 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/abana_bitoza_gusimbuka_urukiramende-d3a9f.jpg" class="glightbox"><img src="assets/img/abana_bitoza_gusimbuka_urukiramende-d3a9f.jpg" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">Kids practising Urukiramende</p>
                    </div>
                  </div>
                </div><!-- category Item -->
              </div>
            </div>

            <!-- End imyidagaduro category Content -->

            <div class="tab-pane fade" id="imyambaro">
              <div class="row gy-5">

                <div class="col-3 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/clothing/inkandaclothing1.jpg" class="glightbox"><img src="assets/img/clothing/inkandaclothing1.jpg" class="category-img img-fluid" alt="" title="Inkanda Clothing"></a>
                    <div class="card-body">
                      <p class="card-text">Inkanda Clothing</p>
                    </div>
                  </div>
                </div><!-- category Item -->
                <div class="col-3 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/clothing/inkandaclothing2.jpg" class="glightbox"><img src="assets/img/clothing/inkandaclothing2.jpg" class="category-img img-fluid" alt="" title="Inkanda Clothing"></a>
                    <div class="card-body">
                      <p class="card-text">Inkanda Clothing</p>
                    </div>
                  </div>
                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/clothing/inkandaclothing3.jpg" class="glightbox"><img src="assets/img/clothing/inkandaclothing3.jpg" class="category-img img-fluid" alt="" title="Inkanda Clothing"></a>
                    <div class="card-body">
                      <p class="card-text">Inkanda Clothing</p>
                    </div>
                  </div>


                </div><!-- category Item -->


                <div class="col-3 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/clothing/inshabure.jpg" class="glightbox"><img src="assets/img/clothing/inshabure.jpg" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">front of Ishabure </p>
                    </div>
                  </div>
                </div><!-- category Item -->
                <div class="col-3 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/clothing/abakobwa_bambaye_ishabure_2_-2-8ca59.jpg" class="glightbox"><img src="assets/img/clothing/abakobwa_bambaye_ishabure_2_-2-8ca59.jpg" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">back of ishabure</p>
                    </div>
                  </div>
                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/clothing/impuzu.jpg" class="glightbox"><img src="assets/img/clothing/impuzu.jpg" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">Impuzu</p>
                    </div>
                  </div>
                </div><!-- category Item -->


                

              </div>
            </div><!-- End entertainment Category Content -->
            <div class="tab-pane fade" id="ibindi">
              <div class="row gy-5">
                <div class="col-3 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/ibindi/Emma Bakayishonga fille du mwami Yuhi Musinga et soeur du mwami Mutara III Rudahigwa.jpg" class="glightbox"><img src="assets/img/ibindi/Emma Bakayishonga fille du mwami Yuhi Musinga et soeur du mwami Mutara III Rudahigwa.jpg" class="category-img img-fluid" alt="" title="Emma Bakayishonga daughter of mwami Yuhi Musinga and sister of mwami Mutara III Rudahigwa"></a>
                    <div class="card-body">
                      <p class="card-text">Emma Bakayishonga daughter of mwami Yuhi Musinga and sister of mwami Mutara III Rudahigwa</p>
                    </div>
                  </div>
                </div><!-- category Item -->
                <div class="col-3 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/ibindi/IMG-1180.JPG" class="glightbox"><img src="assets/img/ibindi/IMG-1180.JPG" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">Uduseke</p>
                    </div>
                  </div>
                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/ibindi/IMG-1164.JPG" class="glightbox"><img src="assets/img/ibindi/IMG-1164.JPG" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">A person with Amasunzu</p>
                    </div>
                  </div>


                </div><!-- category Item -->


                <div class="col-3 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/ibindi/IMG-1169.JPG" class="glightbox"><img src="assets/img/ibindi/IMG-1169.JPG" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">Dancing item</p>
                    </div>
                  </div>
                </div><!-- category Item -->


                <div class="col-3 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/ibindi/IMG-1181.JPG" class="glightbox"><img src="assets/img/ibindi/IMG-1181.JPG" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">A female rwandan with a comb</p>
                    </div>
                  </div>
                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/ibindi/IMG-1167.JPG" class="glightbox"><img src="assets/img/ibindi/IMG-1167.JPG" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text"><bold>Agaseke</bold></p>
                    </div>
                  </div>
                </div><!-- category Item -->
                <div class="col-3 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/ibindi/Le Mwami du Rwanda Mutara Rudahigwa, son épouse la Reine (Umwamikazi) Rosalie Gicanda (1).jpg" class="glightbox"><img src="assets/img/ibindi/Le Mwami du Rwanda Mutara Rudahigwa, son épouse la Reine (Umwamikazi) Rosalie Gicanda (1).jpg" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">The King of Rwanda Mutara Rudahigwa, his wife the Queen (Umwamikazi) Rosalie Gicanda</p>
                    </div>
                  </div>
                </div><!-- category Item -->


                <div class="col-3 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/ibindi/abari_baserukiye_umunsi_mukuru-ba96c.jpg" class="glightbox"><img src="assets/img/ibindi/abari_baserukiye_umunsi_mukuru-ba96c.jpg" class="category-img img-fluid" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">Women wearing traditional clothes <u>Imikenyero</u></p>
                    </div>
                  </div>
                </div><!-- category Item -->


                <div class="col-3 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/ibindi/IMG-1196.JPG" class="glightbox"><img src="assets/img/ibindi/IMG-1196.JPG" class="category-img img-fluid" alt="" title="ingobyi"></a>
                    <div class="card-body">
                      <p class="card-text">Ingobyi</p>
                    </div>
                  </div>
                </div><!-- category Item -->

                <div class="col-3 category-item">
                  <div class="card" style="width: 18rem;">
                    <a href="assets/img/ibindi/IMG-1192.PNG" class="glightbox"><img src="assets/img/ibindi/IMG-1192.PNG" class="category-img img-fluid" alt="" title="ingobyi"></a>
                    <div class="card-body">
                      <p class="card-text">Ingoma</p>
                    </div>
                  </div>
                </div><!-- category Item -->
              </div>

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
    <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  <?php
} else {

  header("Location: ./forms/login.php?id=2");
}

  ?>

  </body>

  </html>