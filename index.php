<?php
require 'functions.php';
$bgn = query("SELECT * FROM db_bunga");

//tombol cari ditekan
if(isset($_POST["cari"])){
    $bgn = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Macam Bunga</h1>
    <a href="tambah.php">Tambah Data Bunga</a>
    <br></br>

<form action= "" method="POST">
    <input type="text" name="keyword" size="30" autofocus placeholder="Masukkan kata kunci pencarian" autocomplete="off">
    <button type="submit" name="cari">Cari</button>
</form>
<br>

    <table class="table" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Jns_bung</th>
            <th>Asl_bunga</th>

        </tr>
        
        <?php $i = 1;?>
        <?php foreach ($bgn as $row) { ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="edit.php?id=<?= $row['Id']; ?>">ubah</a> |
                <a href="hapus.php?id=<?= $row['Id']; ?>">hapus</a>
            </td>
            <td>
                <img src="img/<?= $row['gambar']?>" width="50">
            </td>
            <td><?= $row['nama']?></td>
            <td><?= $row['jns_bunga']?></td>
            <td><?= $row['asl_bunga']?></td>

        </tr>
        <?php $i++; ?>
        <?php } ?>
    </table>
    
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Membuat background dengan gambar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


    
    <h1>Project Akihir P.web2/2 CSS</h1>
 
</body>
</html>

<html>
    <head>
        <title>Selalu Semangat</title>
        <style>
            body{
                background-image: url(logo.jpg);
                background-repeat: no-repeat;
            }
        </style>
    </head>
    <body>
        
        <h1></h1>
        <p></p>
        
    </body>
</html>
