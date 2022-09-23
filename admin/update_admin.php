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
          $query = "SELECT * FROM admin WHERE id = '$id_upd'";
          $result = mysqli_query($koneksi,$query);
      }
  }


  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
      $sql = "UPDATE admin SET username='$username', password='$password' WHERE id='$id'";

      $result = mysqli_query($koneksi,$sql);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }

      header('Location: data_admin.php?status='.$status);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Update Admin</title>
    <link rel="stylesheet" href="style/styleupload_admin.css">
</head>
<body>
<?php include ('header_adm.php'); ?>

    <div class="main_wrapper">
        <div class="form_wrapper">
            <h1>Update Data Admin</h1>
            <form action="update_admin.php" method="POST">
                <?php while($data = mysqli_fetch_array($result)): ?>
             <input type="hidden" value="<?php echo $data['id']; ?>" name="id"/>
            <h2>Username</h2>
            <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $data['username'];  ?>" required="required"><br><br>
            <h2>Password</h2>
            <input type="text" class="form-control" placeholder="Password" name="password" value="<?php echo $data['password'];  ?>" required="required"><br><br>
            <?php endwhile; ?><br>
            <button type="submit" class="btn btn-primary">Simpan</button><br><br><br>
            </form>
        </div>
    </div>
</body>
</html>