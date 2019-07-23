<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User | Admin</title>
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
                <div class="col-md-12">
                  <?php $this->load->view('notification'); ?>
                </div>
              </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">User </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Table User
                            </h5>
                            <div class="card-body">
                                <p class="text-right">
                                  <button type="button" name="button" class="btn btn-primary btn-lg" onclick="tambah()">
                                    <i class="fa fa-plus"></i> Tambah User
                                  </button>
                                </p>
                                <div class="table-responsive">
                                  <table id="table-user" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                      <tr>
                                        <th>No.</th>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>NIM</th>
                                        <th>Total Click</th>
                                        <th>Total Get</th>
                                        <th>Aksi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php $i = 1; foreach($user as $row){ ?>
                                        <tr>
                                          <td><?php echo $i++; ?></td>
                                          <td><?php echo $row['string_id']; ?></td>
                                          <td><?php echo $row['nama']; ?></td>
                                          <td><?php echo $row['nim']; ?></td>
                                          <td><?php echo $row['click']; ?></td>
                                          <td>
                                            <?php if($row['get'] == NULL)echo 0; else echo $row['get']?>
                                          </td>
                                          <td>
                                            <button type="button" name="button" class="btn btn-success" onclick="edit('<?php echo $row['string_id']; ?>')">
                                              <i class="fa fa-edit"></i>
                                              Edit
                                            </button>
                                            <button type="button" name="button" class="btn btn-danger" onclick="hapus('<?php echo $row['string_id']; ?>')">
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
    <div class="modal fade" id="modal-user" tabindex="-1" role="dialog" aria-labelledby="modal-user-label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form id="form-user" action="#" method="post">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-user-label">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="input-nama">Nama User</label>
                <input type="text" class="form-control" id="input-nama" name="input-nama" placeholder="Nama User" required>
              </div>
              <div class="form-group">
                <label for="input-nim">NIM</label>
                <input type="text" class="form-control" id="input-nim" name="input-nim" placeholder="NIM" required>
              </div>
              <div class="form-group">
                <label for="input-username">Username</label>
                <input type="text" class="form-control" id="input-username" name="input-username" placeholder="Username" required>
              </div>
              <div class="form-group" id="form-input-password">
                <label for="input-username">Password</label>
                <input type="password" class="form-control" id="input-password" name="input-password" placeholder="Password" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="btn-submit-modal"></button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="modal-hapus-label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Hapus User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Ingin menghapus user <a href="javascript:void(0)" id="modal-label-nama">XXXs</a>?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a class="btn btn-danger" href="#" id="btn-modal-hapus"><i class="fa fa-trash"></i> Hapus</a>
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
      var base_url = '<?php echo base_url(); ?>';
      $('#table-user').DataTable();
      $('#nav-user').addClass('active');
      function tambah() {
        $("#form-user").get(0).reset()
        $('#modal-user-label').text('Tambah User');
        $('#btn-submit-modal').html('<i class="fa fa-plus"></i>&nbsp Tambah');
        $("#form-input-password").show();
        $("#input-password").attr("required", "true");
        $('#modal-user').modal('show');
        $('#form-user').attr('action', base_url + 'admin/user/tambah');
      }
      function edit(id) {
        $('#modal-user-label').text('Edit User');
        $('#btn-submit-modal').html('<i class="fa fa-save"></i>&nbsp Simpan');
        $('#form-user').attr('action', base_url + 'admin/user/'+id+'/edit');
        $.ajax({
          url : base_url + 'admin/user/'+id+'/data',
          method : 'GET',
          success : function(respond) {
            data = JSON.parse(respond);
            $('#input-nama').val(data.nama);
            $('#input-nim').val(data.nim);
            $('#input-username').val(data.username);
            $("#input-password").attr("required", false);
            $('#modal-user').modal('show');
          },
          error : function(e) {
            console.error(e);
          }
        });
      }
      function hapus(id) {
        console.log('Menghapus ' + id);
        $('#btn-modal-hapus').attr('href', base_url + 'admin/user/'+id+'/hapus')
        $('#modal-hapus').modal('show');
      }
    </script>
</body>

</html>
