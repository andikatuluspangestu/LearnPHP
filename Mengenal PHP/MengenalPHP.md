
### Mengenal PHP 

Jika dengan menggunakan Pure HTML, maka kita akan memiliki batasan untuk mengontrol apa yang kita tampilkan, namun dengan menggunakan php kita bisa menyesuaikan tampilan sesuai dengan kondisi yang berlaku.

PHP dapat ditulis dengan dua cara yaitu :
* Kode PHP ditulis di dalam kode HTML ( recommended )
* Kode HTML ditulis di dalam kode PHP

### Sintaks PHP
Kode program PHP diawali dengan tag pembuka `<?php` dan ditutup dengan tag penutup `?>`

Contoh :
```php
	
   <?php

   	 // Kode Program

   ?>

```

Dalam PHP, kata kunci (misalnya if, else, while, echo, dll), kelas, function, dan function yang ditetapkan oleh pengguna itu peka terhadap besar kecilnya huruf ( Not Case-sensitive ), namun untuk variable berlaku sifat peka terhadap besar kecilnya huruf ( Case-Sensitive ).

### Menampilkan Output Text atau Hello World
Kita bisa menggunakan beberapa cara untuk menampilkan teks ke layar, salah satunya menggunakan keyword "echo"

Banyak fungsi yang digunakan untuk menampilkan hasil atau output dari program kita seperti :

* var_dump();

> Fungsi `print()` sama seperti fungsi `echo()`. Dia juga digunakan untuk menampilkan teks ke layar. Fungsi `print()` juga bisa digunakan tanpa tanda kurung. 
\
Fungsi print() akan selalu mengembalikan nilai 1 saat dieksekusi, sedangkan echo() tidak mengembalikan apa-apa dan fungsi print() hanya boleh diberikan satu parameter saja, sedangkan echo() boleh lebih dari satu.

* echo();
* print_r();

### PHP Server 

   - Install PHP
   - Buat Folder Untuk Dokumen Website
   - Masuk ke Folderyang telah dibuat menggunakan Terminal
   - Ketik Perintah ini diterminal "php -S localhost:8000"
   - Masuk ke Browser lalu buka URL "localhost:8000"


Jika mengalami error 404 Notfound, artinya kamu belum memiliki file index.php di folder tersebut

Lokasi dokumen juga dapat kita tentukan secara spesifik dengan arugmen -t.
Contohnya : php -S localhost:8000 -t /var/www/html/proyek-web/ 