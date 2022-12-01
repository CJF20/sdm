<?php
if (isset($_GET['url']))	{
	$url=$_GET['url'];

	switch ($url)
	{
	
		case 'dashboard':
			include 'dashboard.php';
			break;


	/* RIKMIN AWAL */
		case 'rikminawal':
			include 'diapers/rikminawal.php';
			break;

		case 'hapus':
			include 'diapers/hapus_data_rikminawal.php';
			break;

		case 'tambahrikminawal':
			include 'diapers/tambah_data_rikminawal.php';
			break;

		case 'prosesrikminawal':
			include 'diapers/proses_tambah_data_rikminawal.php';
			break;

		case 'editrikminawal':
			include 'diapers/edit_data_rikminawal.php';
			break;

		case 'proseseditrikminawal':
			include 'diapers/proses_edit_data_rikminawal.php';
			break;

	/* RIKKES I */
		case 'rikkes1':
			include 'diapers/rikkes1.php';
			break;

	/* PSIKOLOGI I */
		case 'psikologi1':
			include 'diapers/psikologi1.php';
			break;

	/* AKADEMIK */
		case 'akademik':
			include 'diapers/akademik.php';
			break;

	/* JASMANI */
		case 'jasmani':
			include 'diapers/jasmani.php';
			break;

	/* SIDANG */
		case 'sidang':
			include 'diapers/sidang.php';
			break;

	/* RIKKES II */
		case 'rikkes2':
			include 'diapers/rikkes2.php';
			break;

	/* PSIKOLOGI II */
		case 'psikologi2':
			include 'diapers/psikologi2.php';
			break;

	/* PMK */
		case 'pmk':
			include 'diapers/pmk.php';
			break;

	/* RIKMIN AKHIR */
		case 'rikminakhir':
			include 'diapers/rikminakhir.php';
			break;

	/* KELULUSAN */
		case 'kelulusan':
			include 'diapers/kelulusan.php';
			break;
	}
}
