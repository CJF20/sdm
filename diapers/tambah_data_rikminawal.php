<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
<link rel="stylesheet" type="text/css" href="diapers/CSS/tambahdata.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div id="kanan">
  <div class="top-dataa">
  <div class="container">
    <div class="title">TAMBAH DATA</div>
    <div class="content">

      <form action="dashboard.php?url=prosesrikminawal" method="POST">
        <div class="user-details">

          <div class="input-box">
            <span class="details">NOMOR REGISTRASI ONLINE</span>
            <input type="text" name="f_regist_online" placeholder="MASUKAN NO. REGISTRASI ONLINE" required>
          </div>

          <div class="input-box">
            <span class="details">NO UJIAN</span>
            <input type="text" name="f_no_ujian" placeholder="MASUKAN NOMOR UJIAN" required>
          </div>

          <div class="input-box">
            <span class="details">NAMA LENGKAP</span>
            <input type="text" name="f_nama" placeholder="MASUKAN NAMA LENGKAP" required>
          </div>

          <div class="input-box">
            <span class="details">JENIS KELAMIN</span>
            <select name="f_jenis_kelamin" style="height: 50px; width: 300px;text-align: center;">
              <option hidden="hidden"> - PILIH JENIS KELAMIN - </option>
              <option value="PRIA">PRIA</option>
              <option value="WANITA">WANITA</option>
            </select>
          </div>

          <div class="input-box">
            <span class="details">JALUR PENERIMAAN</span>
            <select name="f_jalur" style="height: 50px; width: 300px;text-align: center;">
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
