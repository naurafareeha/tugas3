<?php
// create = proses menambahkan atau input data
// pake method POST

include 'koneksi.php';
$No = $_POST ['No'];
$nama = $_POST ['Nama'];
$umur = $_POST ['umur'];
$nomor_telpon = $_POST ['nomor_telpon'];
$jenis_kelamin = $_POST ['jenis_kelamin'];
$alamat = $_POST ['alamat'];

mysqli_query($koneksi, "INSERT INTO kursus values('$No', '$nama', '$umur', '$nomor_telpon', '$jenis_kelamin', '$alamat')");

header("location:index.php");
?>