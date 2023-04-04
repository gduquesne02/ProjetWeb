<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Gestion des événements - IUT Informatique</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: TheEvent
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container-fluid container-xxl d-flex align-items-center">
      <div id="logo" class="me-auto">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="accueil.html">The<span>Event</span></a></h1>-->
        <a href="accueil.html" class="scrollto"><img src="assets/img/logo.png" alt="" title="" /></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li>
            <a class="nav-link scrollto active" href="./accueil.php">Accueil</a>
          </li>
          <li>
            <a class="nav-link scrollto" href="./liste_evenement.php">Liste des événements</a>
          </li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
      <a class="buy-tickets scrollto" href="#buy-tickets">Creer un événement</a>
    </div>
  </header>
  <!-- End Header -->

  <main id="main">
    <!-- ======= Venue Section ======= -->
    <section id="venue">
      <div class="container-fluid" data-aos="fade-up">
        <div class="section-header">
          <h2>Description et planning de l'événement</h2>
        </div>

        <div class="row g-0">
          <div class="col-lg-6 venue-map">
            <iframe src="https://www.google.com/maps/embed/v1/streetview?location=50.9509,1.8837&key=AIzaSyBlj0zUtHia8dyKhp1N7CP8OqYA0usfec0" frameborder="0" style="border: 0" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6 venue-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8 position-relative">
                <h3>Downtown Conference Center, New York</h3>
                <p>
                  Iste nobis eum sapiente sunt enim dolores labore accusantium
                  autem. Cumque beatae ipsam. Est quae sit qui voluptatem
                  corporis velit. Qui maxime accusamus possimus. Consequatur
                  sequi et ea suscipit enim nesciunt quia velit.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid venue-gallery-container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-0">
          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/1.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/1.jpg" alt="" class="img-fluid" />
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/2.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/2.jpg" alt="" class="img-fluid" />
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/3.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/3.jpg" alt="" class="img-fluid" />
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/4.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/4.jpg" alt="" class="img-fluid" />
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/5.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/5.jpg" alt="" class="img-fluid" />
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/6.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/6.jpg" alt="" class="img-fluid" />
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/7.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/7.jpg" alt="" class="img-fluid" />
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/8.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/8.jpg" alt="" class="img-fluid" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Venue Section -->

    <!-- ======= Schedule Section ======= -->
    <section id="schedule" class="section-with-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Event Schedule</h2>
          <p>Here is our event schedule</p>
        </div>

        <h3 class="sub-heading">
          Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet
          officia. Eius necessitatibus voluptatem quis labore perspiciatis
          quia.
        </h3>

        <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
            <div class="row schedule-item">
              <div class="col-md-2"><time>09:30 AM</time></div>
              <div class="col-md-10">
                <h4>Registration</h4>
                <p>
                  Fugit voluptas iusto maiores temporibus autem numquam
                  magnam.
                </p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/1.jpg" alt="Brenden Legros" />
                </div>
                <h4>Keynote <span>Brenden Legros</span></h4>
                <p>Facere provident incidunt quos voluptas.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/2.jpg" alt="Hubert Hirthe" />
                </div>
                <h4>
                  Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span>
                </h4>
                <p>
                  Maiores dignissimos neque qui cum accusantium ut sit sint
                  inventore.
                </p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/3.jpg" alt="Cole Emmerich" />
                </div>
                <h4>
                  Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span>
                </h4>
                <p>
                  Veniam accusantium laborum nihil eos eaque accusantium
                  aspernatur.
                </p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/4.jpg" alt="Jack Christiansen" />
                </div>
                <h4>
                  Qui non qui vel amet culpa sequi.
                  <span>Jack Christiansen</span>
                </h4>
                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/5.jpg" alt="Alejandrin Littel" />
                </div>
                <h4>
                  Quos ratione neque expedita asperiores.
                  <span>Alejandrin Littel</span>
                </h4>
                <p>
                  Eligendi quo eveniet est nobis et ad temporibus odio quo.
                </p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/6.jpg" alt="Willow Trantow" />
                </div>
                <h4>
                  Quo qui praesentium nesciunt <span>Willow Trantow</span>
                </h4>
                <p>
                  Voluptatem et alias dolorum est aut sit enim neque
                  veritatis.
                </p>
              </div>
            </div>
          </div>
          <!-- End Schdule Day 1 -->
        </div>
      </div>
    </section>
    <!-- End Schedule Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-info">
            <img src="assets/img/logo.png" alt="TheEvenet" />
            <p>
              Cette application a été développée pour les IUTs de France afin de créer, visualiser et gérer les évènements inter-IUTs.
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Liens</h4>
            <ul>
              <li>
                <i class="bi bi-chevron-right"></i> <a href="./accueil.html">Accueil</a>
              </li>
              <li>
                <i class="bi bi-chevron-right"></i> <a href="./liste_evenement.php">Événements</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Nous contacter</h4>
            <div class="social-links">
              <a href="https://twitter.com/lesIUT" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
              <a href="https://fr-fr.facebook.com/lesiut/" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/les_iut/" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/school/iut-institut-universitaire-de-technologie-/" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>