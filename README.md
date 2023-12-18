# UAS Pemrograman Web RA
## RA Siti Zakiyah 121140103

link website : https://121140103-rasitizakiyah-datatemankuliah.000webhostapp.com/

Informasi Akun

username : aiwa

password : 131103

## Bagian 1: Client-side Programming

Pada bagian ini berisikan dua halaman, yaitu halaman login dan halaman form data. Pada halaman login berisikan informasi login akun untuk pengguna dan terdapat informasi akun pada pojok kanan atas page. Kemudian pada halaman form berisikan form penginputan data. Pada halaman ini pengguna dapat menambahkan data baru, mengedit data, menghapus data, melihat data dan mencari data sesuai dengan program studi teman. Halaman ini menggunakan DOM JavaScript dan fungsi validasi untuk memvalidasi form agar tidak kosong dan wajib menginputkan data. Pada halaman form terdapat lima jenis inputan dengan tipe input yang berbeda-beda.

## Bagian 2: Server-side Programming

Pada bagian ini dibuat lima file utama untuk website, yaitu file login.php untuk halaman login pengguna, tambahdata.php untuk form penginputan data teman, editdata.php untuk mengedit data yang sudah diinputkan, hapusdata.php untuk menghapus data nama, dan caridata.php untuk mencari data nama sesuai program studi.

## Bagian 3: Manajemen Database

Berikut sintaks database yang dibuat :

CREATE TABLE
    teman(
        nim INT(10) PRIMARY KEY,
        nama VARCHAR(100) NOT NULL,
        gender VARCHAR(100) NOT NULL,
        prodi VARCHAR(100) NOT NULL,
        ciri VARCHAR(100) NOT NULL
    );

CREATE TABLE
    akun(
        username VARCHAR(50),
        password VARCHAR(50)
    );

INSERT INTO akun (username, password) VALUES ('aiwa', '131103');

ALTER TABLE akun ADD PRIMARY KEY (username);

berikut sintaks php :

login : $sql = "SELECT * FROM akun WHERE username='$username' AND password='$password'";

tambah data : $sql = "INSERT INTO teman (nim, nama, gender, prodi, sifat) VALUES ('$nim', '$nama', '$gender', '$prodi', '$sifat')";

edit data : $sql = "UPDATE teman SET nama='$nama', gender='$gender', prodi='$prodi', sifat='$sifat' WHERE nim='$nim'";

hapus data : $sql = "DELETE FROM teman WHERE nim='$del'";

cari data : $sql = "SELECT * FROM teman" WHERE prodi = '$filterprodi'";

## Bagian 4: State Management

Pada bagian ini membuat sebuah session berupa pesan error ketika melakukan login jika username atau password yang diinput salah. Kemudian dibuat juga cookie dengan JavaScript dengan durasi 30 hari pada file index.php dan teman.php. Selain itu pada file index.php cookie dapat mengecek informasi akun pengguna untuk diarahkan ke page manajemen data. Lalu pada file teman.php cookie juga mengecek informasi akun pengguna untuk diarahkan ke page login dan tidak akan bisa mengakses page form jika pengguna belum login. Kemudian jika klik tombol logout fungsi logout akan dihapus cookie dan pengguna akan diarahkan ke page login.

## Bagian Bonus: Hosting Aplikasi Web

1. Langkah-langkah untuk meng-host website
   - mengakses website "000webhost.com"
   - setelah masuk ke panel host, membuat akun baru dengan email
   - klik "Create Website" dan pilih plan yang free
   - inputkan nama website dan password
   - akses ke website yang telah dibuat dengan klik manage
   - kemudian akan masuk ke panel website yang sudah dibuat, scroll ke bawah pilih mysql database
   - pilih create database, kemudian isikan nama, username, dan password
   - masuk ke menu file manage, lalu upload source code website
   - seting koneksi database, ubah baris ke tiga file sesuaikan dengan nama database, username, dan password yang dibuat sebelumnya
   - kembali ke panel utama dan masuk ke menu mysql databse, lalu  klik titik 3 pilih phpMyAdmin, dan akan masuk kedalam manajemen database
   - lalu import database pada localhost phpMyAdmin dan impor di sini
   - setelah success akses domain utama, klik link pada kiri atas page
   - website sudah berhasil di hosting

2. Alasan memilih website "000webhost.com"
   Saya memilih website ini karena penggunaannya yang gratis dan user friendly, sehingga mudah untuk diimplementasikan. Selain itu memberikan storage yang cukup besar dan tidak harus menggunakan apk pihak ketiga lagi.

3. Memastikan keamanan website
   Menggunakan cookie ketiga login ke dalam website sehingga tak sembarang pengguna daoat mengakses wesite.

4. Konfigurasi server yang diterapkan
   - web server menggunakan Nginx
   - menggunakan bahasa pemrograman HTML, PHP, JavaScript
   - menggunakan database MySQL
   - menggunakan github untuk backup data
