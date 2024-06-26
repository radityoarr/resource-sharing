<?php 
session_start();
if ($_SESSION['status'] != "login") {
  header("location:authentication/login.php");
}

require 'function.php';

$login = $_SESSION['id'];
$result = mysqli_query($db, "SELECT * FROM `admin` WHERE id ='$login'");
$admin = mysqli_fetch_array($result);

// Cek apakah terdapat URL sebelumnya yang disimpan dalam sesi
if(isset($_SESSION['previous_url'])){
  $previous_url = $_SESSION['previous_url'];
  unset($_SESSION['previous_url']); // Hapus URL sebelumnya dari sesi
} else {
  // Jika tidak ada URL sebelumnya, arahkan ke halaman default
  $previous_url = 'default.php';
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ubah Data Ruangan</title>

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


  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>


<style>
  body {
    font-family: 'Maven Pro', sans-serif !important;
  }
</style>


<?php
$id = $_GET["id"];

$ruangan = query("SELECT * FROM ruangan WHERE id =$id")[0];


//cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {
  //cek apakah data berhasil di tambahkan atau tidak
  if (ubah_ruangan($_POST) >= 0) {
    echo "
        <script>
            alert('Data Berhasil Diubah!');
            window.history.back();
        </script>
    ";
  } else {
    echo "
        <script>
            alert('Data Gagal Diubah');
            window.history.back();
        </script>
    ";
  }
}



?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/Logo_SKPB-biru.png" height="180" width="180">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
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
          <div class="row mb-1">
            <div class="col-sm-6">
              <h1 class="m-0">Ubah Data Ruangan</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <!-- Form input peserta -->
                  <form action="" method="post" onsubmit="return validateForm()">
                    <input type="hidden" name="id" value="<?= $ruangan["id"]; ?>">
                    <div class="row">
                      <div class="col-md-6">

                        <div class="form-group">
                          <label for="nama_ruangan">Nama Ruangan</label>
                          <input name="nama_ruangan" type="text" value="<?= $ruangan["nama_ruangan"]; ?>" class="form-control" id="nama_ruangan" placeholder="Masukkan Nama Ruangan">
                        </div>

                        <div class="form-group">
                          <label for="kapasitas">Kapasitas</label>
                          <input name="kapasitas" type="text" value="<?= $ruangan["kapasitas"]; ?>" class="form-control" id="kapasitas" placeholder="Masukkan Kapasitas">
                        </div>

                        <div class="form-group">
                          <label for="lantai">Lantai</label>
                          <input name="lantai" type="text" value="<?= $ruangan["lantai"]; ?>" class="form-control" id="lantai" placeholder="Masukkan Lantai">
                        </div>

                        <div class="form-group">
                          <label for="gedung">Gedung</label>
                          <select name="gedung" class="form-control" id="gedung">
                              <option value="Tower 1" <?php if ($ruangan["gedung"] == "Tower 1") echo 'selected="selected"'; ?>>Tower 1</option>
                              <option value="Tower 2" <?php if ($ruangan["gedung"] == "Tower 2") echo 'selected="selected"'; ?>>Tower 2</option>
                              <option value="Teater" <?php if ($ruangan["gedung"] == "Teater") echo 'selected="selected"'; ?>>Teater</option>
                              <option value="Perpustakaan" <?php if ($ruangan["gedung"] == "Perpustakaan") echo 'selected="selected"'; ?>>Perpustakaan</option>
                          </select>
                      </div>

                        <!-- <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input name="deskripsi" type="text" value="<?= $ruangan["deskripsi"]; ?>" class="form-control" id="deskripsi" placeholder="Masukkan Deskripsi">
                        </div> -->

                    <!-- <div class="form-group">
                      <label for="gambar1">Gambar 1</label>
                      <input name="gambar1" type="file" value="<?= $ruangan["gambar1"]; ?>" class="form-control" id="gambar1" placeholder="Upload Gambar 1">
                    </div>

                    <div class="form-group">
                      <label for="gambar2">Gambar 2</label>
                      <input name="gambar2" type="file" value="<?= $ruangan["gambar2"]; ?>" class="form-control" id="gambar2" placeholder="Upload Gambar 2">
                    </div>
                    <div class="form-group">
                      <label for="gambar3">Gambar 3</label>
                      <input name="gambar3" type="file" value="<?= $ruangan["gambar3"]; ?>" class="form-control" id="gambar3" placeholder="Upload Gambar 3">
                    </div> -->

                    <!-- <div class="form-group">
                      <label for="fasilitas">Fasilitas</label>
                      <select multiple class="form-control" id="fasilitas" name="fasilitas[]">
                            <option value="cctv">CCTV</option>
                            <option value="ac">AC</option>
                            <option value="lcd">LCD Proyektor</option>
                            <option value="wifi">Wifi</option>
                            <option value="speaker">Speaker</option>
                            <option value="mic">Mic</option>
                            <option value="laser">Laser Proyektor</option>
                      </select>
                    </div> -->

                    <div class="form-group">
                        <label for="status_ruangan">Status</label>
                        <select name="status_ruangan" class="form-control" id="status_ruangan">
                            <option value="Bisa Dipinjam" <?php if ($ruangan["status_ruangan"] == "Bisa Dipinjam") echo 'selected="selected"'; ?>>Bisa Dipinjam</option>
                            <option value="Tidak Bisa Dipinjam" <?php if ($ruangan["status_ruangan"] == "Tidak Bisa Dipinjam") echo 'selected="selected"'; ?>>Tidak Bisa Dipinjam</option>
                        </select>
                    </div>

                     
                  
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2024 <a href="#">SKPB</a>.</strong>
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

  <script>
    function validateForm() {
        var kapasitas = document.getElementById("kapasitas").value;
        var lantai = document.getElementById("lantai").value;

        if (isNaN(kapasitas) || parseInt(kapasitas) <= 0) {
            alert("Input kapasitas tidak valid");
            return false;
        } else if (isNaN(lantai) || parseInt(lantai) <= 0) {
           alert("Input lantai tidak valid");
            return false;
        }
        return true;
    }
</script>
 
</body>

</html>