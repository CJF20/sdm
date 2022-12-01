<?php include("koneksi.php"); ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="CSS/dashboard.css">
<link rel="stylesheet" type="text/css" href="diapers/CSS/button.css">
<head>
  <title>SDM POLDA RIAU</title>
</head>
<body>
<div id="main-container">
  <!-- Left Menu -->
  <div id="kiri">
    <div class="light-menu">
      <h1 id="page_title" >DALPERS</h1>
      <a href="?url=rikminawal">SUBBAG DIAPERS</a>
      <a href="#">SUBBAG SELEK</a>
      <a href="#">SUBBAG PNS</a>
    </div>  
  </div>
  <!-- END Left Menu -->


  <!-- HALAMAN -->
  <?php
  include 'halaman.php';
  ?>
  <!--END HALAMAN-->

<div id="credit">
<p>Copyright © BiroSDM-PoldaRiau</p>
</div>

</div>
</body>
</html>


