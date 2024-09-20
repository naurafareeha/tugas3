<?php

include 'koneksi.php';
$No = $_POST ['No'];
$nama = $_POST ['Nama'];
$umur = $_POST ['umur'];
$nomor_telpon = $_POST ['nomor_telpon'];
$jenis_kelamin = $_POST ['jenis_kelamin'];
$alamat = $_POST ['alamat'];

$data = mysqli_query($koneksi, "UPDATE user SET nama='$nama', umur='$umur', nomor_telpon='$nomor_telpon', jenis_kelamin='$jenis_kelamin', alamat='$alamat' where id='$id'");

header("location:index.php");

?>