<?php 
  include '../aktivitas/conn.php';
  session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Presensi PKKMB</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../css/home.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
    <img class="bi me-2" width="40" height="40" src="../res/logo.png">
      <a class="navbar-brand" href="../lainnya/home.php">SI MABA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDarkDropdown ">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              PKKMB
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="jadwalpkkmb.php">Jadwal PKKMB</a></li>
              <li><a class="dropdown-item" href="presensipkkmb.php">Presensi PKKMB</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              ORMAWA
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="../organisasi/mpm.php">Majelis Permusyawaratan Mahasiswa</a></li>
              <li><a class="dropdown-item" href="../organisasi/bem.php">Badan Eksekutif Mahasiswa</a></li>
              <li><a class="dropdown-item" href="../organisasi/hmj.php">Himpunan Mahasiswa Jurusan</a></li>
              <li><a class="dropdown-item" href="../organisasi/ukm.php">Unit Kegiatan Mahasiswa</a></li>
              <li><a class="dropdown-item" href="../organisasi/formadiksi.php">Formadiksi</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../lainnya/kelas.php">KELAS</a>
          </li>
        </ul>
        <a href="../CU/user.php" type="button" class="btn btn-outline-light me-2">USER</a>
        <a href="../aktivitas/logout.php" class="btn btn-danger">Log Out</a>
      </div>
    </div>
  </nav>
</header>

<main>

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row justify-content-md-center"> 
      <h1 style="font-size: xx-large;"> </h1>
      <br>
      <div class="text-center" >
        <h2><b>Presensi PKKMB Politeknik Negeri Bengkalis</b></h2>
      </div>
    </div>
    <h1 style="font-size: xx-large;"> </h1>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Kegiatan</th>
            <th scope="col">Tanggal Pelaksanaan</th>
            <th scope="col">Presensi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Kegiatan Orientasi Kampus</td>
            <td>31 Agustus 2022</td>
            <td ><a href="kehadiranpkkmb.php" class="btn btn-warning">Isi Kehadiran</a></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Latihan Dasar Kedisiplinan, Kepemimpinan dan Bela Negara(LDKKBN)</td>
            <td>01 September 2022</td>
            <td ><a href="kehadiranpkkmb.php" class="btn btn-warning">Isi Kehadiran</a></td>
          </tr>
          <tr>
            <td>3</td>
            <td>Bimbingan Keagamaan</td>
            <td>02 September 2022</td>
            <td ><a href="kehadiranpkkmb.php" class="btn btn-warning">Isi Kehadiran</a></td>
          </tr>
          <tr>
            <td>4</td>
            <td>Training Motivasi</td>
            <td>03 September 2022</td>
            <td ><a href="kehadiranpkkmb.php" class="btn btn-warning">Isi Kehadiran</a></td>
          </tr>
          <tr>
            <td>5</td>
            <td>Pengenalan Jurusan dan ORMAWA</td>
            <td>04 September 2022</td>
            <td ><a href="kehadiranpkkmb.php" class="btn btn-warning">Isi Kehadiran</a></td>
          </tr>
        </tbody>
      </table>
      <td><a href="../lainnya/rekapkehadiran.php" class="btn btn-outline-warning">Lihat Rekap Kehadiran</a></td>
    </div>

  <hr class="featurette-divider">
  </div><!-- /.container -->

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2021???2022 Politeknik Negeri Bengkalis, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


    <script src="../js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
