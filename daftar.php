<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
    <!-- Navigasi -->
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid fs-4">
                <a class="navbar-brand"><h3>Beasiswa</h3></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="index.php">Pilihan Beasiswa</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link active text-primary" aria-current="page" href="daftar.php">Daftar</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="hasil.php">Hasil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Konten Registrasi Beasiswa -->
        <h3 class="text-center my-3">Daftar Beasiswa</h3>
        <div class="row d-flex justify-content-center">
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card mt-4">
                    <div class="card-body mt-4">
                        <form action="simpan.php" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">Nama</label>
                                </div>
                                <div class="col">
                                    <input type="text" name="nama" required class="form-control" id="Input1" placeholder="Masukan Nama">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">Email</label>
                                </div>
                                <div class="col">
                                    <input type="email"  name="email" required class="form-control" id="Input1" placeholder="name@example.com">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">No. Hp</label>
                                </div>
                                <div class="col">
                                    <input type="number" name="nomor" required class="form-control" id="Input1" placeholder="Masukan No. HP">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">Semester saat ini</label>
                                </div>
                                <div class="col">
                                    <select class="form-select" name="semester" aria-label="Default select example" required>
                                        <option disabled selected>Pilih</option>
                                        <option value="Semester 1">Semester 1</option>
                                        <option value="Semester 2">Semester 2</option>
                                        <option value="Semester 3">Semester 3</option>
                                        <option value="Semester 4">Semester 4</option>
                                        <option value="Semester 5">Semester 5</option>
                                        <option value="Semester 6">Semester 6</option>
                                        <option value="Semester 7">Semester 7</option>
                                        <option value="Semester 8">Semester 8</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <?php
                                function generateIPK()
                                    {
                                        $ipk = number_format(mt_rand(280, 350) / 100, 2);
                                        return $ipk;
                                    }
                                    $ipk_mahasiswa = generateIPK();
                                ?>
                                <div class="col">
                                    <label class="form-label">IPK Terakhir</label>
                                </div>
                                <div class="col">
                                    <input type="double" name="nilai" class="form-control" id="Input1" value="<?php echo $ipk_mahasiswa ?>" readonly>
                                </div>
                            </div>
                            
                            <?php 
                                if ($ipk_mahasiswa >= 3.00) {
                                    // Jika IPK lebih dari 3.00
                                    echo   "<div class='row mb-3'>
                                                <div class='col'>
                                                    <label class='form-label'>Pilihan Beasiswa</label>
                                                </div>
                                                <div class='col'>
                                                    <select class='form-select' name='pilihan_beasiswa' required aria-label='Default select example'>
                                                        <option disabled selected>Pilih Beasiswa</option>
                                                        <option value='1'>Akademik</option>
                                                        <option value='2'>Non-Akademik</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class='row mb-3'>
                                                <div class='col'>
                                                    <label class='form-label'>Upload Berkas Syarat</label>
                                                </div>
                                                <div class='col'>
                                                    <input class='form-control' name='berkas' required type='file' id='formFileMultiple' multiple>
                                                </div>
                                            </div>
                                            <div class='row mb-3'>
                                                <div class='col'>
                                                    <input type='submit' class='btn btn-primary' value='Simpan' name='submit'>
                                                    <button type='button' class='btn btn-danger' onclick='history.back(-1)'>Kembali</button>
                                                </div>
                                            </div>"
                                    ;
                                } else {
                                    // Jika IPK kurang dari 3.00
                                    echo   "<div class='row mb-3'>
                                                <div class='col'>
                                                    <label class='form-label'>Pilihan Beasiswa</label>
                                                </div>
                                                <div class='col'>
                                                    <select class='form-select' aria-label='Default select example' disabled>
                                                        <option selected>Pilih Beasiswa</option>
                                                        <option value='1'>Akademik</option>
                                                        <option value='2'>Non-Akademik</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class='row mb-3'>
                                                <div class='col'>
                                                    <label class='form-label'>Upload Berkas Syarat</label>
                                                </div>
                                                <div class='col'>
                                                    <input class='form-control' type='file' id='formFileMultiple' multiple disabled>
                                                </div>
                                            </div>
                                            <div class='row mb-3'>
                                                <div class='col'>
                                                    <button type='button' class='btn btn-danger' onclick='history.back(-1)'>Kembali</button>
                                                </div>
                                            </div>"
                                    ;
                                }                   
                            ?>
                                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="footer bg-dark text-center text-light mt-5 p-3">
            <i class="fa fa-copyright" aria-hidden="true"> 
                Copyright @ raihanalf
            </i>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>