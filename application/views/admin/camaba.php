<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Calon Mahasiswa Baru | Admin</title>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <div class="dashboard-main-wrapper">
        <?php $this->load->view('admin/include/navbar'); ?>
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php $this->load->view('notification'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Calon Mahasiswa Baru </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Table User
                            </h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                  <table id="table-camaba" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                      <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No. HP</th>
                                        <th>Asal Sekolah</th>
                                        <th>Referensi</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php $i = 1; foreach($camaba as $row){ ?>
                                        <tr>
                                          <td><?php echo $i++; ?></td>
                                          <td><?php echo $row['nama']; ?></td>
                                          <td><?php echo $row['alamat']; ?></td>
                                          <td><?php echo $row['no_hp']; ?></td>
                                          <td><?php echo $row['asal_sekolah']; ?></td>
                                          <td><?php echo $row['referensi']; ?></td>
                                          <td>
                                            <?php
                                              if($row['verified_date'] != "0000-00-00 00:00:00"){
                                                if($row['status']){
                                                  echo "Diterima";
                                                } else {
                                                  echo "Ditolak";
                                                }
                                              } else {
                                                echo "Menunggu Verifikasi";
                                              }
                                            ?>
                                          </td>
                                          <td>
                                            <button type="button" name="button" class="btn btn-secondary" onclick="verifikasi(<?php echo $row['id_camaba']; ?>)">
                                              <i class="fa fa-check"></i>
                                              Verifikasi
                                            </button>
                                            <button type="button" name="button" class="btn btn-danger" onclick="hapus(<?php echo $row['id_camaba']; ?>)">
                                              <i class="fa fa-trash"></i>
                                              Hapus
                                            </button>
                                          </td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                  </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('admin/include/footer'); ?>
        </div>
    </div>
    <div class="modal fade" id="modal-verifikasi" tabindex="-1" role="dialog" aria-labelledby="modal-verifikasi-label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form class="" action="#" method="post">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-verifikasi-label">Verifikasi Calon Mahasiswa Baru</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Terima calon mahasiswa baru <a href="javascript:void(0)" id="modal-label-camaba">XXXX</a> dan tambahkan GET POINT pada referensi <a href="javascript:void(0)" id="modal-referensi-camaba">XXXX</a>?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <a class="btn btn-danger" href="#" id="btn-verifikasi-tolak"><i class="fa fa-times"></i> Tolak</a>
              <a class="btn btn-success" href="#"id="btn-verifikasi-terima"><i class="fa fa-check"></i> Terima</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="modal-hapus-label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Hapus Calon Mahasiswa Baru</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Ingin menghapus calon mahasiswa baru <a href="javascript:void(0)" id="modal-label-nama">XXXs</a>?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a class="btn btn-danger" href="#" id="btn-hapus-camaba"><i class="fa fa-trash"></i> Hapus</a>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/js/main-js.js"></script>
    <script type="text/javascript">
      var base_url = '<?php echo base_url(); ?>'
      $('#table-camaba').DataTable();
      $('#nav-camaba').addClass('active');
      function verifikasi(id) {
        $('#btn-verifikasi-terima').attr('href', base_url+'admin/calon-mahasiswa-baru/'+id+'/terima');
        $('#btn-verifikasi-tolak').attr('href', base_url+'admin/calon-mahasiswa-baru/'+id+'/tolak');
        $.ajax({
          url : base_url + 'admin/calon-mahasiswa-baru/'+id+'/data',
          method : 'GET',
          success : function(respond) {
            data = JSON.parse(respond);
            $('#modal-label-camaba').text(data.nama);
            $('#modal-referensi-camaba').text(data.referensi);
            $('#modal-verifikasi').modal('show');
          },
          error : function(e) {
            console.error(e);
          }
        });
      }
      function hapus(id) {
        $.ajax({
          url : base_url + 'admin/calon-mahasiswa-baru/'+id+'/data',
          method : 'GET',
          success : function(respond) {
            data = JSON.parse(respond);
            $('#modal-label-nama').text(data.nama);
            $('#btn-hapus-camaba').attr('href', base_url + 'admin/calon-mahasiswa-baru/'+id+'/hapus');
            $('#modal-hapus').modal('show');
          },
          error : function(e) {
            console.error(e);
          }
        });
      }
    </script>
</body>

</html>
