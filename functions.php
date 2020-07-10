<?php
//koneksi ke database
$koneksi= mysqli_connect("localhost", "root", "", "bunga");

  function query ($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $koneksi;
    $Nama = htmlspecialchars($data ["Nama"]);
    $Jns_bunga =  htmlspecialchars($data ["Jns_bunga"]);
    $Asl_bunga =  htmlspecialchars($data ["Asl_bunga"]);

    $Gambar =  htmlspecialchars($data ["Gambar"]);

    
    //query insert ke database
    $query = "INSERT INTO db_bunga
                VALUES
                ('', '$Nama', '$Jns_bunga','$Asl_bunga','$Gambar')
                ";

    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);
}

function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM db_bunga WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

function edit($id)
{
    global $koneksi;
    mysqli_query($koneksi, "UPDATE db_bunga SET Nama = '$_POST[Nama]',Jns_bunga = '$_POST[Jns_bunga]',Asl_bunga = '$_POST[Asl_bunga]',Gambar = '$_POST[Gambar]' WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

function cari($keyword){
        $query = "SELECT * FROM db_bunga
                    WHERE
                        Nama LIKE '%$keyword%' OR
                        Jns_bunga LIKE '%$keyword%' OR
                        Asl_bunga LIKE '%$keyword%'

      ";

      return query($query);
}