<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batalkan Verifikasi Pengajuan</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
</head>
<style>
    body {
    font-family: 'Maven Pro', sans-serif !important;
  }
</style>
<body>
<?php
require 'function.php'; // Include your function file

if (isset($_GET['kode_peminjaman'])) {
    $kode_peminjaman = $_GET['kode_peminjaman'];

    if (unverify_semua($kode_peminjaman)) {
        echo '<script>
        swal("Berhasil!", "Verifikasi Pengajuan Berhasil Dibatalkan", "success")
        .then((value) => {
        window.history.back();
        });
        </script>';
    } else {
        echo '<script>
        swal("Oops!", "Verifikasi Pengajuan Gagal Dibatalkan", "error")
        .then((value) => {
        window.history.back();    
            });
        </script>';
    }
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (unverify($id)) {
        echo '<script>
        swal("Berhasil!", "Verifikasi Pengajuan Berhasil Dibatalkan", "success")
        .then((value) => {
        window.history.back();
        });
        </script>';
    } else {
        echo '<script>
        swal("Oops!", "Verifikasi Pengajuan Gagal Dibatalkan", "error")
        .then((value) => {
        window.history.back();    
            });
        </script>';
    }
}
?>
</body>
</html>
