<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mahasiswa | STIMIK Kharisma Makassar</title>
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
      html, body {
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
                <div class="col text-center">
                  <?php $this->load->view('notification'); ?>
                </div>
              </div>
              <div class="row">
                <div class="col text-center">
                  <h1>Dashboard Mahasiswa</h1>
                  <hr>
                </div>
              </div>
              <div class="continer-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <h4 class="text-center">Nama - NIM</h4>
                    <h2 class="text-center"><?php echo $this->session->userdata['nama']; ?> <br> <?php echo $this->session->userdata['nim']; ?></h2>
                    <br>
                    <h4 class="text-center">Total Click</h4>
                    <h1 class="text-center"><?php echo $mahasiswa['click']; ?> kali</h1>
                    <br>
                    <h4 class="text-center">Total Get</h4>
                    <h1 class="text-center"><?php echo $mahasiswa['get']; ?> kali</h1>
                    <br>
                    <h4 class="text-center">Link Share</h4>
                    <h4 class="text-center">
                      <a href="javascript:void(0)" id="link-share" ><?php echo base_url(); ?>?ref=<?php echo $this->session->userdata('string_id'); ?></a>
                    </h4>
                    <p class="text-center">
                      <button type="button" name="button" class="btn btn-success" onclick="copy_clipboard()">
                        <i class="fa fa-copy"></i> Copy
                      </button>
                      <a class="btn btn-primary" href='javascript:shareFacebook()'>
                        <i class="fab fa-facebook"></i> Facebook
                      </a>
                      <a class="btn btn-info" href="javascript:shareTwitter()">
                        <i class="fab fa-twitter"></i> Twitter
                      </a>
                    </p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-12 text-center">
                    <a class="btn btn-danger btn-lg" href="<?php echo base_url(); ?>keluar">
                      <i class="fas fa-sign-out-alt"></i> Keluar
                    </a>
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
    <script type="text/javascript">
      var link = $("#link-share").text();
      // var link = 'https://www.google.com';
      function copy_clipboard() {
        var dummyContent = link;
        var dummy = $('<input>').val(dummyContent).appendTo('body').select();
        document.execCommand("copy");
        $('input').remove();
        alert("Link telah disimpan ke dalam clipboard");
      }
      function shareFacebook() {
          var facebookWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + link, 'facebook-popup', 'height=350,width=600');
          if(facebookWindow.focus) { facebookWindow.focus(); }
            return false;
      }
      function shareTwitter() {
        console.log(document.URL);
        var twitterWindow = window.open('https://twitter.com/share?url=' + link, 'twitter-popup', 'height=350,width=600');
        if(twitterWindow.focus) { twitterWindow.focus(); }
          return false;
      }
    </script>
</body>

</html>
