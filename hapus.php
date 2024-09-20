<?php

include 'koneksi.php';

$No = $_GET['No'];

mysqli_query($koneksi, "DELETE  FROM user where No='$No'");

header("location:index.php")

?>