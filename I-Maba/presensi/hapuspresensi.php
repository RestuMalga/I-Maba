<?php
    include '../aktivitas/conn.php';

    $IdPresensi = $_GET['IdPresensi'];

    mysqli_query($conn, "delete from absenpkkmb where IdPresensi='$IdPresensi'");
    header("location:../lainnya/rekapkehadiran.php");
?>