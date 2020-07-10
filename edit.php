<?php
//koneksi DBMS
require "functions.php";

$hewan = query("SELECT * FROM db_bunga WHERE id=$_GET[id]");

//cek apakah tombol submit sudah ditekan atau belum?
if(isset($_POST["submit"])){
    if(count($bgn) == 0){
        echo "
        <script>
        alert('Data Bunga Tidak Ada');
        document.location.href = 'index.php';
        </script>
        ";
    }
    //cek apakah data berhasil ditambahkan atau tidak?
    if (edit($_POST["Id"]) > 0){
        echo "
        <script>
        alert('Data Berhasil Diperbarui!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Diperbarui!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Bunga</h1>
    <form action="" method="POST">
    <input type="hidden" name="Id" value="<?= $bgn[0]['Id'];?>">
        <ul>
            <li>
                <label for="Nama">Nama :</label>
                <input type="text" name="Nama" id="Nama" required value="<?= $bgn[0]['Nama'];?>" >
            </li>
            <li>
                <label for="Jns_bung">Jns_bunga :</label>
                <input type="text" name="Jns_bunga" id="Jns_bunga" required value="<?= $bgn[0]['Jns_bunga'];?>">
            </li>
            <li>
                <label for="Asl_bunga">Asl_bunga :</label>
                <input type="text" name="Asl_bunga" id="Asl_bunga" required value="<?= $bgn[0]['Asl_bunga'];?>">
            </li>
             <li>
                <label for="Gambar">Gambar :</label>
                <input type="text" name="Gambar" id="Gambar" required value="<?= $bgn[0]['Gambar'];?>">
            </li>
            <br>
            <br>
            <li>
            <button type="submit" name="submit">Simpan</button>
            </li>
        </ul>
    </form>


</body>
</html>