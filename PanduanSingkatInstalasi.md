#Panduan Singkat Instalasi Keuangan Guyub

# Server #

## Persyaratan ##

Pastikan Anda sudah menyiapkan web server pada PC yang akan dijadikan server. Pastikan server tersebut dapat menjalankan web PHP dan database MySQL dengan [engine InnoDB](http://dev.mysql.com/doc/refman/5.0/en/innodb.html).

Untuk web server Anda bisa menggunakan aplikasi semacam [Apache](http://httpd.apache.org/), Lighttpd , dsb.

## Langkah-langkah ##

**1. Download file kompresi aplikasi Keuangan Guyub terbaru dari [Project Hosting Keuangan Guyub](http://code.google.com/p/keuangan-guyub/downloads/list), misal `KG-20100512-1.zip`.**

**2. Extract file tersebut di direktori utama web server pada PC server Anda, misal pada beberapa distro GNU/LInux letaknya adalah pada /var/www.**

Catatan: Demi keamanan standar permission dari file aplikasi Keuangan Guyub adalah 755 untuk semua direktori dan 644 untuk semua file selain direktori. Hal ini perlu diperhatikan terutama pada server berbasis Unix Like (contoh GNU/Linux, dll), semisal keperluan modifikasi/konfigurasi/ubah file harus menggunakan root atau sudo.

**3. Setelah itu pada direktori utama web server Anda akan terbentuk direktori kg, sehingga apabila dipanggil di browser maka akan meggunakan alamat http://localhost/kg. Silahkan rename nama direktori tersebut dengan nama yang diinginkan.**

**4. Buat database pada MySQL, dengan nama kg (atau nama lain sesuai keinginan Anda).**

Anda bisa menggunakan [PHPMyAdmin](http://www.phpmyadmin.net/) atau jika ingin menggunakan perintah di terminal/command line bisa menggunakan;

```
mysqladmin -u root -p create kg
```

**5. Kemudian import struktur dan data dariKG-20100512-1.sql (dalam folder /kg/db/) ke database yang telah kita buat sebelumnya.**

Anda bisa menggunakan fitur Impor di PHPMyadmin atau jika ingin menggunakan perintah di terminal/command line bisa menggunakan;

```
mysql -u root -p kg < KG-20100512-1.sql
```

**6. Lakukan konfigurasi pada file config.php (../kg/application/config/config.php).**

Caranya buka file config.php dan cari baris;

```
$config['base_url']     = "http://localhost/kg/";
```

Kemudian silahkan ganti http://localhost/kg/ dengan URL standar yang benar, dimana kg harus sesuai dengan nama direktori program dan localhost harus sesuai dengan hostname yang Anda gunakan. Misal, jika IP server adalah 192.168.1.100 dan nantinya aplikasi ini akan diakses dari PC lain dalam jaringan maka silahkan ganti localhost dengan IP PC server semisal 192.168.1.100, sehingga baris tersebut menjadi;

```
$config['base_url']     = "http://192.168.1.100/kg/";
```

**7. Konfigurasi selanjutnya adalah pada file database.php (../kg/application/config/db.php).**

Caranya buka file database.php dan cari baris;

```
$db['default']['hostname'] = "localhost";
$db['default']['username'] = "root";
$db['default']['password'] = "";
$db['default']['database'] = "kg";
```

Kemudian silahkan ganti 4 baris konfigurasi diatas sesuai dengan konfigurasi MySQL di PC server Anda.

Catatan: Untuk keamanan harap ganti username dan/atau password MySQL Anda, khususnya password jangan menggunakan default kosong.

**8. Setelah semua langkah diatas dilakukan, seharusnya aplikasi Keuangan Guyub sudah bisa digunakan. Silahkan buka browser Anda dan buka alamat Keuangan Guyub sesuai konfigurasi yang Anda pilih.**

Catatan: Untuk pertama kali Administrator aplikasi dapat login dengan menggunakan username = admin dan password = 4dm1n.

# Klien #

Karena aplikasi Keuangan Guyub berbasis web maka pada klien yang akan digunakan untuk menjalanakan aplikasi Keuangan Guyub tidak perlu melakukan instalasi khusus, cukup dengan memastikan browser yang digunakan bisa menjalankan dengan normal website dengan javascript dan AJAX.

Selain itu jika klien ini berbeda mesin dengan server, maka pastikan jaringan terinstal dengan baik dan benar.