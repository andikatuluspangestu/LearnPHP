 <!DOCTYPE html>
 <html>
 <head>
 	<title>Variable PHP</title>
 </head>
 <body>
 	<!-- Awal - Membuat Variable di PHP -->

 	<?php 
 		// Kita bisa membuat variable dengan menggunakan tanda $, nama variable tidak boleh diawali dengan angka dan simbol (kecuali underscore), dan nama variable bersifat Case Sensitive

 		// Variable dengan Tipe Data Integer dan tanda "=" merupakan operator assignment
 		$umurSaya = 17; 

 		// Mengupdate Isi Variable
 		$umurSaya = 21;

 	?>

 	<!-- Akhir - Membuat Variable di PHP -->


<!-- ============================================================= -->


 	<!-- Awal - Mencetak nilai Variable -->

 	<?php 
 		$umurSaya = 17;

 		echo "Umur saya adalah $umurSaya"; // Mencetak isi variable
 	?>

 	<!-- Akhir - Mencetak nilai Variable -->

 </body>
 </html>