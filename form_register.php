<?php 
  include 'register.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="resource/icon.png">
  
  <title>Daftar | Baby-Needs</title>
  <style>
    body{
      font-family: Sans-serif;
    }

    .nav{
      display: flex;
      margin: auto;
      text-align: center;
      width: 100%;
      font-size: 20px
    }

    .nav ul{
      background: #f6c1bc;
      position: relative;
      width: 100%;
      text-align: center;
      list-style: none;
      padding: 0;
      margin: 0;

    }

    .nav li{
      display: inline-block;
    }

    .nav ul li:hover{
      background: black;
    }

    .nav ul li:hover a{
      color: white;
    }

    .nav ul li a{
      display: block;
      padding: 20px;
      text-decoration: none;
      color: black
    }

    table {
      color: black;
      border-collapse: collapse;
      width: 60%;
      border: 1px solid #363636;
      margin: auto;
    }

    table tbody {
      background-color: #F0FFF0;
    }

    table tbody td {
      padding: 8px 20px;
      text-align: center;
      border: 1px solid rgb(0, 0, 0);
    }

    thead {
      font-weight: 900;
      background-color: darkgreen;
      color: white;
    }
    
    .formUpdate{
      width: 60%;
      margin: auto;
    }

    form{
      margin: 0 auto; 
      width: 250px;
      text-align: center;
    }

    input{
      width: 100%;
    }

    .tengah{
      text-align: center;
      color: darkgreen;
      background: yellow;
      width: 40%;
      margin: 0 auto;
    }
  </style>
</head>
<body onload=display_ct();>
<div class="nav">
        <ul>
          <li><a href="login.php">Kembali ke Login</a></li>
        </ul>
    </div>
  <h1 style='text-align: center;'>Daftar Akun Baby-Needs</h1>

  <br>
  <div class="formUpdate">
  <h1 style='text-align: center'>Masukkan Data Anda</h1>
  <form action="register.php" method="POST">
    <h2>Nama</h2>
      <input type="text" class="form-control" placeholder="Nama" name="nama"  required="required" ><br><br>
    <h2>Alamat</h2>
      <input type="text" class="form-control" placeholder="Alamat" name="alamat"  required="required"><br><br>
    <h2>Nomor Handphone</h2>
      <input type="text" class="form-control" placeholder="No Handphone" name="nohp"  required="required"><br><br>
    <h2>E-Mail</h2>
      <input type="text" class="form-control" placeholder="E-Mail" name="email"  required="required"><br><br>
    <h2>Password</h2>
      <input type="password" class="form-control" placeholder="Password" name="password"  required="required"><br><br>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    </div>
  </body>
</html>