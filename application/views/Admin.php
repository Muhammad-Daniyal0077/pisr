<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PISR-Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="<?php echo base_url();?>asset/images/logoheader.png" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>asset/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>asset/admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url();?>asset/admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>asset/admin/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url();?>asset/admin/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url();?>asset/admin/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url();?>asset/admin/vendor/simple-datatables/style.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/font-awesome/css/font-awesome.min.css">


  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>asset/admin/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<main id="main" class="main">

 
      <?php include("Back_End/inc_/header.php")?>
      <?php include("Back_End/inc_/sidebar.php")?>
    
    <?php include $path.'/'.$filename.'.php';?>
    
  </main><!-- End #main -->
    <?php include("Back_End/inc_/footer.php")?>



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="<?php echo base_url();?>asset/admin/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url();?>asset/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>asset/admin/vendor/chart.js/chart.umd.js"></script>
  <script src="<?php echo base_url();?>asset/admin/vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo base_url();?>asset/admin/vendor/quill/quill.js"></script>
  <script src="<?php echo base_url();?>asset/admin/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo base_url();?>asset/admin/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url();?>asset/admin/vendor/php-email-form/validate.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  
  <!-- Template Main JS File -->
  <script src="<?php echo base_url();?>asset/admin/js/main.js"></script>


  <!-- extra -->
   
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include SweetAlert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>