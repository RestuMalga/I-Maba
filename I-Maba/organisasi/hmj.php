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
    <title>Sistem Informasi Mahasiswa</title>

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
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              PKKMB
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="../pkkmb/jadwalpkkmb.php">Jadwal PKKMB</a></li>
              <li><a class="dropdown-item" href="../pkkmb/presensipkkmb.php">Presensi PKKMB</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              ORMAWA
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="mpm.php">Majelis Permusyawaratan Mahasiswa</a></li>
              <li><a class="dropdown-item" href="bem.php">Badan Eksekutif Mahasiswa</a></li>
              <li><a class="dropdown-item" href="hmj.php">Himpunan Mahasiswa Jurusan</a></li>
              <li><a class="dropdown-item" href="ukm.php">Unit Kegiatan Mahasiswa</a></li>
              <li><a class="dropdown-item" href="formadiksi.php">Formadiksi</a></li>
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

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing py-5">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4 bg-primary p-2 text-dark bg-opacity-10 border">
          <img class="bd-placeholder-img rounded-circle" width="100" height="100" src="../res/mpm.jpg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text>

          <h2>HMM</h2>
          <p>Himpunan Mahasiswa Teknik Mesin</p>
          <p><a class="btn btn-primary disabled" href="#">View</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 bg-primary p-2 text-dark bg-opacity-10 border">
          <img class="bd-placeholder-img rounded-circle" width="100" height="100" src="../res/bem.jpg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text>

          <h2>HIMKA</h2>
          <p>Himpunan Mahasiswa Teknik Perkapalan</p>
          <p><a class="btn btn-primary disabled" href="#">View</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 bg-primary p-2 text-dark bg-opacity-10 border">
          <img class="bd-placeholder-img rounded-circle" width="100" height="100" src="../res/hmj.jpg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text>

          <h2>HIMATRO</h2>
          <p>Himpunan Mahasiswa Teknik Elektro</p>
          <p><a class="btn btn-primary disabled" href="#">View</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    <div class="row py-2">
        <div class="col-lg-4 bg-primary p-2 text-dark bg-opacity-10 border">
          <img class="bd-placeholder-img rounded-circle" width="100" height="100" src="../res/ukm.jpg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text>

          <h2>HIMANIA</h2>
          <p>Himpunan Mahasiswa Adm Niaga</p>
          <p><a class="btn btn-primary disabled" href="#">View</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 bg-primary p-2 text-dark bg-opacity-10 border">
          <img class="bd-placeholder-img rounded-circle" width="100" height="100" src="../res/formadiksi.jpg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text>

          <h2>LEDSA</h2>
          <p>Language Department Student Association</p>
          <p><a class="btn btn-primary disabled" href="#">View</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 bg-primary p-2 text-dark bg-opacity-10 border">
          <img class="bd-placeholder-img rounded-circle" width="100" height="100" src="../res/formadiksi.jpg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text>

          <h2>HMTI</h2>
          <p>Himpunan Mahasiswa Teknik Informatika</p>
          <p><a class="btn btn-primary disabled" href="#">View</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      <div class="row py-2">
        <div class="col-lg-4 bg-primary p-2 text-dark bg-opacity-10 border">
          <img class="bd-placeholder-img rounded-circle" width="100" height="100" src="../res/ukm.jpg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text>

          <h2>HMJ Maritim</h2>
          <p>Himpunan Mahasiswa Jurusan Maritim</p>
          <p><a class="btn btn-primary disabled" href="#">View</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 bg-primary p-2 text-dark bg-opacity-10 border">
          <img class="bd-placeholder-img rounded-circle" width="100" height="100" src="../res/formadiksi.jpg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text>

          <h2>HMTS</h2>
          <p>Himpunan Mahasiswa Teknik Sipil</p>
          <p><a class="btn btn-primary disabled" href="#">View</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

    <hr class="featurette-divider">

  </div><!-- /.container -->

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2021–2022 Politeknik Negeri Bengkalis, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


    <script src="../js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>