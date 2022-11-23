<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'conn.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"select * from login where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_fetch_array($data);
$_SESSION['username'] = $data['username'];
$_SESSION['nama'] = $data['data'];
$_SESSION['level'] = $data['level'];

// var_dump($cek); 

if($cek['level']=="Admin"){
	header("location:../lainnya/home.php");
} else if ($cek['level'] == "Mahasiswa") {
	header("location:../lainnya/homeUser.php");
} else{
	header("location:../index.php?pesan=gagal");
}
?>