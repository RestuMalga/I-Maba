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
    <title>Edit Presensi</title>

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

<div class="container">
    <div class="row justify-content-md-center">  
      <h1 style="font-size: xx-large;"> </h1>
    </div>
    <h2 style="margin-top: 25px;" class="pb-2 border-bottom"><center>EDIT PRESENSI PKKMB</center></h2>
    <br>
	<a href="../lainnya/rekapkehadiran.php"><-Batal</a>
    <br/>

    <?php 
        $no = 1;
        $IdPresensi = $_GET['IdPresensi'];
        $data = mysqli_query($conn,"select * from absenpkkmb INNER JOIN pkkmb ON absenpkkmb.IdKegiatan = pkkmb.IdKegiatan where absenpkkmb.IdPresensi='$IdPresensi'");
        while($d = mysqli_fetch_array($data)){
    ?>

    <form class="row g-3" method="post" action="editpresensi_act.php">
        <div class="col-md-6">
          <input type="hidden" name="IdPresensi" value="<?php echo $d['IdPresensi']; ?>">
          <label for="name" class="form-label">Nama</label>
          <input type="name" class="form-control" id="name" name="Nama" value="<?php echo $d['Nama']; ?>">
        </div>
        <div class="col-md-6">
          <label for="nim" class="form-label">NIM</label>
          <input type="name" class="form-control" id="nim" name="NIM" value="<?php echo $d['NIM']; ?>">
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Nama Kegiatan</label>
          <select id="inputState" class="form-select" name="NamaKegiatan">
          <option disabled selected><?php echo $d['NamaKegiatan']; ?></option>
            <?php 
            include 'conn.php';
            $sql=mysqli_query($conn, "SELECT * FROM pkkmb");
            while ($data2=mysqli_fetch_array($sql)) {
            ?>
            <option value="<?=$data2['IdKegiatan']?>"><?=$data2['NamaKegiatan']?></option> 
            <?php
            }
            ?>
          </select>
        </div>
        <div class="col-12">
          <label for="materi" class="form-label">Rangkuman Materi Kegiatan</label>
          <textarea type="text" class="form-control" id="materi" rows="3" name="RangkumanMateri"><?php echo $d['RangkumanMateri']; ?></textarea>
        </div>
        <div class="col-md-3">
          <label for="Tanggal" class="form-label">Tanggal Kegiatan</label>
          <label for="Tanggal" class="form-label"><i>*ex : 02 Juli 2022</i></label>
          <input type="text" class="form-control" id="Tanggal" name="TanggalKegiatan" value="<?php echo $d['TanggalKegiatan']; ?>">
        </div>
        <div class="d-grid gap-2 col-6 d-md-flex justify-content-md-center mx-auto" style="margin-top: 20px;">
        </div>
        <input type="submit" class="btn btn-success" value="Simpan">
    </form>
    <hr class="featurette-divider">
</div>
<?php 
	}
?>

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2021–2022 Politeknik Negeri Bengkalis, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
    <script src="../js/bootstrap.bundle.min.js"></script>
  </body>
</html>