<?php
include 'koneksi.php';

$create = "CREATE TABLE kursus(
id INT AUTO_INCREMENT PRIMARY KEY,
nomor_bootcamp INT(225) NOT NULL,
nama_peserta VARCHAR(225) NOT NULL,
nama_bootcamp VARCHAR (225) NOT NULL,
jadwa_kelas VARCHAR (225) NOT NULL,
nomor_telpon INT (225) NOT NULL,

)";

If($koneksi->query($create)=== true) {
    echo "tabel kursus berhasil";
}else{
    echo "gagal membuat table";
}

$koneksi->close();
?>