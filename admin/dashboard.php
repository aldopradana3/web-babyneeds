<?php
    session_start();
    if(!isset($_SESSION["id"])){
        echo '<script>window.location="login.php"</script>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <?php include ('header_adm.php'); ?>

    <h1 class="text-center mt-4">Dashboard</h1>

    <div id="main-content" class="container allContent-section py-4">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="mt-4 mb-2 mx-auto">
                        <a href="data_member.php"> <!-- link member page -->
                            <img src="../resource/img-member.png" style="width: 160px; height: auto" alt="">
                    </div>
                            <h3 class="text-center mb-4" style="color:black;">Data Member</h3>
                        </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="mt-4 mb-2 mx-auto">
                        <a href="data_admin.php"> <!-- link admin page -->
                            <img src="../resource/img-admin.png" style="width: 160px; height: auto" alt="">
                    </div>
                            <h3 class="text-center mb-4" style="color:black;">Data Admin</h3>
                        </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="mt-4 mb-2 mx-auto">
                        <a href="data_produk.php"> <!-- link produk page -->
                            <img src="../resource/img-produk.png" style="width: 160px; height: auto" alt="">
                    </div>
                            <h3 class="text-center mb-4" style="color:black;">Data Produk</h3>
                        </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="mt-4 mb-2 mx-auto">
                        <a href="data_pesanan.php"> <!-- link pesanan page -->
                            <img src="../resource/img-pesanan.png" style="width: 160px; height: auto" alt="">
                    </div>
                            <h3 class="text-center mb-4" style="color:black;">Data Pesanan</h3>
                        </a>
                </div>
            </div>
        </div>
        
    </div>
    
</body>
</html>