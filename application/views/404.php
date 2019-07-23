<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>STIMIK Kharisma Link Survei</title>
    <!-- SEO -->
    <meta name="language" content="Indonesia">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png">
    <meta property="og:url"           content="<?php echo base_url(); ?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Yuk sekolah di STIMIK Kharisma, Sekolah Digitalpreneur. Daftar di Sini." />
    <meta property="og:description"   content="STMIK KHARISMA Makassar, sekolah tinggi informatika dan komputer terbaik di kota Makassar, menuju perguruan tinggi unggul bagi digital entrepreneur, menghasilkan lulusan yang kreatif, mandiri, inovatif, berdaya-saing, standar mutu yang melampaui standar nasional pendidkan tinggi" />
    <meta property="og:image"         content="<?php echo base_url(); ?>assets/images/img-campus.jpg" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo base_url(); ?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
      html,
      body {
          height: 100%;
      }

      body {
          display: -ms-flexbox;
          display: flex;
          -ms-flex-align: center;
          align-items: center;
          padding-top: 40px;
          padding-bottom: 40px;
      }

      @media (min-width: 768px){
        .col-divider{
          border-right : 2px solid #E0E0E0;
        }
      }
    </style>
</head>
<body>
    <div class="splash-container" style="max-width:600px">
        <div class="card ">
            <div class="card-header text-center">
                <a href="<?php echo base_url(); ?>"><img class="logo-img" src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo"></a>
              </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <?php $this->load->view('notification'); ?>
                </div>
              </div>
              <div class="continer-fluid">
                <div class="row">
                  <div class="col text-center">
                    <h3>Anda tersesat gan?</h3>
                    <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <h1 class="text-center"><span style="font-size:100px">404</span> <br>Page not found!</h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer text-center">
              &copy; Copyright 2019 by <strong><a href="mailto:irman.mashuri@gmail.com">m4nzm333</a></strong> from WASDLabs. All Rights Reserved
            </div>
        </div>
    </div>

    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>
