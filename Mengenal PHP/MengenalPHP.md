
### Mengenal PHP 

Jika dengan menggunakan Pure HTML, maka kita akan memiliki batasan untuk mengontrol apa yang kita tampilkan, namun dengan menggunakan php kita bisa menyesuaikan tampilan sesuai dengan kondisi yang berlaku.

PHP dapat ditulis dengan dua cara yaitu :
* Kode PHP ditulis di dalam kode HTML ( recommended )
* Kode HTML ditulis di dalam kode PHP

<br>

### Sintaks PHP
Kode program PHP diawali dengan tag pembuka `<?php` dan ditutup dengan tag penutup `?>`

Contoh :
```php
	
   <?php

   	 // Kode Program

   ?>

```

<br>

### Menampilkan Output Text atau Hello World
Kita bisa menggunakan beberapa cara untuk menampilkan teks ke layar, salah satunya menggunakan keyword "echo"

Banyak fungsi yang digunakan untuk menampilkan hasil atau output dari program kita seperti :

> Fungsi `var_dump()` digunakan untuk mencetak output ke browser, lebih tepatnya mengetahui informasi pada suatu nilai variabel. \
`var_dump()` merupakan fungsi, sehingga dalam penulisannya, kita harus menggunakan tanda kurung.

> Fungsi `print()` sama seperti fungsi `echo()`. Dia juga digunakan untuk menampilkan teks ke layar. Fungsi `print()` juga bisa digunakan tanpa tanda kurung. 
\
Fungsi print() akan selalu mengembalikan nilai 1 saat dieksekusi, sedangkan echo() tidak mengembalikan apa-apa dan fungsi print() hanya boleh diberikan satu parameter saja, sedangkan echo() boleh lebih dari satu.

> Fungsi `echo()` merupakan fungsi untuk menampilkan teks ke layar. Fungsi ini dapat digunakan dengan tanda kurung maupun tanpa tanda kurung.

> Fungsi `print_r()` digunakan untuk mencetak output ke browser, namun bedanya, `print_r()` ini ditujukan untuk mencetak nilai variabel dengan format yang lebih mudah dibaca. \
`print_r()` ini hanya digunakan untuk debug program, biasanya digunakan untuk mencetak atau mengetahui isi dari array maupun objek (class). Pada Objek, `print_r()` akan mencetak properti protected dan private, tetapi tidak untuk properti static.

> Fungsi `printf()` adalah fungsi untuk memformat teks atau string. Fungsi ini akan mengembalikan panjang dari teks saat dieksekusi.


<br>

### PHP Server 
Kita juga bisa menggunakan server bawaan PHP tanpa perlu menggunakan aplikasi pihak ketiga seperti `XAMPP`. Untuk menggunakan PHP Server ialah sebagai berikut.

   - Install PHP
   - Buat Folder Untuk Dokumen Website
   - Masuk ke Folderyang telah dibuat menggunakan Terminal
   - Ketik Perintah ini diterminal "php -S localhost:8000"
   - Masuk ke Browser lalu buka URL "localhost:8000"


> Jika mengalami `Error 404 NotFound`, artinya kamu belum memiliki file index.php di folder tersebut. \
Lokasi dokumen juga dapat kita tentukan secara spesifik dengan arugmen -t.
Contohnya : `php -S localhost:8000 -t /var/www/html/proyek-web/`