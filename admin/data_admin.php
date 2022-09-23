<?php
    session_start();
    if(!isset($_SESSION["id"])){
        echo '<script>window.location="login.php"</script>';
    }
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Data Admin</title>
    <link rel="stylesheet" href="style/styledata_admin.css">
</head>

<body>
<?php include('header_adm.php');?>

    <div class="main_wrapper">
        <h1>Tabel Data Admin</h1>
        <div class="table_wrapper">
        <?php 
            if (@$_GET['status']!==NULL) {
              $status = $_GET['status'];
              if ($status=='ok') {
                echo 'Update Admin Sukses';
              }
              elseif($status=='err'){
                echo 'Update Admin Gagal';
              }

            }
    ?>
            <table>
                <thead>
                    <th>id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </thead>

                <tbody>
                <?php
                        $query =  mysqli_query ($koneksi, "SELECT * FROM admin");
                        while ($data = mysqli_fetch_array($query)){ ?>

                        <tr>
                        <td><?= $data['id']; ?></td>
                        <td><?= $data['username']; ?></td>
                        <td><?= $data['password']; ?></td>
                        <td>
                            <a href="<?php echo "update_admin.php?id=".$data['id']; ?>"><button>Update data</button></a>
                            <a href="<?php echo "delete_admin.php?id=".$data['id']; ?>"><button>Hapus data</button></a>
                        </td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>

            <button><a href="upload_admin.php">Tambah Data +</a></button>
        </div>
    </div>
</body>
</html>