<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Meal Planner</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="<?php echo base_url()?>assets/Reveal/assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url()?>assets/Reveal/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url()?>assets/Reveal/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/Reveal/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/Reveal/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/Reveal/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/Reveal/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/Reveal/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url()?>assets/Reveal/assets/css/style.css" rel="stylesheet">
  <style>
    .portfolio-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .portfolio-item {
        text-align: center;
        margin-bottom: 30px;
    }

    .img-fluid {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .resep-info {
        margin-top: 15px;
    }

    .resep-info h4 {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .resep-info p {
        font-size: 14px;
        color: #777;
        margin-bottom: 15px;
    }

    .portfolio-lightbox, .details-link {
        font-size: 20px;
        color: #5cb874;
        margin-right: 10px;
    }
  </style>
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
  <div class="container d-flex justify-content-between">
    <style>
      #logo img {
        width: 160px;
        height: auto;
      }
    </style>
    <div id="logo">
      <h1><a href="#"><img src="<?php echo base_url('assets/img/logo_meal_plan.png'); ?>" alt="Meal Plan Logo"></a></h1>
    </div>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="<?php echo site_url('welcome'); ?>">Home</a></li>
        <li><a class="nav-link scrollto" href="#recipe">Resep</a></li>
        <li><a class="nav-link scrollto" href="#testimonials">Testimonial</a></li>
        <li class="dropdown"><a href="#"><span>Features</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="<?php echo base_url('/recipe') ?>">Resep</a></li>
            <li><a href="<?php echo base_url('/pantry_data') ?>">Bahan Saya</a></li>
            <li><a href="<?php echo base_url('/save_recipes') ?>">Resep Tersimpan</a></li>
          </ul>
        </li>
        <?php if ($this->session->userdata('user_id')): ?>
          <li><a class="nav-link scrollto" href="<?php echo site_url('log/logout'); ?>">Logout</a></li>
        <?php else: ?>
          <li><a class="nav-link scrollto" href="<?php echo site_url('log'); ?>">Login</a></li>
        <?php endif; ?>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>
</header><!-- End Header -->

<!-- ======= Recipe Section ======= -->
<section id="recipe" class="recipe section-bg">
  <div class="container">
    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
      <?php if(!empty($recipes)) : ?>
        <?php foreach ($recipes as $recipe): ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="<?php echo base_url('uploads/' . $recipe['img_recipe']); ?>" class="img-fluid" alt="<?php echo $recipe['recipe_name']; ?>">
                <div class="resep-info">
                    <h4><?php echo $recipe['recipe_name']; ?></h4>
                    <p><?php echo $recipe['category']; ?></p>
                    <a href="<?php echo base_url('uploads/' . $recipe['img_recipe']); ?>" data-gallery="resepGallery" class="portfolio-lightbox preview-link" title="<?php echo $recipe['recipe_name']; ?>"><i class="bx bx-plus"></i></a>
                    <a href="<?php echo site_url('detail_resep/'.$recipe['recipe_id']); ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p>No recipes found.</p>
      <?php endif; ?>
    </div>
  </div>
</section><!-- End Recipe Section -->

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong>Meal Planner</strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">Maysi Ui</a>
    </div>
  </div>
</footer><!-- End Footer -->

<script src="<?php echo base_url('/assets/Reveal/');?>assets/vendor/aos/aos.js"></script>
<script src="<?php echo base_url('/assets/Reveal/');?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('/assets/Reveal/');?>assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo base_url('/assets/Reveal/');?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url('/assets/Reveal/');?>assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo base_url('/assets/Reveal/');?>assets/vendor/php-email-form/validate.js"></script>
<script src="<?php echo base_url('/assets/Reveal/');?>assets/js/main.js"></script>
</body>
</html>
