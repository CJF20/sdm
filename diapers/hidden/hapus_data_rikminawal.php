<?php
include 'koneksi.php';
$regist_online = $_GET["regist_online"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM rikminawal WHERE regist_online='$regist_online' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_error($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='dashboard.php?url=rikminawal';</script>";
    }
?>
