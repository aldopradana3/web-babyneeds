<?php
    session_start();
    if(!isset($_SESSION["id"])){
        echo '<script>window.location="login.php"</script>';
    }
    include 'koneksi.php';

    $status = '';
    $result = '';
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['id'])) {
          $id_upd = $_GET['id'];
          $query = "SELECT * FROM transaksi WHERE id = '$id_upd'";
          $result = mysqli_query($koneksi,$query);
      }
  }
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $status = $_POST['status'];
    $tgl_diambil = $_POST['tgl_diambil'];
    $tgl_dikembalikan = $_POST['tgl_dikembalikan'];
  $sql = "UPDATE transaksi SET status='$status', tgl_diambil='$tgl_diambil', tgl_dikembalikan='$tgl_dikembalikan' WHERE id='$id'";

  $result = mysqli_query($koneksi,$sql);
  if ($result) {
    $status = 'ok';
  }
  else{
    $status = 'err';
  }

  header('Location: data_pesanan.php?status='.$status);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Update Pesanan</title>
    <link rel="stylesheet" href="style/styleupdate_pesanan.css">
</head>
<body>
<?php include ('header_adm.php'); ?>

<div class="main_wrapper">
    <div class="form_wrapper">
        <h1>Update Pesanan</h1>

        <form action="update_pesanan.php" method="POST">
                <?php while($data = mysqli_fetch_array($result)): ?>
            <input type="hidden" value="<?php echo $data['id']; ?>" name="id"/>
            <h2>Status</h2>
            <input type="text" class="form-control" placeholder="Status Penyewaan" name="status" value="<?php echo $data['status'];  ?>" required="required"><br><br>
            <h2>Durasi</h2><br>
            <h3><?php echo $data['tipe'];  ?></h3><br>
            <h2>Tanggal Diambil</h2>
            <input type="date" class="form-control" placeholder="Tanggal" name="tgl_diambil" value="<?php echo $data['tgl_diambil'];  ?>" required="required"><br><br>
            <h2>Tanggal Dikembalikan</h2>
            <input type="date" class="form-control" placeholder="Tanggal" name="tgl_dikembalikan" value="<?php echo $data['tgl_dikembalikan'];  ?>" required="required"><br><br>
            <?php endwhile; ?><br>
            <button type="submit" class="btn btn-primary">Simpan</button><br><br><br>
            </form>

    </div>
</div>
</body>
</html>