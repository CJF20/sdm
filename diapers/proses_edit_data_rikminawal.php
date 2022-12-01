<?php
include("koneksi.php");
// jika tombol simpan diklik
if(isset($_POST['f_simpan'])){

    // ambil data dari form
    $regist_online = $_POST["f_regist_online"];
    $no_ujian = $_POST["f_no_ujian"];
    $nama = $_POST["f_nama"];
    $jenis_kelamin = $_POST["f_jenis_kelamin"];
    $jalur = $_POST["f_jalur"];
    $asal_polres = $_POST["f_asal_polres"];
    $nilai_psikologi = $_POST["f_nilai_psikologi"];
    $nilai_akademik = $_POST["f_nilai_akademik"];
    $nilai_jasmani = $_POST["f_nilai_jasmani"];
    $foto = $_POST["f_foto"];    

    // buat query
    $sql = "UPDATE rikminawal SET no_ujian='$no_ujian', nama='$nama', jenis_kelamin='$jenis_kelamin', jalur='$jalur', asal_polres='$asal_polres', nilai_psikologi='$nilai_psikologi', nilai_akademik='$nilai_akademik', nilai_jasmani='$nilai_jasmani', foto='$foto' WHERE regist_online='$regist_online'";
    $query = mysqli_query($koneksi, $sql);

    if(!$query){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil diubah.'); window.location='dashboard.php?url=rikminawal'; </script>";
    
    }
}
?>
