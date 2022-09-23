<?php 
include 'koneksi.php';
$status = '';
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $nama = $_POST['nama'];
      $alamat = $_POST['alamat'];
      $nohp = $_POST['nohp'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $query = "INSERT INTO user (id, nama, alamat, nohp, email, password) VALUES('', '$nama','$alamat','$nohp', '$email', '$password')"; 

      $result = mysqli_query($koneksi,$query);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
  }
  if ($status=='ok') {
    header('location: login.php');
  }
  elseif($status=='err'){
    header('location: form_register.php');
  }
?>
