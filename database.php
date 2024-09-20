<?php

include 'koneksi.php';

$database = 'phpkursusnaura';
// syintax database namanya query
$create = "CREATE DATABASE $database";

if($koneksi->query($create) === true){
    echo "database $database berhasil dibuat";
}else{
    echo "gagal membuat database";
}
$koneksi->close();

?>