<?php
    session_start();
    if(!isset($_SESSION["id"])){
        echo '<script>window.location="login.php"</script>';
    }
    include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby-Needs | Website Penyewaan Barang Bayi</title>
    <link rel="stylesheet" href="style/styleindex.css">
    <link rel="icon" href="resource/icon.png">

</head>
<body>
<?php include('header.php');?>
    <div class="gambar_sewa">
    <img src="resource/gambar_sewa.png" alt="" style="width: 500px; margin-left: auto; margin-right: auto; display: block">
    </div>
    <h1 style="padding-top: 100px; text-align: center; padding-bottom: 60px;">Kategori Barang</h1>
    <div class="kategori">
        <div class="gambar1">
            <a href="<?php echo "kategori.php?kategori=stroller" ?>">
            <img src="resource/stroller.png" alt="" style="width: 190px;">
            <h2 style="padding-top: 20px;">Stroller</h2>
            </a>
        </div>
        <div class="gambar2">
            <a href="<?php echo "kategori.php?kategori=babybox" ?>">
            <img src="resource/baby box.png" alt="" style="width: 190px;">
            <h2 style="padding-top: 20px;">Baby Box</h2>
            </a>
        </div>
        <div class="gambar3">
            <a href="<?php echo "kategori.php?kategori=babybathtub" ?>">
            <img src="resource/baby bathtub.png" alt="" style="width: 190px;">
            <h2 style="padding-top: 20px;">Baby Bathtub</h2>
            </a>
        </div>
        <div class="gambar4">
            <a href="<?php echo "kategori.php?kategori=toys" ?>">
            <img src="resource/toys.png" alt="" style="width: 190px;">
            <h2 style="padding-top: 20px;">Toys</h2>
            </a>
        </div>
        <div class="gambar5">
            <a href="<?php echo "kategori.php?kategori=carseat" ?>">
            <img src="resource/car seat.png" alt="" style="width: 190px;">
            <h2 style="padding-top: 20px;">Car Seat</h2>
            </a>
        </div>
        <div class="gambar6">
            <a href="<?php echo "kategori.php?kategori=hipseat" ?>">
            <img src="resource/hip seat.png" alt="" style="width: 190px;">
            <h2 style="padding-top: 20px;">Hip Seat</h2>
            </a>
        </div>
    </div>
    <h1 class="title">Frequently Asked Question (FAQ)</h1>
    <div class="questions-container">
        <div class="question">
            <button>
                <span>Apa itu Baby-Needs?</span>
            </button>
            <p>Baby-Needs merupakan website penyewaan barang bayi bagi ibu rumah tangga yang tidak ingin membeli barang kebutuhan bayi. Baby-Needs hadir karena kebutuhan bayi yang dipakai hanya tempo waktu tertentu saja, oleh karena itu daripada membeli barang kebutuhan bayi untuk waktu tertentu, mending sewa aja.</p>
        </div>

        <div class="question">
            <button>
                <span>Apa syarat untuk menyewa Baby-Needs?</span>
            </button>
            <p>Syaratnya cukup mudah, yaitu hanya membutuhkan 1 KTP saja untuk dapat menyewa barang kebutuhan bayi di Baby-Needs.</p>
        </div>

        <div class="question">
            <button>
                <span>Wilayah pengiriman mencakup daerah mana saja?</span>
            </button>
            <p>Untuk saat ini, Baby-Needs hanya dapat melayani di wilayah Surabaya dan Sidoarjo, untuk kedepannya Baby-Needs akan dapat beroperasi di seluruh wilayah Indonesia.</p>
        </div>
    </div>
</section>
<br><br><br><br><br><br><br><br>
<script src="script.js"></script>
<section id="footer"></section>
<?php include('footer.php');?>
</body>
</html>