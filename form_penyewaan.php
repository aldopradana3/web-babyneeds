<?php
    session_start();
    if(!isset($_SESSION["id"])){
        echo '<script>window.location="login.php"</script>';
    }
    include ('koneksi.php');
    if(isset($_POST["id_produk"])){
        $id_produk_brg = $_POST['id_produk'];
        $query = "SELECT * FROM produk WHERE id_produk = '$id_produk_brg'";
        $result = mysqli_query($koneksi,$query);
    }
    if(isset($_POST['submit'])){
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        $ktp = basename($_FILES["fileToUpload"]["name"]);

        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $nomor = $_POST['nomor'];
        $email = $_POST['email'];
        $note = $_POST['note'];
        $metode = $_POST['metode'];
        $id_user = $_POST['id_user'];
        $tipe = $_POST['tipe'];
        $id_produk = $_POST['id_produk'];
        $kelurahan = $_POST['kelurahan'];
        $kecamatan = $_POST['kecamatan'];
        $kota = $_POST['kota'];
        $kodepos = $_POST['kodepos'];
        
        $amount = (int)substr($tipe, 9);
        $tipe = substr($tipe,0,8);
 
        $alamat .= ", ".$kelurahan;
        $alamat .= ", ".$kecamatan;
        $alamat .= ", ".$kota;
        $alamat .= ", ".$kodepos;

        $query = "INSERT INTO transaksi (id, id_user, id_produk, tipe, amount, metode, nama, alamat, nomor, email, note, ktp, status) VALUES('', '$id_user','$id_produk','$tipe', '$amount', '$metode', '$nama', '$alamat', '$nomor', '$email', '$note', '$ktp', 'Menunggu Pembayaran')";
        $result = mysqli_query($koneksi,$query);
        if($result){
            echo "<script>alert('Pesanan sukses!'); window.location.href='pesanan.php'</script>";
        }
        else{
            echo "<script>alert('Pesanan gagal!'); window.location.href='pesanan.php'</script>";
        }
    }

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/styleform.css">
        <title>Document</title>

    </head>
    <body>
    <?php include('header.php');?>
    <div class="main_wrapper">
    <center>
        <div style="padding-top: 50px;">
        <h1 style="font-size: 30px; padding-bottom: 20px">Barang yang disewa :</h1>
    <?php while($data = mysqli_fetch_array($result)): ?>
    <h1 id="product_name" style="font-size: 25px; padding-bottom: 20px"><?php echo $data['nama']."<br>"; ?></h1>
    <img src="admin/produk/<?php echo $data['foto']; ?>" alt="Photo" id="product_photo" style="width: 250px; padding-bottom: 20px; border-radius: 20px;">
    <?php endwhile; ?>
    <h1 style="font-size: 30px; padding-bottom: 20px">Durasi :</h1>
    <h1 id="product_name" style="font-size: 25px; padding-bottom: 20px"><?php echo $_POST["tipe"]."<br>"; ?></h1>
    </div>
    </center>
        <div class="form_wrapper">
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="nama" placeholder="Nama" required>
        <select name="kota" id="kota" required>
            <option value="Surabaya">Surabaya</option>
            <option value="Sidoarjo">Sidoarjo</option>
        </select>
        <input type="text" name="alamat" placeholder="Alamat" required>
        <input type="text" name="kelurahan" placeholder="Kelurahan" required>
        <input type="text" name="kecamatan" placeholder="Kecamatan" required>
        <input type="text" name="kodepos" placeholder="kodepos" required>
        <input type="text" name="nomor" placeholder="No HP" required>
        <input type="text" name="email" placeholder="Email" required>
        <input type="text" name="note" placeholder="note" required>
        <select name="metode" id="metode" required>
            <option value="Bayar di Kantor">Bayar di Kantor</option>
            <option value="Bank Transfer">Bank Transfer</option>
        </select>
        <input type="hidden" value="<?= $_SESSION["id"] ?>" name="id_user"/>
        <input type="hidden" value="<?= $_POST["tipe"] ?>" name="tipe"/>
        <input type="hidden" value="<?= $_POST["id_produk"] ?>" name="id_produk"/>
        <h3 style="margin-top:20px;">Foto KTP :</h3>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" name="submit" value="submit">
    </form><br><br>
    <p>Transfer Bank</p>
    <p>Bank BRI : 088-8-8888-8888</p>
    <p>a.n. Aldo</p>
    </div>
    <br><br><br><br>
    </div>
    <section id="footer">
    <?php include('footer.php');?>
    </section>
</body>
</html>