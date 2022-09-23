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
    <title>Admin | Data Produk</title>
    <link rel="stylesheet" href="style/styledata_produk.css">
</head>

<body>
<?php include('header_adm.php');?>

    <div class="main_wrapper">
    <?php 
            if (@$_GET['status']!==NULL) {
              $status = $_GET['status'];
              if ($status=='ok') {
                echo 'Update Produk Sukses';
              }
              elseif($status=='err'){
                echo 'Update Produk Gagal';
              }

            }
    ?>
        <h1>Tabel Data Produk</h1>
        <div class="table_wrapper">
            <table>
                <thead>
                    <th>ID</th>
                    <th>Kategori</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Harga</th>
                    <th>Foto</th>
                    <th>Stok</th>
                    <th>Tgl Upload</th>
                    <th>Deskripsi1</th>
                    <th>Deskripsi2</th>
                    <th>Deskripsi3</th>
                    <th>Deskripsi4</th>
                    <th>Aksi</th>
                </thead>

                <tbody>
                <?php
                        $query =  mysqli_query ($koneksi, "SELECT * FROM produk");
                        while ($data = mysqli_fetch_array($query)){ ?>

                        <tr>
                        <td><?= $data['id_produk']; ?></td>
                        <td><?= $data['kategori']; ?></td>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['umur']; ?></td>
                        <td><?= $data['harga']; ?></td>
                        <td><img src="produk/<?php echo $data['foto']; ?>" style="width: 200px;"></td>
                        <td><?= $data['stok']; ?></td>
                        <td><?= $data['tanggal_upload']; ?></td>
                        <td><?= $data['deskripsi1']; ?></td>
                        <td><?= $data['deskripsi2']; ?></td>
                        <td><?= $data['deskripsi3']; ?></td>
                        <td><?= $data['deskripsi4']; ?></td>
                        <td>
                            <a href="<?php echo "update_produk.php?id_produk=".$data['id_produk']; ?>"><button>Update data</button></a>
                            <a href="<?php echo "delete_produk.php?id_produk=".$data['id_produk']; ?>"><button>Hapus data</button></a>
                        </td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>

            <button><a href="upload_produk.php">Tambah Data +</a></button>
        </div>

    </div>

</body>
</html>