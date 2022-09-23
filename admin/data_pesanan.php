<?php
    session_start();
    if(!isset($_SESSION["id"])){
        echo '<script>window.location="login.php"</script>';
    }
?>

<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Data Pesanan</title>
    <link rel="stylesheet" href="style/styledata_update.css">
</head>

<body>
<?php include('header_adm.php');?>

    <div class="main_wrapper">
        <h1>Tabel Data Pesanan</h1>
        <?php 
            if (@$_GET['status']!==NULL) {
              $status = $_GET['status'];
              if ($status=='ok') {
                echo 'Update Penyewaan Sukses';
              }
              elseif($status=='err'){
                echo 'Update Penyewaan Gagal';
              }

            }
    ?>
        <div class="table_wrapper">
            <table>
                <thead>
                    <th>Id</th>
                    <th>Id User</th>
                    <th>Id Produk</th>
                    <th>Tipe Durasi</th>
                    <th>Harga</th>
                    <th>Metode</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor HP</th>
                    <th>Email</th>
                    <th>Note</th>
                    <th>KTP</th>
                    <th>Status</th>
                    <th>Tgl Diambil</th>
                    <th>Tgl Dikembalikan</th>
                    <th>Aksi</th>
                </thead>

                <tbody>
                <?php
                        $query =  mysqli_query ($koneksi, "SELECT * FROM transaksi");
                        while ($data = mysqli_fetch_array($query)){ ?>

                        <tr>
                        <td><?= $data['id']; ?></td>
                        <td><?= $data['id_user']; ?></td>
                        <td><?= $data['id_produk']; ?></td>
                        <td><?= $data['tipe']; ?></td>
                        <td><?= $data['amount']; ?></td>
                        <td><?= $data['metode']; ?></td>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['alamat']; ?></td>
                        <td><?= $data['nomor']; ?></td>
                        <td><?= $data['email']; ?></td>
                        <td><?= $data['note']; ?></td>
                        <td><img src="../uploads/<?php echo $data['ktp']; ?>" style="width: 200px;"></td>
                        <td><?= $data['status']; ?></td>
                        <td><?= $data['tgl_diambil']; ?></td>
                        <td><?= $data['tgl_dikembalikan']; ?></td>
                        <td>
                            <a href="<?php echo "update_pesanan.php?id=".$data['id']; ?>"><button>Update</button></a>
                            <a href="<?php echo "delete_pesanan.php?id=".$data['id']; ?>"><button>Hapus</button></a>
                        </td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</body>
</html>