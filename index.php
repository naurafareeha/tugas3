<?php

include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>peraktek html dan php</title>
</head>
<body>
    <h1 style="text-align: center; color: red; font-weigth: 600;">data penerimaan</h1>
    <a href="form.php">data laki laki</a>
    <a href="form.php">data perempuan</a>
    

    <table border="1">
        <tr style="background-color: aquamarine; color: black; font-weigt: 700; font-family: verdana, geneva, tahoma, sans-serif;">
            <th width="5%">No</th>
            <th>Nama</th>
            <th>umur</th>
            <th>jenis kelamin</th>
            <th>Nomo telpon</th>
            <th>alamat</th>
            <th>action</th>
            

        </tr>

        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM kursus");
        while($kursus = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php print $kursus['No']?></td>
                <td><?php print $kursus['Nama']?></td>
                <td><?php print $kursus['umur']?></td>
                <td><?php print $kursus['nomor_telpon']?></td>
                <td><?php print $kursus['jenis_kelamin']?></td>
                <td><?php print $kursus['alamat']?></td>
                
                <td>
                    <a href="formEdit.php?No=<?php print $kursus['No']?>">edit</a>
                    <a href="hapus.php?No=<?php print $kursus['No']?>" onclick="return confirm('yakin mau hapus data')">hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>

    </table>
    
</body>
</html>