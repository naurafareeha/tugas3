<?php

include 'koneksi.php';

$No = $_GET['No'];

$data = mysqli_query($koneksi, "SELECT * FROM user WHERE No='$No'");
while ($kursus = mysqli_fetch_array($data)){
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>form pendaftaran kursus</h1>
    <form action="edit.php" method="post">

    <input type="hidden" name="No" value="<?php print $kursus['No'] ?>">

    <label>Nama lengkap</label>
        <br>
        <input type="text" name="nama">
        <br>
        <label>umur</label>
        <br>
        <input type="umur" name="umur">
        <br>
        <label>Nomor telpon</label>
        <br>
        <input type="number" name="nomor_telpon">
        <br>
        <label>jenis kelamin</label>
        <br>
        <input type="enum" name="jenis_kelamin">
        <br>
        <alamat>alamat</alamat>
        <br>
        <textarea name="alamat"></textarea>
        <br>
        <button type="submit">save</button>

        
    </form>
</body>
</html>


    <?php
}
?>