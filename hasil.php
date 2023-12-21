<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
                            <a class="nav-link" href="daftar.php">Daftar</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link active text-primary" aria-current="page" href="hasil.php">Hasil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Konten Hasil -->
        <h3 class="text-center my-3">Hasil</h3>
        <div class="row d-flex justify-content-center">
            <div class="col-sm-10 mb-3 mb-sm-0">
                <table class="table text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Hp</th>
                        <th>Semester</th>
                        <th>IPK</th>
                        <th>Pilihan Beasiswa</th>
                        <th>Berkas Syarat</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <?php 
                            include 'koneksi.php';
                            $beasiswa = mysqli_query($koneksi, "SELECT * from data_beasiswa");
                            $no = 1;
                            while($data = mysqli_fetch_array($beasiswa)){
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nama']; ?></td>
                            <td><?= $data['email']; ?></td>
                            <td><?= $data['nomor']; ?></td>
                            <td><?= $data['semester']; ?></td>
                            <td><?= $data['nilai']; ?></td>
                            <td><?= $data['pilihan_beasiswa']; ?></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $data['id']; ?>"">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </td>
                            <!-- Modal -->
                            <div class="modal fade " id="exampleModal<?= $data['id']; ?>" tabindex=" -1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered ">
                                    <div class="modal-content bg-light">
                                        <div class=" modal-body d-flex">
                                            <div class="login card col-sm-10 mx-auto">
                                                <img src="berkas/<?= $data['berkas']; ?>" alt="...">
                                            </div>
                                            <div>
                                                <button type="button" class="btn" data-bs-dismiss="modal">X</button>
                                            </div>
                                            <!-- <div style="margin-top:-35%;">
                                                <svg class="rounded-3" width="100%" height="100%" id="svg" viewBox="0 0 1440 500" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
                                                    <defs>
                                                        <linearGradient id="gradient" x1="39%" y1="1%" x2="61%" y2="99%">
                                                            <stop offset="5%" stop-color="#0086b3"></stop>
                                                            <stop offset="95%" stop-color="#2070ad"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <path d="M 0,500 C 0,500 0,166 0,166 C 105.72248803827753,194.5645933014354 211.44497607655506,223.1291866028708 320,207 C 428.55502392344494,190.8708133971292 539.9425837320574,130.04784688995218 616,128 C 692.0574162679426,125.95215311004782 732.7846889952152,182.67942583732057 827,184 C 921.2153110047848,185.32057416267943 1068.9186602870814,131.23444976076553 1180,119 C 1291.0813397129186,106.76555023923446 1365.5406698564593,136.38277511961724 1440,166 C 1440,166 1440,500 1440,500 Z" stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="0.53" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
                                                    <defs>
                                                        <linearGradient id="gradient" x1="39%" y1="1%" x2="61%" y2="99%">
                                                            <stop offset="5%" stop-color="#0099cc"></stop>
                                                            <stop offset="95%" stop-color="#32ded4"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <path d="M 0,500 C 0,500 0,333 0,333 C 105.66507177033492,319.4401913875598 211.33014354066984,305.8803827751196 306,303 C 400.66985645933016,300.1196172248804 484.3444976076555,307.91866028708137 591,305 C 697.6555023923445,302.08133971291863 827.2918660287081,288.444976076555 916,301 C 1004.7081339712919,313.555023923445 1052.4880382775118,352.3014354066986 1133,362 C 1213.5119617224882,371.6985645933014 1326.755980861244,352.3492822966507 1440,333 C 1440,333 1440,500 1440,500 Z" stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-1"></path>
                                                </svg>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <td><button class='btn btn-warning'>Belum Verifikasi</button></td>
                        </tr>
                        <?php } ?> 
                    </tr>
                </table>
            </div>
        </div>
        
        <!-- Footer Hasil -->
        <div class="footer bg-dark text-center text-light mt-5 p-3">
            <i class="fa fa-copyright" aria-hidden="true"> 
                Copyright @ raihanalf
            </i>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>