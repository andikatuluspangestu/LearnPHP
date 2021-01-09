<!DOCTYPE html>
<html>
<head>
	<title>Latihan Membuat Router PHP</title>
</head>
<body>

	<!-- Buat File Router.php dan ketik kode dibawah ini -->

	<?php 

	switch ($_SERVER["REQUEST-URI"]) {
		case "/home":
			include("home.php")
			break;
		
		default:
			echo 'Halaman Tidak Ditemukan';
			break;
	}

	?>

	<!-- Kemudian Buat File home.php dan ketik kode dibawah ini -->
	<?php
		echo "Ini Halaman Utama";
	?>

	<!-- Jalankan Server => php -S localhost:8000 router.php -->

</body>
</html>