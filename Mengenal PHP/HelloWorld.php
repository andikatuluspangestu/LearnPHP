<!DOCTYPE html>
<html>
<head>
	<title>Hello World</title>
</head>
<body>
	

	<?php 
		// Menampilkan Output ke layar 

		echo "Hello World! - Ini Menggunakan echo <br/>"; // Menggunakan Echo

		$nama = "Andika";
		echo var_dump($nama)."Ini Menggunakan var_dump <br/>"; // Menggunakan var_dump


		print "Belajar PHP Dasar - Ini Menggunakan print <br/>"; // Menggunakan print


	?>

	<!-- =================================================================================== -->

	<?php 
		// Kode HTML ditulis di dalam kode PHP
		echo "<h3> Ini Contoh Kode HTML di Dalam Kode PHP</h3>"; 
	?>

	<!-- =================================================================================== -->

	<?php 

	  // Case-Sensitive
	  $warna = "Merah";

	  // Menampilkan Nilai Variable Warna
	  echo $warna; // Benar
	  echo $Warna; // Salah dan akan Error

	?>

</body>
</html>