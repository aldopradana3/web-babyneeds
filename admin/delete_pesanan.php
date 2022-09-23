<?php 

  include ('koneksi.php'); 

  $status = '';
  $result = '';
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['id'])) {
          $id_upd = $_GET['id'];
          $query = "DELETE FROM transaksi WHERE id = '$id_upd'"; 

          $result = mysqli_query($koneksi,$query);

          if ($result) {
            $status = 'ok';
          }
          else{
            $status = 'err';
          }
          if ($status=='ok') {
            header('location: data_pesanan.php');
          }
      }  
  }
?>