<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Calon Mahasiswa Baru | STIMIK Kharisma Makassar</title>
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
      #logo-print {
        display: none;
      }
      tr {
        height: 40px;
      }
      @media print {
        #logo-print{
          display: block;
        }
        .hide-print {
          width: 100px;
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
              <div id="print-area">
                <div class="row">
                  <div class="col">
                    <?php $this->load->view('notification'); ?>
                  </div>
                </div>
                <div class="row">
                  <img class="logo-img" src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo" id="logo-print">
                </div>
                <div class="row">
                  <div class="col text-center">
                    <h1>Informasi Registrasi</h1>
                    <hr>
                  </div>
                </div>
                <div class="continer-fluid">
                  <table class="h5 text-dark mx-auto" style="font-family: Arial, Helvetica, sans-serif;">
                    <tbody>
                      <tr>
                        <td width="120px">Nama</td>
                        <td>:
                          <strong><?php echo $this->session->userdata('nama'); ?></strong>
                        </td>
                      </tr>
                      <tr>
                        <td>Alamat</td>
                        <td>:
                          <strong><?php echo $this->session->userdata('alamat'); ?></strong>
                        </td>
                      </tr>
                      <tr>
                        <td>Referensi</td>
                        <td>:
                          <strong><?php echo $this->session->userdata('referensi'); ?></strong>
                        </td>
                      </tr>
                      <tr>
                        <td>Nomor HP</td>
                        <td>:
                          <strong><?php echo $this->session->userdata('no_hp'); ?></strong>
                        </td>
                      </tr>
                      <tr>
                        <td>Asal Sekolah</td>
                        <td>:
                          <strong><?php echo $this->session->userdata('asal_sekolah'); ?></strong>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <hr>
                <div class="row">
                  <i class="mx-auto">Note : Gunakan lembaran ini untuk mendapatkan biaya khusus.</i>
                </div>
              </div>
              <br>
              <div class="row">
                <p class="text-center mx-auto">
                  <button type="button" name="button" class="btn btn-success" onclick="cetak()">
                    <i class="fas fa-print"></i> Cetak
                  </button>
                  &nbsp
                  <a class="btn btn-danger btn-lg" href="<?php echo base_url(); ?>keluar">
                    <i class="fas fa-sign-out-alt"></i> Keluar
                  </a>
                </p>
              </div>
            </div>
            <div class="card-footer text-center">
              &copy; Copyright 2019 by <strong><a href="mailto:ahyar@kharisma.ac.id">m4nzm333</a></strong> from WASDLabs. All Rights Reserved
            </div>
        </div>
    </div>

    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script type="text/javascript">
    function cetak()
    {
     var divToPrint=document.getElementById("print-area");
     newWin= window.open("");
     newWin.document.write(divToPrint.outerHTML);
     newWin.print();
     newWin.close();
    }
    </script>
</body>

</html>
