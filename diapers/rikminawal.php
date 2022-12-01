<?php include("koneksi.php"); ?>
<!-- Top Menu -->
<div id="kanan">
  <div class="top-menu">
    <nav class="left">
      <a class="active-tab" href="dashboard.php?url=rikminawal">RIKMIN AWAL</a>
      <a href="dashboard.php?url=rikkes1">RIKKES I</a>
      <a href="dashboard.php?url=psikologi1">PSIKOLOGI I</a>
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
      <table >
        <thead>
        <tr>
          <td style="width: 20%;text-align: center;float: left;border: 1px solid black;">
            <input type="text" class="search__input" placeholder="Search...">
          </td>
          <td class="fileexcel">
            <form action="/action_page.php">
              <h4 class="fileexcel1"> Upload File Excel</h4>
              <input type="file" id="myFile" name="filename" placeholder="Upload Excel">
            </form>
          </td>
          <td>
            <a href="dashboard.php?url=tambahrikminawal"><button class="button-71" role="button">TAMBAH DATA</button></a>
          </td>
        </tr>
      </thead>
      </table>
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
            <td>Nilai Psikologi (35%)</td>
            <td>Nilai Akademik (40%)</td>
            <td>Nilai Jasmani (25%)</td>
            <td>Nilai Akhir</td>
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
              echo "<td>".$casis['nilai_psikologi']."</td>";
              echo "<td>".$casis['nilai_akademik']."</td>";
              echo "<td>".$casis['nilai_jasmani']."</td>";
              echo "<td>".round((($casis['nilai_psikologi']*35)+($casis['nilai_akademik']*25)+($casis['nilai_jasmani']*40))/100,2,PHP_ROUND_HALF_UP)."</td>";

              echo "<td><img src=$casis[foto] width=70 height=80></td>";
              echo "<td>";
              echo "<a href='dashboard.php?url=editrikminawal&?regist_online=".$casis['regist_online']."'><button class='button'> UPDATE </button></a>";
              echo "</td>";
              echo "<td>";
              echo "<a href='diapers/hapus_data_rikminawal.php?regist_online=".$casis['regist_online']."'><button class='buttonn'> HAPUS </button></a>";
              echo "</td>";
              echo "</tr>";
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>