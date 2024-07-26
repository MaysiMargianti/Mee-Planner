<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Detail Resep</title>
  <style>
    .resep-description {
      display: flex;
      flex-direction: column;
      gap: 10px; /* Reduced gap */
      color: black;
      word-wrap: break-word;
      white-space: pre-wrap;
    }

    .resep-details-slider img {
      width: 100%;
      max-width: 300px; /* Reduced max-width */
      height: auto;
    }

    .save-button {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 70%;
      padding: 8px; /* Reduced padding */
      text-align: center;
      background-color: white;
      color: #28a745;
      border: 1px solid #28a745; /* Reduced border width */
      border-radius: 5px;
      font-size: 14px; /* Reduced font size */
      cursor: pointer;
      margin-top: 10px; /* Reduced margin-top */
      transition: background-color 0.3s, color 0.3s;
    }

    .save-button.saved {
      background-color: #28a745;
      color: white;
    }

    .save-button i {
      margin-right: 5px;
    }

    .resep-info,
    .resep-description {
      margin-top: 10px; /* Reduced margin-top */
    }

    .resep-details {
      display: flex;
      flex-wrap: wrap;
      gap: 10px; /* Reduced gap */
    }

    .resep-details > .col-lg-4 {
      flex: 0 0 auto;
      width: 100%;
      max-width: 300px; /* Reduced max-width */
    }

    .resep-details > .col-lg-8 {
      flex: 1;
    }

    .resep-description-inner {
      display: flex;
      flex-wrap: wrap;
      gap: 10px; /* Reduced gap */
    }

    .resep-description-inner > div {
      flex: 1;
    }

    .nutrition-info {
      display: flex;
      justify-content: space-around;
      background-color: #fff8e1;
      padding: 8px;
      margin-top: 20px;
      margin-bottom: 10px; /* Added margin-bottom */
      border-radius: 10px;
      font-size: 9px; /* Reduced font size */
      max-width: 280px; /* Set a max-width */
      margin-left: center; /* Center the nutrition-info box */
      margin-right: auto;
    }

    .nutrition-info div {
      text-align: center;
      flex: 1;
    }

    .nutrition-info div:not(:last-child) {
      border-right: 1px solid #ddd;
    }

    .nutrition-info h4 {
      margin: 0;
      font-size: 16px; /* Reduced font size */
      color: #333;
    }

    .nutrition-info span {
      display: block;
      margin-top: 5px;
      font-size: 14px; /* Reduced font size */
      color: #666;
    }

    .img-fluid {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }
  </style>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/favicon.png'); ?>" rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
</head>

<body>

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Detail Resep</h2>
        <ol>
          <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
          <li><a href="<?php echo base_url('resep'); ?>">Resep</a></li>
          <li>Detail Resep</li>
        </ol>
      </div>
    </div>
  </section><!-- End Breadcrumbs Section -->

  <!-- ======= Resep Details Section ======= -->
  <section id="resep-details" class="resep-details">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-4">
          <div class="resep-details-slider swiper">
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide">
                <img src="<?php echo base_url('uploads/' . $recipe['img_recipe']); ?>" class="img-fluid" alt="">
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>

          <!-- Nutrition Info placed above the recipe details -->
          <div class="nutrition-info">
            <div>
              <h4><?php echo $nutrisi_info['protein']; ?> g</h4>
              <span>Proteins</span>
            </div>
            <div>
              <h4><?php echo $nutrisi_info['carbo']; ?> g</h4>
              <span>Carbs</span>
            </div>
            <div>
              <h4><?php echo $nutrisi_info['calories']; ?> g</h4>
              <span>Fats</span>
            </div>
          </div>

          <div class="resep-info">
            <h3>Detail Resep</h3>
            <ul style="list-style-type: none; padding: 0;">
              <li><strong>Nama Resep</strong>: <?php echo $recipe['recipe_name']; ?></li>
              <li><strong>Kategori</strong>: <?php echo $recipe['category']; ?></li>
              <li><strong>Waktu Memasak</strong>: <?php echo $recipe['cook_time']; ?></li>
            </ul>
            <button class="save-button" id="saveButton">
              <i class="bi bi-bookmark"></i><span id="saveButtonText">Simpan Resep</span>
            </button>
          </div>
        </div>

        <div class="col-lg-8">
          <div class="resep-description">
            <div class="resep-description-inner">
              <div>
                <h2><strong>Bahan</strong></h2>
                <p><?php echo $recipe['Ingredient']; ?></p>
              </div>
              <div>
                <h2><strong>Instruksi</strong></h2>
                <p><?php echo $recipe['instructions']; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Resep Details Section -->

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/aos/aos.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>

  <!-- Template Main JS File -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    document.getElementById('saveButton').addEventListener('click', function () {
      this.classList.toggle('saved');
      var buttonText = this.classList.contains('saved') ? 'Resep Tersimpan' : 'Simpan Resep';
      document.getElementById('saveButtonText').textContent = buttonText;

      var recipe_id = <?php echo $recipe['recipe_id']; ?>;

      $.ajax({
        url: "<?php echo base_url('SavedRecipes/save'); ?>",
        type: "POST",
        data: { recipe_id: recipe_id },
        success: function(response) {
          if(response.status == 'success') {
            console.log('Resep berhasil disimpan');

          } else {
            console.error('Gagal menyimpan resep: ' + response.message);
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.error('Gagal menyimpan resep: ' + textStatus);
        }
      });
    });
  </script>

</body>
</html>
