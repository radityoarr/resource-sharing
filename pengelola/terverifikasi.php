<?php
session_start();
require 'function.php';
if ($_SESSION['status'] != "login") {
  header("location:authentication/login.php");
}

$login = $_SESSION['id'];
$result = mysqli_query($db, "SELECT * FROM `admin` WHERE id ='$login'");
$admin = mysqli_fetch_array($result);

$pengajuan_semua = query("SELECT * FROM pengajuan2 WHERE status ='Terverifikasi'");

// if (isset($_POST["cari"])) {
//   $pengajuan_semua = cari_terverifikasi($_POST["keyword"]);

//   if(empty($pengajuan_semua)){
//     $error = true;
// }
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | SKPB-Facility</title>
  <style>
        th {
            white-space: nowrap;
            text-align: center !important;
        }
        td {
            white-space: nowrap;
        }
        .dataTables_length {
        position: absolute;
          margin-left: 300px;
          top: -50px;
      }

      .dataTables_filter {
          position: absolute;
          margin-left: 5px;
          top: -50px;
        }
        @media (max-width: 640px) {
          .dataTables_filter {
            top: -60px; /* Ubah nilai sesuai kebutuhan */
          }
          
        }
    </style>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;600;800&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="57x57" href="../public/img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../public/img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../public/img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../public/img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../public/img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../public/img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../public/img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../public/img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../public/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="../public/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../public/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../public/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../public/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="../public/img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;600;800&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;500;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
</head>

<style>
  body {
    font-family: "Manrope", sans-serif !important;
  }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <!-- <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>

          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="authentication/logout.php" class="dropdown-item">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
              </svg> Logout
            </a>
        </li>
      </ul> -->
    </nav>
    <!-- /.navbar -->

    <?php
    require 'components/aside.php';
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard Pengelola <b>Fasilitas SKPB</b></h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-14">
            <div class="card">
              <div class="card-header mb-5">
                <h3 class="card-title" colspan="14">Tabel Peminjaman Ruangan <span class="text-success font-weight-bold">(Terverifikasi)</span></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <!-- <?php if(isset($error)) : ?>
                <?php $key = $_POST["keyword"]; ?>
                echo "
                    <script>
                        alert('Pencarian dengan keyword <?=$key?> tidak ditemukan');
                        document.location.href = 'terverifikasi.php';
                    </script>
                    ";
                <?php die; ?>
                <?php endif; ?>  

                <label for="keyword mt-2">Pencarian</label>
                  <form class="form-inline" action="" method="post">
                    <div class="form-group">  
                      <input type="text" name="keyword" id="keyword" autofocus autocomplete="off" class="form-control w-full" placeholder="Cari...">
                      <div class="input-group-append">
                        <button type="submit" name="cari" id="cari" class="btn btn-primary"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </form> -->
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Peminjaman</th>
                    <th>Jenis Peminjaman</th>
                    <th>Nama Lengkap</th>
                    <th>Nama Kegiatan</th>
                    <th>NIP/NPP/NRP</th>
                    <th>Nomor HP/WA</th>
                    <th>Unit/Departemen</th>
                    <th>Tanggal</th>
                    <th>Sesi</th>
                    <th>Ruangan</th>
                    <th>KTM</th>
                    <th>Surat SKPB</th>
                    <th>Surat Sarpras</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>

                  <tbody>
                  <?php
                        
                        $total = mysqli_query($db, "SELECT COUNT(*) AS total FROM pengajuan2");
                        $data = mysqli_fetch_array($total);
                        $totalData1 = $data['total'];


                        $i = 1;
                        foreach ($pengajuan_semua as $row) :
                        ?>

                    <tr>
                      <td><?= $i ?></td>
                      <td><?= $row["kode_peminjaman"]; ?></td>
                      <td class="text-center">
                        <span class="badge badge-<?php 
                          if ($row['jenis'] == 'insidentil') {
                            echo 'warning';
                          } else{
                            echo 'secondary';
                          }
                          ?>">
                          <?php echo $row['jenis'] ?>
                        </span>
                      </td>
                      <td><?= $row["nama"]; ?></td>
                      <td><?= $row["nama_acara"]; ?></td>
                      <td><?= $row["nrp"]; ?></td>
                      <td><?= $row["whatsapp"]; ?></td>
                      <td><?= $row["unit_departemen"]; ?></td>
                      <td><?= $row["tanggal"]; ?></td>
                      <td>
                        <?php
                        // Tampilkan sesi/jam yang memiliki nilai 1
                        for ($j = 1; $j <= 6; $j++) {
                            $sesi = 'sesi' . $j;
                            if ($row[$sesi] == 1) {
                                echo '- Sesi ' . $j . '<br>';
                            }
                        }
                        ?>
                    </td>
                      <td><?= $row["ruangan"]; ?></td>
                      <td class="text-nowrap text-bold text-warning">
                          <?php if (isset($row['foto_ktp']) && trim($row['foto_ktp']) !== '') { ?>
                              <a href="dist/img/ktm/<?php echo $row['foto_ktp'] ?>" class="btn-sm btn-primary" target="_blank">
                                  <i class="fas fa-external-link-alt"></i> KTP/KTM
                              </a>
                          <?php } ?>
                      </td>
                      
                      <td class="text-nowrap text-bold text-warning">
                          <?php if (isset($row['surat_skpb']) && trim($row['surat_skpb']) !== '') { ?>
                              <a href="dist/img/surat_skpb/<?php echo $row['surat_skpb'] ?>" class="btn-sm btn-primary" target="_blank">
                                  <i class="fas fa-external-link-alt"></i> Surat SKPB
                              </a>
                          <?php } ?>
                      </td>


                      <td class="text-nowrap text-bold text-warning">
                          <?php if (isset($row['surat_sarpras']) && trim($row['surat_sarpras']) !== '') { ?>
                              <a href="dist/img/surat_sarpras/<?php echo $row['surat_sarpras'] ?>" class="btn-sm btn-primary" target="_blank">
                                  <i class="fas fa-external-link-alt"></i> Surat Sarpras
                              </a>
                          <?php } ?>
                      </td>
                      <td class="text-center">
                        <span class="badge badge-<?php 
                          if ($row['status'] == 'Terverifikasi') {
                            echo 'success';
                          } elseif ($row['status'] == 'Disetujui') {
                            echo 'warning';
                          } elseif ($row['status'] == 'Menunggu Persetujuan'){
                            echo 'danger';
                          } else{
                            echo 'dark';
                          }
                          ?>">
                          <?php echo $row['status'] ?>
                        </span>
                      </td>
                      <td>
                        <a href="#" id="btn-unverify-<?= $row["id"]; ?>" onclick="confirmUnverify(<?= $row['id']; ?>,'<?= $row['kode_peminjaman'];?>');" class="btn btn-sm btn-danger">
                                <i class="fas fa-ban"></i> Batalkan
                        </a>
                      </td>
                    </tr>
                    <?php
                      $i++;
                      endforeach;
                      ?>
                  </tbody>
                </table>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; <span id="currentYear"></span> <a href="#">SKPB ITS</a>.</strong>
      All rights reserved.

    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>

  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#example1').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "pageLength": 50
      });
    });
  </script>

  <script>
    document.getElementById("currentYear").textContent = new Date().getFullYear();
  </script>
<script>
        function confirmUnverify(id,kode_peminjaman) {
      const modal = `
        <div class="modal fade" id="modal-unverify-${id}" tabindex="-1" aria-labelledby="modal-unverify-label-${id}" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modal-unverify-label-${id}">Konfirmasi Persetujuan</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                
              </div>
              <div class="modal-body">
                Apakah anda ingin membatalkan verifikasi semua pengajuan dengan kode peminjaman ${kode_peminjaman}?
              </div>
              <div class="modal-footer">
                <a href="unverify-pengajuan.php?kode_peminjaman=${kode_peminjaman}" class="btn btn-primary">Ya, semua</a>
                <a href="unverify-pengajuan.php?id=${id}" class="btn btn-secondary">Tidak, hanya yang dipilih</a>
              </div>
            </div>
          </div>
        </div>
      `;

      // Tampilkan modal
      $("body").append(modal);
      $("#modal-unverify-" + id).modal("show");

      // Hapus modal setelah ditutup
      $("#modal-unverify-" + id).on("hidden.bs.modal", function () {
        $(this).remove();
      });
    }

  </script>
</body>

</html>