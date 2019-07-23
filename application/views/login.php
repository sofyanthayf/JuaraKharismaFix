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
    <meta property="og:title"         content="Yuk kuliah di STMIK KHARISMA MAKASSAR, kampusnya para Digitalpreneur. Daftar khusus disini" />
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
                    <h1>Sharelink Gan!</h1>
                    <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-divider">
                    <h4 class="text-center">Login</h4>
                    <form method="post" action="<?php echo base_url(); ?>masuk">
                        <div class="form-group">
                            <input class="form-control form-control-lg" id="username" name="username" type="text" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" id="password" name="password" type="password" placeholder="Password" required>
                        </div>
                        <input type="submit" value="Masuk" class="btn btn-primary btn-lg btn-block">
                    </form>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <h4 class="text-center">Register Calon Mahasiswa Baru</h4>
                    <form action="<?php echo base_url(); ?>register" method="post">
                      <div class="form-group">
                          <input class="form-control form-control-lg" id="referensi" name="referensi" type="text" placeholder="Referensi" required
                          <?php if($this->input->get('ref')){
                            echo 'value="'.$this->input->get('ref').'"';
                          } ?>
                          >
                      </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" id="nama" name="nama" type="text" placeholder="Nama" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" id="alamat" name="alamat" type="text" placeholder="Alamat" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" id="no-hp" name="no-hp" type="text" placeholder="Nomor HP" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" id="asal-sekolah" name="asal-sekolah" type="text" placeholder="Asal Sekolah" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Daftar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer text-center">
              &copy; Copyright 2019 by <strong><a href="mailto:ahyar@kharisma.ac.id">m4nzm333</a></strong> from WASDLabs. All Rights Reserved
            </div>
        </div>
    </div>

    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>
