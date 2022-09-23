<?php
 session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="icon" href="resource/icon.png">
    <title>Masuk | Baby-Needs</title>
    <style>
a:link, a:visited{
    text-decoration: none;
    color: black;
    border-style: none;
}
    </style>
</head>

<body style="width: 100%">
    <div class="container-fluid py-1" style="background-color: #f6c1bc;">
        <div class="container">
            <div class="row">
                <div class="col-xs-11 text-center">
                    <img src="resource/logo.png" alt="" style="width: 250px">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 style="padding-bottom:20px;">Masuk</h2>
                </div>
                <form method="POST">
                <div class="col-lg-12 text-center ">
                    <input type="text" name="email" class="form_user" placeholder="E-mail" >
                </div><br>
                <div class="col-lg-12 text-center ">
                     <input type="password" class="form_user" name="password" placeholder="Password" id="myPassword" required="required"><br/></div><br>
                <div class="col-lg-12 text-center ">
                    <input type="submit" class="tombol_login" value="LOGIN" name="proseslog">
                    <br>
                    <p style="padding-top:40px;">Belum Punya Akun?</p>
                    <button style="text-decoration: none;"><a href="form_register.php">DAFTAR</a></button>
                    <br/></div>
                </form>
                <?php
                if(isset($_POST['proseslog'])){
                    $sql = mysqli_query($koneksi, "select * from user where email = '$_POST[email]' and password = '$_POST[password]'");

                    $cek = mysqli_num_rows($sql);
                    if ($cek > 0) {
                        $data = mysqli_fetch_assoc($sql);
                            $_SESSION["email"] = $_POST['email'];
                            $_SESSION["id"] = $data["id"];
                            $_SESSION["nama"] = $data["nama"];
                        echo "<meta http-equiv=refresh content=0;URL='index.php'>";
                    }else{
                        echo "<p>Login Gagal!</p>";
                        echo "<meta http-equiv=refresh content=2;URL='login.php'>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="container-fluid py-5" style="background-color: #f6c1bc;">
            </div>
</body>

</html>