<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		die("Anda Belum Login");
	}
  if($_SESSION['level'] != "Admin"){
    die("Anda Bukan Admin");
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
      <a class="navbar-brand" href="home.php">SI MABA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDarkDropdown ">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" data-bs-display="dinamic" aria-expanded="false">
              PKKMB
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="../pkkmb/jadwalpkkmb.php">Jadwal PKKMB</a></li>
              <li><a class="dropdown-item" href="../pkkmb/presensipkkmb.php">Presensi PKKMB</a></li>
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
            <a class="nav-link" href="kelas.php">KELAS</a>
          </li>
        </ul>
          <a href="../CU/user.php" type="button" class="btn btn-outline-light me-2">USER</a>
          <a href="../aktivitas/logout.php" class="btn btn-danger">Log Out</a>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="../res/kampus1.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="../res/kampus2.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="../res/kampus.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
    <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle" width="100" height="100" src="../res/kampus.jpg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text>

          <h2>PKKMB</h2>
          <p>Mahasiswa dapat melihat jadwal Pengenalan Kehidupan Kampus bagi Mahasiswa Baru(PKKMB)</p>
          <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              View
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="../pkkmb/jadwalpkkmb.php">Jadwal PKKMB</a></li>
              <li><a class="dropdown-item" href="../pkkmb/presensipkkmb.php">Presensi PKKMB</a></li>
            </ul>
          </div>
          <!-- <p><a class="btn btn-secondary" href="jadwalpkkmb.php">View</a></p> -->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle" width="100" height="100" src="../res/mpm.jpg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text>

          <h2>ORMAWA</h2>
          <p>Mahasiswa dapat melihat informasi Himpunan Mahasiswa Jurusan(HMJ) dan Unit Kegiatan Mahasiswa(UKM)</p>
          <p><a class="btn btn-secondary" href="../organisasi/ormawa.php">View</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle" width="100" height="100" src="../res/kelas.jpg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text>

          <h2>Kelas</h2>
          <p>Mahasiswa dapat melihat informasi di kelas mana ia ditempatkan disertai keterangan Jurusan/Prodi</p>
          <p><a class="btn btn-secondary" href="kelas.php">View</a></p>
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