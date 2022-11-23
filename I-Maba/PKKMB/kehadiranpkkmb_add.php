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


$sql = "INSERT INTO absenpkkmb (IdPresensi, NIM, Nama, IdKegiatan, RangkumanMateri, TanggalKegiatan) VALUES ('?', '$NIM', '$Nama', '$NamaKegiatan', '$RangkumanMateri', '$TanggalKegiatan')";
if (mysqli_query($conn, $sql)){
    echo "New record created succesfully";
} else {
    echo "Error:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
 
// // menginput data ke database
// mysqli_query($conn,"insert into mahasiswa values('$Nim','$Nama','$Prodi','$Jurusan')");
 
// mengalihkan halaman kembali ke home.php
header("location:../lainnya/rekapkehadiran.php");
 
?>