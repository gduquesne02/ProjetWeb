<?php
require("./conf.php");
session_start();
?>

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
        <!-- <h1><a href="accueil.php">The<span>Event</span></a></h1>-->
        <a href="accueil.php" class="scrollto"><img src="assets/img/logo.png" alt="" title="" /></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li>
            <a class="nav-link scrollto active" href="./accueil.php">Accueil</a>
          </li>
          <li>
            <a class="nav-link scrollto" href="./liste_evenement.php">Liste des événements</a>
          </li>

          <li>
            <a class="nav-link scrollto" href="GestionUser.php">Gestion de l'utilisateur</a>
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
          <li><a class="nav-link scrollto" href="./contactform.html">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
      <?php
      if ($_SESSION['status'] != 'USER') {
        echo '<a class="buy-tickets scrollto" href="./create_event.html">Creer un événement</a>';
        if ($_SESSION['status'] != 'ADMIN') {
          echo '<a class="buy-tickets scrollto" href="./inscription.php">Ajouter un utilisateur</a>';
        }
      }
      ?>
      
    </div>
    <?php if (isset($_SESSION['FirstName']) && isset($_SESSION['LastName'])) {
                    echo "<div class = 'u_info_isCo'><div class='ele1'>" . $_SESSION['FirstName'] . "   " . $_SESSION['LastName'] . "</div> <div class='ele2'><a href='./deconnexion.php'>Déconnexion</a></div></div>";
                  } else {
                    echo "<span class='u_info_isDeco'><a href = './index.php' class='connexion'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-door-open' viewBox='0 0 16 16'>
                <path d='M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z'/>
                <path d='M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z'/>
                </svg>connexion</a></span>";
                  } ?>
              </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">
        Bienvenue sur <br /><span>l'application web de gestion des événements</span>
        des iut informatiques
      </h1>
      <p class="mb-4 pb-0">Liste des événements de votre département</p>
      <a href="./liste_evenement.php" class="about-btn scrollto">Événements</a>
    </div>
  </section>
  <!-- End Hero Section -->

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
                <i class="bi bi-chevron-right"></i> <a href="./accueil.php">Accueil</a>
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