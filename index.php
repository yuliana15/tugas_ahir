<?php
require 'functions.php';
$Bunga = query("SELECT * FROM ctlg_bunga");
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Bunga</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Id.</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Gambar</th>
                    
        </tr>
        
        <?php $i = 1;?>
        <?php foreach ($hewan as $row) :?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td>
                <img src="img/<?= $row['Gambar']?>" width="50">
            </td>
            <td><?= $row['Nama']?></td>
            <td><?= $row['Jenis']?></td>
            <td><?= $row['Gambar']?></td>
           
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    
</body>
</html>