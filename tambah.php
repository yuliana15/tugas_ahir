<?php
//koneksi DBMS
require "functions.php";

//cek apakah tombol submit sudah ditekan atau belum?
if(isset($_POST["submit"])){
    //cek apakah data berhasil ditambahkan atau tidak?
    if (tambah($_POST) > 0){
        echo "
        <script>
        alert('Data Berhasil Disimpan!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Disimpan!');
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
        <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Halaman Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Bunga</h1>
    <form action="" method="POST">
        <table>
            <tr>
            <td>
                <label for="Nama">Nama </label></td>
                <td>: <input type="text" name="Nama" id="Nama" required></td>
            </tr>
            <tr>
            <td><label for="Jns_bunga">Jns_bunga </label></td>
               <td>: <input type="text" name="Jns_bunga" id="Jns_bunga" required></td>
            </tr>
            <tr>
               <td><label for="Asl_bunga">Asl_bunga </label></td>
               <td>: <input type="text" name="Asl_bunga" id="Asl_bunga" required></td>
            </tr>
            <tr>
                <td><label for="Gambar">Gambar </label></td>
               <td>: <input type="text" name="Gambar" id="Gambar" required></td>
            </tr>
            <br>
            <br>
            <tr>
            <td>
            <button type="submit" name="submit">Simpan</button></td>
            </tr>
        </table>
    </form>


</body>
</html>