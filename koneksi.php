<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "db_beasiswa";
    
    // membuat koneksi
    $koneksi = mysqli_connect($host, $user, $password, $database);
    // mengecek koneksi
    if (mysqli_connect_errno()){ // cek kondisi jika koneksi berhasil
        echo "Koneksi database gagal : " . mysqli_connect_error();}

?>