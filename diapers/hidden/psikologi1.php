<?php include("koneksi.php"); ?>
<!-- Top Menu -->
<div id="kanan">
  <div class="top-menu">
    <nav class="left">
      <a href="dashboard.php?url=rikminawal">RIKMIN AWAL</a>
      <a href="dashboard.php?url=rikkes1">RIKKES I</a>
      <a class="active-tab" href="dashboard.php?url=psikologi1">PSIKOLOGI I</a>
      <a href="dashboard.php?url=akademik">AKADEMIK</a>
      <a href="dashboard.php?url=jasmani">JASMANI</a>
      <a href="dashboard.php?url=sidang">SIDANG RIKKES II</a>
      <a href="dashboard.php?url=rikkes2">RIKKES II</a>
      <a href="dashboard.php?url=psikologi2">PSIKOLOGI II</a>
      <a href="dashboard.php?url=pmk">PMK</a>
      <a href="dashboard.php?url=rikminakhir">RIKMIN AKHIR</a>
      <a href="dashboard.php?url=kelulusan">KELULUSAN</a>
    </nav>
  </div>

  <div id="content">
    <div id="table-content">
      <table cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <td>No</td>
            <td>Nomor Registrasi Online</td>
            <td>Nomor Ujian</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Jalur</td>
            <td>Asal Polres</td>
            <td>FOTO</td>
            <td colspan="2" align="center">AKSI</td>
          </tr>  
        </thead>
        <tbody>
<!-- HIDE 
          <tr>
            <td class="name-td">1</td>
            <td class="name-td">20102010201</td>
            <td class="desc-td">CHICKO JUAN FAHLEFI</td>
            <td class="desc-td">PRIA</td>
            <td class="desc-td">BAKOMSUS TI</td>
            <td class="desc-td">POLRESTA PEKANBARU</td>
            <td class="desc-td">GAMBAR</td>
            <td class="desc-td"></td>
          </tr> -->

          <?php
            $no_urut = 0;
            $sql = "SELECT * FROM rikminawal";
            $query = mysqli_query($koneksi, $sql);

            while($casis = mysqli_fetch_array($query)){
              $no_urut++;
              echo "<tr>";
              echo "<td>$no_urut</td>";
              echo "<td>".$casis['regist_online']."</td>";
              echo "<td>".$casis['no_ujian']."</td>";
              echo "<td>".$casis['nama']."</td>";
              echo "<td>".$casis['jenis_kelamin']."</td>";
              echo "<td>".$casis['jalur']."</td>";
              echo "<td>".$casis['asal_polres']."</td>";
              echo "<td><img src=$casis[foto] width=60 height=90></td>";


              echo "<td>";
              echo "<button class='button' href='edit_rikmin_awal.php?regist_online=".$casis['regist_online']."'> UPDATE </button>";
              echo "</td>";
              echo "<td>";
              echo "<button class='buttonn' href='diapers/hapus_data.php?regist_online=".$casis['regist_online']."'> HAPUS </button>";
              echo "</td>";
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>