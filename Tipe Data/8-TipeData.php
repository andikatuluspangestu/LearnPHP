<!DOCTYPE html>
<html>
<head>
	<title>Tipe Data PHP</title>
</head>
<body>
	<!-- Awal - Tipe Data dalam PHP -->

	<?php

		// tipe data char (karakter)
		$jenis_kelamin = 'Laki-laki';

		// tipe data string (teks)
		$nama = "Andika Pangestu";

		// tipe data integer
		$umur = 20;

		// tipe data float
		$tinggi_badan = 156.3;


		// tipe data boolean
		$menikah = false;

		echo "Nama: $nama_lengkap<br>";
		echo "Jenis Kelamin: $jenis_kelamin<br>";
		echo "Umur: $umur tahun<br>";
		echo "berat badan: $berat kg<br>";
		echo "tinggi badan: $tinggi cm<br>";
		echo "menikah: $menikah";

		// tipe data Array
		$minuman = array("Juice", "Coffee", "Milk"); // Penulisan Gaya Lama
		$makanan = ["Chicken", "Meatball", "Rice"]; // Penulisan Gaya Baru

		// tipe data Objek
		$user = new User();

		// tipe data Null
		$kodePos = NULL;

	?>

	<!-- Akhir - TipeData dalam PHP -->
</body>
</html>