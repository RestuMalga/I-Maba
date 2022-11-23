<?php
    include 'aktivitas/conn.php';
    session_start();
?> 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Laman Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

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
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center" background="res/kampuss.jpg">

    
<main class="form-signin">
  <div class="form-control" style="width: 320px;">
  <form action="aktivitas/cek_signin.php" method="POST">
    <img class="mb-1" src="res/logo.png" alt="2" width="100" height="100">
    <h4 class="mb-3 fw-normal" style="font-family:Verdana, Geneva, Tahoma, sans-serif;" >Please Sign In</h4>
    
    <?php 
    if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "gagal"){
        echo "<script>alert('Login gagal! username dan password salah!'</script>";
      }else if($_GET['pesan'] == "logout"){
        echo "Anda telah berhasil logout";
      }else if($_GET['pesan'] == "belum_login"){
        echo "Anda harus login untuk mengakses halaman";
      }
    }
    ?>

    <div class="form-floating">
      <input type="username" class="form-control" id="floatingInput" placeholder="name" name="username">
      <label for="floatingInput" >Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>
    <!-- <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div> -->
    <input type="submit" class="w-100 btn btn-lg btn-primary" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" name="login" id="login" value="LOGIN">
    <!-- <a href ="home.php"  class="w-100 btn btn-lg btn-info" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" type="submit">SIGN IN</a> -->
  </form>
  </div>
</main>


    
  </body>
</html>