<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Mee Planner</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url('/assets/Reveal/');?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Montserrat" rel="stylesheet">
  <link href="<?php echo base_url('/assets/Reveal/');?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('/assets/Reveal/');?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url('/assets/Reveal/');?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php echo base_url('/assets/Reveal/');?>assets/css/style.css" rel="stylesheet">
  <style>
    #hero {
      position: relative;
      width: 100%;
      height: 100vh; /* Adjust height as needed */
      padding: 100px 0; /* Adjust padding to push content down */
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #F6F5F2;
    }

    .hero-content {
      text-align: center;
      position: absolute;
      top: 100%;
      left: 100%;
      transform: translate(-50%, -50%);
      color: #656666;
    }

    .hero-slider .swiper-slide {
      width: 100%;
      height: 100vh; /* Make the slides full height */
      background-size: cover;
      background-position: center;
    }

    .portfolio-item img {
      width: 200%; /* Ensure image fits the container */
      height: 280px; /* Fixed height */
      object-fit: cover; /* Maintain aspect ratio and cover the container */
      border-radius: 10px;
    }

    .section-header {
      text-align: center;
    }

    .section-header h2 {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .section-header h2 span {
      margin: 0 10px; /* Optional: Add some space between the spans */
    }

    .section-header .resep {
      color: black;
      font-weight: bold;
      text-decoration: none;
    }

    .section-header .terpopuler {
      color: #1AC84B;
      font-weight: bold;
      text-decoration: none;
    }
  </style>
</head>
<body>
<!-- ======= Hero Section ======= -->
<section id="hero">

  <div class="hero-content" data-aos="fade-up">
  <h2 style="text-align: center;">
  <span style="color: black; font-weight: bold; text-decoration: none;">Welcome to</span><br>
  <span style="color: #FACE00; text-decoration: none; font-weight: bold;">
    Mee 
    <img src="<?php echo base_url('assets/img/chef.png') ?>" alt="chef" style="width: 50px; height: 50px; vertical-align: middle;">
    Planner
  </span>
</h2>

    <h3>
      Bikin <span style="color: black; font-weight: bold;">makanan</span> 
      <span>sesuai stok</span> 
      <span style="color: black; font-weight: bold;">dapur, ya!</span>
    </h3>
    <h5>Jadikan memasak sebagai kebiasaan, memanfaatkan dan merencanakan bahan yang ada</h5>
    <div>
      <a href="log" class="btn-get-started scrollto">Ayo Mulai!!</a>
      <a href="<?php echo base_url('/chatbot') ?>" class="btn-projects scrollto">Tanya Langsung</a>
    </div>
  </div>

  <div class="hero-slider swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image: url('<?php echo base_url('assets/img/latar.jpg'); ?>');"></div>
      <div class="swiper-slide" style="background-image: url('<?php echo base_url('assets/img/latar.jpg'); ?>');"></div>
      <div class="swiper-slide" style="background-image: url('<?php echo base_url('assets/img/latar.jpg'); ?>');"></div>
      <div class="swiper-slide" style="background-image: url('<?php echo base_url('assets/img/latar.jpg'); ?>');"></div>
      <div class="swiper-slide" style="background-image: url('<?php echo base_url('assets/img/latar.jpg'); ?>');"></div>
    </div>
  </div>

</section><!-- End Hero Section --> 


  <!-- ======= Resep Section ======= -->
  <section id="Resep" class="Resep">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>
        <span style="color: black; font-weight: bold; text-decoration: none;">Resep Masakan</span><br>
        <span style="color: #1AC84B;text-decoration: none; font-weight: bold">Terpopuler</span>
        </h2>
        <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Resep Masakan Terpopuler</title>
    <!-- ======= Resep Section ======= -->

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/Resep/resep_salad buah.jpg" class="img-fluid" alt="">
            <div class="resep-info">
              <h4>Salad Buah</h4>
              <p>Salad</p>
              <a href="assets/img/Resep/resep_salad buah.jpg" data-gallery="resepGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="detail_resep.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/Resep/Nasi Hainam.jpg" class="img-fluid" alt="">
            <div class="resep-info">
              <h4>Nasi Hainam</h4>
              <p>Nasi</p>
              <a href="assets/img/Resep/Nasi Hainam.jpg" data-gallery="resepGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="detail_resep.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/Resep/Pizza Vegan.jpg" class="img-fluid" alt="">
            <div class="resep-info">
              <h4>Pizza Vegan</h4>
              <p>Vegan</p>
              <a href="assets/img/Resep/Pizza Vegan.jpg" data-gallery="resepGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="detail_resep.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/Resep/salad sayur1.jpg" class="img-fluid" alt="">
            <div class="resep-info">
              <h4>Salad Sayur</h4>
              <p>salad</p>
              <a href="assets/img/Resep/salad sayur1.jpg" data-gallery="resepGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="detail_resep.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/Resep/Mashed Potatoes.jpg" class="img-fluid" alt="">
            <div class="resep-info">
              <h4>Mashed Potatoes</h4>
              <p>soto</p>
              <a href="assets/img/Resep/Mashed Potatoes.jpg" data-gallery="resepGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="detail_resep.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/Resep/Tempura Vegan.jpg" class="img-fluid" alt="">
            <div class="resep-info">
              <h4>Tempura Vegan</h4>
              <p>Vegan</p>
              <a href="assets/img/Resep/Tempura Vegan.jpg" data-gallery="resepGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="detail_resep.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

        <!-- Repeat for other portfolio items -->
      </div>
    </div>
  </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>
            <span style="color: #1AC84B;text-decoration: none; font-weight: bold">Testimonials</span>
            </h2>
          <h3><p>We cook - mereka menikmati setiap masakan</p></h3>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                Berasaa jadi jadi chef, tiap hariii masak bahan masakan selalu kepake.
                </p>
                <img src="assets/img/testi1.jpg" class="testimonial-img" alt="">
                <h3>Maysi</h3>
                <h4>Mahasiswi</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                Ternyata masak sendiri seseruuu ituuuuuuuuuu
                </p>
                <img src="assets/img/woo.jpg" class="testimonial-img" alt="">
                <h3>Wirasena</h3>
                <h4>Anak kos</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                aku jadi rajin masak dirumah, udah jarang banget pesan gofood bestttt 
                </p>
                <img src="assets/img/haru.jpg" class="testimonial-img" alt="">
                <h3>Rutoyaa</h3>
                <h4>Mahasiswa</h4>
              </div>
            </div><!-- End testimonial item -->

            <!-- ======= Footer ======= -->
<footer id="footer">
  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong>Meal Planner</strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</footer><!-- End Footer -->
            
  <!-- JS Files -->
  <script src="<?php echo base_url('/assets/Reveal/');?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url('/assets/Reveal/');?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('/assets/Reveal/');?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url('/assets/Reveal/');?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url('/assets/Reveal/');?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url('/assets/Reveal/');?>assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?php echo base_url('/assets/Reveal/');?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('/assets/Reveal/');?>assets/js/main.js"></script>

</body>
</html>
