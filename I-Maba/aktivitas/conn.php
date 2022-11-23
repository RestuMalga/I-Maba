<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "si_maba";

    $conn = mysqli_connect($server, $user, $pass, $database);

    if(!$conn){
        die("<script>alert('Gagal tersambung ke database !')</script>");
    }
?>