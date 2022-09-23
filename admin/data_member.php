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
    <title>Admin | Data Member</title>
    <link rel="stylesheet" href="style/styledata_member.css">
</head>

<body>
<?php include('header_adm.php');?>

    <div class="main_wrapper">
        <h1>Tabel Data Member</h1>

        <div class="table_wrapper">
            <table>
                <thead>
                    <th>id</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </thead>

                <tbody>
                    <?php
                        $query =  mysqli_query ($koneksi, "SELECT * FROM user");
                        while ($data = mysqli_fetch_array($query)){ ?>

                        <tr>
                        <td><?= $data['id']; ?></td>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['alamat']; ?></td>
                        <td><?= $data['nohp']; ?></td>
                        <td><?= $data['email']; ?></td>
                        <td><?= $data['password']; ?></td>
                        <td>
                            <a href="<?php echo "delete_member.php?id=".$data['id']; ?>"><button>Hapus data</button></a>
                        </td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>

           
        </div>
    </div>
</body>
</html>