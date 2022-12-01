<?php include 'koneksi.php';
	// Mengecek apakah di URL ada nilai GET
	if (isset($_GET['regist_online'])){
	$regist_online = ($_GET['regist_online']);
	
	$query = "SELECT * FROM rikminawal WHERE regist_online='$regist_online'";
	$result = mysqli_query($koneksi, $query);

	// Jika Data Gagal diambil maka akan tampil error berikut
	if(!$result){
		die("Query Error:".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
	}
	$data = mysqli_fetch_assoc($result);
		// Apabila data tidak ada pada Database maka akan dijalankan perintah ini
		if (!count($data)){
			echo "<script>alert('Data tidak ditemukan pada Database');window.location='dashboard.php?url=rikminawal';</script>";
		}
	}
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html>
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" type="text/css" href="CSS/dashboard.css">
	<link rel="stylesheet" type="text/css" href="diapers/CSS/button.css">
	<link rel="stylesheet" type="text/css" href="diapers/CSS/editdata.css">
   </head>
<body>
<div id="kanan">
  <div class="top-dataa">
  <div class="container">
    <div class="title">UPDATE DATA</div>
    <div class="content">

      <form action="dashboard.php?url=proseseditrikminawal" method="POST">
        <div class="user-details">

          <div class="input-box">
            <span class="details">NOMOR REGISTRASI ONLINE</span>
            <input type="text" name="f_regist_online" value="<?php echo $data ['regist_online']?>" readonly>
          </div>

          <div class="input-box">
            <span class="details">NO UJIAN</span>
            <input type="text" name="f_no_ujian" readonly>
          </div>

          <div class="input-box">
            <span class="details">NAMA LENGKAP</span>
            <input type="text" name="f_nama"  required>
          </div>

          <div class="input-box">
            <span class="details">JENIS KELAMIN</span>
            <select name="f_jenis_kelamin"  style="height: 50px; width: 300px;text-align: center;">
              <option hidden="hidden"> - PILIH JENIS KELAMIN - </option>
              <option value="PRIA">PRIA</option>
              <option value="WANITA">WANITA</option>
            </select>
          </div>

          <div class="input-box">
            <span class="details">JALUR PENERIMAAN</span>
            <select name="f_jalur"  style="height: 50px; width: 300px;text-align: center;">
              <option hidden="hidden"> - PILIH JALUR PENERIMAAN - </option>
              <option value="AKPOL">AKPOL</option>
              <option value="BA PTU">BA PTU</option>
              <option value="BA BRIMOB">BA BRIMOB</option>
              <option value="BAKOMSUS TI">BAKOMSUS TI</option>
              <option value="BAKOMSUS NAKES">BAKOMSUS NAKES</option>
              <option value="BAKOMSUS LOGISTIK">BAKOMSUS LOGISTIK</option>
              <option value="BAKOMSUS LABFOR">BAKOMSUS LABFOR</option>
            </select>
          </div>

          <div class="input-box">
            <span class="details">ASAL POLRES</span>
            <select name="f_asal_polres" style="height: 50px; width: 300px;text-align: center;">
              <option hidden="hidden"> - PILIH ASAL POLRES - </option>
              <option value="POLRES BENGKALIS">POLRES BENGKALIS</option>
              <option value="POLRES DUMAI">POLRES DUMAI</option>
              <option value="POLRES INDRAGIRI HILIR">POLRES INDRAGIRI HILIR</option>
              <option value="POLRES INDRAGIRI HULU">POLRES INDRAGIRI HULUR</option>
              <option value="POLRES KAMPAR">POLRES KAMPAR</option>
              <option value="POLRES KEPULAUAN MERANTI">POLRES KEPULAUAN MERANTI</option>
              <option value="POLRES KUANTAN SINGINGI">POLRES KUANTAN SINGINGI</option>
              <option value="POLRES PELALAWAN">POLRES PELALAWAN</option>
              <option value="POLRES ROKAN HILIR">POLRES ROKAN HILIR</option>
              <option value="POLRES ROKAN HULU">POLRES ROKAN HULU</option>
              <option value="POLRES SIAK">POLRES SIAK</option>
              <option value="POLRESTA PEKANBARU">POLRESTA PEKANBARU</option>
            </select>
          </div>

          <div style="padding-left: 160px;">
            <span class="details" style="padding-left: 10px;">FOTO</span>
            <br><input type="file" id="foto" name="f_foto" accept="diapers/image/*" style="padding: 9px 0px 0px 40px;">
          </div>

        </div>
        
        <div class="buttons" >
          <input type="submit" name="f_simpan" value="SIMPAN">
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</body>
</html>
