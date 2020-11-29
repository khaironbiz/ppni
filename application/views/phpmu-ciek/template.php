<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php include "phpmu-title.php"; ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index, follow">
  <meta name="description" content="<?php include "phpmu-description.php"; ?>">
  <meta name="keywords" content="<?php include "phpmu-keywords.php"; ?>">
  <meta name="author" content="phpmu.com">
  <meta http-equiv="imagetoolbar" content="no">
  <meta name="language" content="Indonesia">
  <meta name="revisit-after" content="7">
  <meta name="webcrawlers" content="all">
  <meta name="rating" content="general">
  <meta name="spiders" content="all">
  <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/red.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/default.css" rel="stylesheet" media="screen" />
  <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/nivo-slider.css" rel="stylesheet" media="screen" />
</head>

<body>
  <div class="container container-content">
    <?php echo "<small class='pull-right waktu'>" . hari_ini() . ", " . tgl_indoo(date('Y-m-d')) . ", <span id='jam'></span> WIB</small>"; ?>
    <nav class="navbar navbar-default">
      <?php include "main-menu.php"; ?>
    </nav>


    <br>
    <div class='row'>
      <div class='col-md-12'>
        <div class='col-md-8'>
          <?php
          if ($this->uri->segment(1) == '' or $this->uri->segment(1) == 'utama') {
            include "slide.php";
          }
          ?>
          <?php echo $contents; ?>
          <br>
        </div>
        <div class='col-md-4'>
          <?php include "sidebar.php"; ?>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <center>
              <small class='text-footer'><?php echo date('Y'); ?> - Himpunan Perawat Informatika Indonesia <br></small>
            </center>
            </p>
          </div>
        </div>
      </div>
    </footer>
  </div> <!-- /container -->
  <?php $this->model_utama->kunjungan(); ?>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery-1.12.3.min.js"></script>
  <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/bootstrap.min.js"></script>


  <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery.validate.js"></script>
  <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/phpmu-custom.js"></script>
  <script>
    $(document).ready(function() {
      $("#formku").validate();
    });
    $('#myLightbox').lightbox(options);
  </script>

</body>

</html>