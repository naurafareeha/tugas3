<?php
include 'koneksi.php';

$create = "CREATE TABLE kursus(
id INT AUTO_INCREMENT PRIMARY KEY,
Nama INT(225) NOT NULL,
umur VARCHAR(225) NOT NULL,
nomor_telpon INT(225) NOT NULL,
jenis_kelamin VARCHAR (225) NOT NULL,
alamat VARCHAR (225) NOT NULL,


)";

If($koneksi->query($create)=== true) {
    echo "tabel kursus berhasil";
}else{
    echo "gagal membuat table";
}

$koneksi->close();
?>