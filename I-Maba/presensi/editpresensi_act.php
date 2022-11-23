<?php 
// koneksi database
include '../aktivitas/conn.php';
 
// menangkap data yang di kirim dari form
$IdPresensi = $_POST['IdPresensi'];
$NIM = $_POST['NIM'];
$Nama = $_POST['Nama'];
$NamaKegiatan = $_POST['NamaKegiatan'];
$RangkumanMateri = $_POST['RangkumanMateri'];
$TanggalKegiatan = $_POST['TanggalKegiatan'];
 
// update data ke database
mysqli_query($conn,"UPDATE absenpkkmb SET NIM='$NIM', Nama='$Nama', IdKegiatan='$NamaKegiatan', RangkumanMateri='$RangkumanMateri', TanggalKegiatan='$TanggalKegiatan' where IdPresensi='$IdPresensi'");
 
// mengalihkan halaman kembali ke index.php
header("location:../lainnya/rekapkehadiran.php");
 
?>