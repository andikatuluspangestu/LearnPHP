### Sintaks Case PHP

Dalam PHP, kata kunci (misalnya if, else, while, echo, dll), kelas, function, dan function yang ditetapkan oleh pengguna itu tidak peka terhadap besar kecilnya huruf ( Not Case-sensitive ), namun untuk variable berlaku sifat peka terhadap besar kecilnya huruf ( Case-Sensitive ).

Contoh :

```php

	<?php 

	  // Case-Sensitive
	  $warna = "Merah";

	  // Menampilkan Nilai Variable Warna
	  echo $warna; // Benar
	  echo $Warna; // Salah dan akan Error

	?>


```