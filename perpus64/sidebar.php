<?php
include_once('../class/User.php');

$user = new User;
$data_user = $user->find(4);
?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  <style>
    body {
        background-color: wheat;
    }

    h1 { 
      text-align: center;
      font-family: sans;
      color: #663300;
    }

    
</style>
<h1>PERPUSTAKAAN SMKN 64 JAKARTA</h1>
<div class="sidebar">
      <?= $data_user["fullname"] ?>
      <ul>
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="peminjaman.php">Peminjaman Buku</a></li>
        <li><a href="pengembalian.php">Pengembalian Buku</a></li>
        <li><a href="pesan.php">Pesan</a></li>
        <li><a href="profil.php">Profil Saya</a></li>
        <li><a href="">Keluar </a></li>
      </ul>
    </div>
  </body>
  </html>


  