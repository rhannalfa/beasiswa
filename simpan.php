<?php
include 'koneksi.php';

if ($_POST['submit']) {
        $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg', 'gif', 'pdf');
        $nama1 = $_FILES['berkas']['name'];
        $x = explode('.', $nama1);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['berkas']['size'];
        $file_tmp = $_FILES['berkas']['tmp_name'];
    
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 1044070) {
                $query = move_uploaded_file($file_tmp, 'berkas/' . $nama1);
                // $query = mysqli_query("INSERT INTO data_beasiswa VALUES(NULL, '$nama')");
                if ($query) {
                    echo 'FILE BERHASIL DI UPLOAD';
                } else {
                    echo 'GAGAL MENGUPLOAD GAMBAR';
                }
            } else {
                echo 'UKURAN FILE TERLALU BESAR';
            }
        } else {
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
    }

$nama               = $_POST['nama'];
$email              = $_POST['email'];
$nomor              = $_POST['nomor'];
$semester           = $_POST['semester'];
$nilai              = $_POST['nilai'];
$pilihan_beasiswa   = $_POST['pilihan_beasiswa'];
// $berkas             = $_POST['berkas'];

// Proses simpan
$query="INSERT INTO data_beasiswa(nama, email, nomor,  semester, nilai, pilihan_beasiswa, berkas)
        VALUES('$nama', '$email', '$nomor', '$semester', '$nilai','$pilihan_beasiswa','$nama1')";
mysqli_query($koneksi, $query);
        if($simpan){
                echo "Data berhasil disimpan.";
        }else{
                echo "Gagal simpan data!";
        }
header("location:hasil.php?");
?>