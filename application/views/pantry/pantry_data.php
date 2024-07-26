<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meal Planner</title>
  <!-- Add CSS links here -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/Reveal/');?>assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('/assets/Reveal/');?>assets/vendor/glightbox/css/glightbox.min.css">
  <link rel="stylesheet" href="<?php echo base_url('/assets/Reveal/');?>assets/vendor/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo base_url('/assets/Reveal/');?>assets/css/style.css">
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
          <li><a class="nav-link scrollto" href="#Resep">Resep</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Testimonial</a></li>
          <li class="dropdown"><a href="#"><span>Features</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo base_url('/recipe') ?>">Resep</a></li>
              <li><a href="#">Bahan Saya</a></li>
              <li><a href="<?php echo base_url('/save_recipe') ?>">Resep Tersimpan</a></li>
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

  <main>
    <div class="table-responsive mt-3">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Bahan</th>
            <th>Tanggal Mulai/Membeli Bahan</th>
            <th>Tanggal Kedaluwarsa</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($pantry)) : ?>
            <?php $no = 1; foreach ($pantry as $item): ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo htmlspecialchars($item['ingredient_name']); ?></td>
              <td><?php echo htmlspecialchars($item['start_date']); ?></td>
              <td><?php echo htmlspecialchars($item['exp_date']); ?></td>
              <td>
                <a href="<?php echo site_url('pantry_data/add'); ?>" class="btn btn-info btn-block mb-2">Add Recipe</a>
                <a href="<?php echo site_url('pantry_data/edit/'.$item['pantry_id']); ?>" class="btn btn-primary btn-block mb-2">Edit Bahan</a>
                <a href="<?php echo site_url('pantry_data/delete/'.$item['pantry_id']); ?>" class="btn btn-danger btn-block" onclick="return confirm('Apakah Anda yakin?')">Hapus Bahan</a>
              </td>
            </tr>
            <?php endforeach; ?>
          <?php else : ?>
            <tr>
              <td colspan="5" class="text-center">Tidak ada bahan ditemukan.</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </main>

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

  <!-- Add JS links here -->
  <script src="<?php echo base_url('/assets/Reveal/');?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url('/assets/Reveal/');?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('/assets/Reveal/');?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url('/assets/Reveal/');?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url('/assets/Reveal/');?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url('/assets/Reveal/');?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url('/assets/Reveal/');?>assets/js/main.js"></script>
</body>
</html>
