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
    <title>Admin | Upload Admin</title>
    <link rel="stylesheet" href="style/styleupload_admin.css">
</head>
<body>
<?php include ('header_adm.php'); ?>

    <div class="main_wrapper">
        <div class="form_wrapper"><br><br>
            <h1>Upload Data Admin</h1>
            <a href="data_admin.php"><button>Kembali</button></a>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="username" placeholder="Masukkan Username Admin"><br><br>
                <input type="text" name="password" placeholder="Masukkan Password Admin"><br><br>
                <input id="submit" type="submit" name="simpan" value="Simpan"><br>
            </form>
    <?php
    if(isset($_POST['simpan'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $insert = mysqli_query($koneksi, "INSERT INTO admin  VALUES (NULL,'".$username."','".$password."')");
        if($insert){
            echo 'Data Berhasil Disimpan';
        }else{
            echo 'Gagal disimpan';
        }
    }
    ?><br><br><br>
        </div>
    </div>
</body>
</html>