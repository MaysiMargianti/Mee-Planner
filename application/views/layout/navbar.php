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
            <li><a href="<?php echo base_url('/pantry_data') ?>">Bahan Saya</a></li>
            <li><a href="<?php echo base_url('/SavedRecipes') ?>">Resep Tersimpan</a></li>
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
