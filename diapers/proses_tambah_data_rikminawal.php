<?php
include("koneksi.php");
// Jika Tombol Simpan Di Klik
if(isset($_POST['f_simpan'])){

	//Ambil data dari Form
	$regist_online = $_POST["f_regist_online"];
	$no_ujian = $_POST["f_no_ujian"];
	$nama = $_POST["f_nama"];
	$jenis_kelamin = $_POST["f_jenis_kelamin"];
	$jalur = $_POST["f_jalur"];
	$asal_polres = $_POST["f_asal_polres"];
	$foto = $_POST["f_foto"];

	// buat query
	$sql = "INSERT INTO rikminawal VALUES ('$regist_online', '$no_ujian', '$nama', '$jenis_kelamin', '$jalur', '$asal_polres', '', '', '', '$foto')";
	$query = mysqli_query($koneksi, $sql);

	// Apakah Query Simpan Berhasil ?
	if($query){
		// Kalau Berhasil alihkan ke halaman rikminawal.php dengan status=sukses
		header('Location: dashboard.php?url=rikminawal');
	}else{
		header('Location: tambah_data_rikminawal.php?status=gagal');
	}
}else{
	die("Akses dilarang...");
}
?>