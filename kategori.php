<?php
    session_start();
    if(!isset($_SESSION["id"])){
        echo '<script>window.location="login.php"</script>';
    }
    include('koneksi.php');
    $result = '';
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['kategori'])) {
            $kategori_brg = $_GET['kategori'];
            $query = "SELECT * FROM produk WHERE kategori = '$kategori_brg'";
            $result = mysqli_query($koneksi,$query);
        }
    }
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['kategori'], $_GET['umur'])) {
            $kategori_brg = $_GET['kategori'];
            $brg_umur = $_GET['umur'];
            $query = "SELECT * FROM produk WHERE kategori = '$kategori_brg' AND umur = '$brg_umur'";
            $result = mysqli_query($koneksi,$query);
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Stroller | Baby-Needs</title>
        <link rel="stylesheet" type="text/css" href="style/stylekategori.css">
        <link rel="icon" href="resource/icon.png">
        <style>
            .tbl-biru {
                text-decoration: none;
                background: #005a5a;
                border-radius: 6px;
                padding: 5px 60px 5px 60px;
                color: #ffffff;
                cursor: pointer;
                font-weight: bold;
                text-align: center;
                border: none;
            }

            .tbl-biru:hover {
                background: #2eb086;
                text-decoration: none;
            }
        </style>
    </head>
    <body>    
    <?php include('header.php');?>
    
    <div id="cdm" class="boxcdr">
        <section class="cdr">
            <br>Kategori Barang
        </section>
    </div><br>
    
    <div class="flexbox-container1">
        <section class="boxcont">
            <div class="filter">Filter</div>
            <div class="atas">
                Usia Anak
            </div>
            <div class="isi">
            <?php if( $_GET['kategori'] == 'stroller'){ ?>
            <a href="<?php echo "kategori.php?kategori=stroller&umur=0.5" ?>"><p style="color: black;">0 - 06 bulan</p></a>
            <a href="<?php echo "kategori.php?kategori=stroller&umur=1" ?>"><p style="color: black;">06 - 12 bulan</p></a>
            <a href="<?php echo "kategori.php?kategori=stroller&umur=1.5" ?>"><p style="color: black;">01 - 1,5 tahun</p></a>
            <a href="<?php echo "kategori.php?kategori=stroller&umur=2" ?>"><p style="color: black;">1,5 - 02 tahun</p></a>
            <a href="<?php echo "kategori.php?kategori=stroller&umur=3" ?>"><p style="color: black;">02 - 03 tahun</p></a>
            <a href="<?php echo "kategori.php?kategori=stroller&umur=4" ?>"><p style="color: black;">03 - 04 tahun</p></a>
            <?php } ?>
            </div>
            <div class="isi">
            <?php if( $_GET['kategori'] == 'babybox'){ ?>
            <a href="<?php echo "kategori.php?kategori=babybox&umur=0.5" ?>"><p style="color: black;">0 - 06 bulan</p></a>
            <a href="<?php echo "kategori.php?kategori=babybox&umur=1" ?>"><p style="color: black;">06 - 12 bulan</p></a>
            <a href="<?php echo "kategori.php?kategori=babybox&umur=1.5" ?>"><p style="color: black;">01 - 1,5 tahun</p></a>
            <a href="<?php echo "kategori.php?kategori=babybox&umur=2" ?>"><p style="color: black;">1,5 - 02 tahun</p></a>
            <a href="<?php echo "kategori.php?kategori=babybox&umur=3" ?>"><p style="color: black;">02 - 03 tahun</p></a>
            <a href="<?php echo "kategori.php?kategori=babybox&umur=4" ?>"><p style="color: black;">03 - 04 tahun</p></a>
            <?php } ?>
            </div>
            <div class="isi">
            <?php if( $_GET['kategori'] == 'babybathub'){ ?>
            <a href="<?php echo "kategori.php?kategori=babybathub&umur=0.5" ?>"><p style="color: black;">0 - 06 bulan</p></a>
            <a href="<?php echo "kategori.php?kategori=babybathub&umur=1" ?>"><p style="color: black;">06 - 12 bulan</p></a>
            <a href="<?php echo "kategori.php?kategori=babybathub&umur=1.5" ?>"><p style="color: black;">01 - 1,5 tahun</p></a>
            <a href="<?php echo "kategori.php?kategori=babybathub&umur=2" ?>"><p style="color: black;">1,5 - 02 tahun</p></a>
            <a href="<?php echo "kategori.php?kategori=babybathub&umur=3" ?>"><p style="color: black;">02 - 03 tahun</p></a>
            <a href="<?php echo "kategori.php?kategori=babybathub&umur=4" ?>"><p style="color: black;">03 - 04 tahun</p></a>
            <?php } ?>
            </div>
            <div class="isi">
            <?php if( $_GET['kategori'] == 'toys'){ ?>
            <a href="<?php echo "kategori.php?kategori=toys&umur=0.5" ?>"><p style="color: black;">0 - 06 bulan</p></a>
            <a href="<?php echo "kategori.php?kategori=toys&umur=1" ?>"><p style="color: black;">06 - 12 bulan</p></a>
            <a href="<?php echo "kategori.php?kategori=toys&umur=1.5" ?>"><p style="color: black;">01 - 1,5 tahun</p></a>
            <a href="<?php echo "kategori.php?kategori=toys&umur=2" ?>"><p style="color: black;">1,5 - 02 tahun</p></a>
            <a href="<?php echo "kategori.php?kategori=toys&umur=3" ?>"><p style="color: black;">02 - 03 tahun</p></a>
            <a href="<?php echo "kategori.php?kategori=toys&umur=4" ?>"><p style="color: black;">03 - 04 tahun</p></a>
            <?php } ?>
            </div>
            <div class="isi">
            <?php if( $_GET['kategori'] == 'carseat'){ ?>
            <a href="<?php echo "kategori.php?kategori=carseat&umur=0.5" ?>"><p style="color: black;">0 - 06 bulan</p></a>
            <a href="<?php echo "kategori.php?kategori=carseat&umur=1" ?>"><p style="color: black;">06 - 12 bulan</p></a>
            <a href="<?php echo "kategori.php?kategori=carseat&umur=1.5" ?>"><p style="color: black;">01 - 1,5 tahun</p></a>
            <a href="<?php echo "kategori.php?kategori=carseat&umur=2" ?>"><p style="color: black;">1,5 - 02 tahun</p></a>
            <a href="<?php echo "kategori.php?kategori=carseat&umur=3" ?>"><p style="color: black;">02 - 03 tahun</p></a>
            <a href="<?php echo "kategori.php?kategori=carseat&umur=4" ?>"><p style="color: black;">03 - 04 tahun</p></a>
            <?php } ?>
            </div>
            <div class="isi">
            <?php if( $_GET['kategori'] == 'hipseat'){ ?>
            <a href="<?php echo "kategori.php?kategori=hipseat&umur=0.5" ?>"><p style="color: black;">0 - 06 bulan</p></a>
            <a href="<?php echo "kategori.php?kategori=hipseat&umur=1" ?>"><p style="color: black;">06 - 12 bulan</p></a>
            <a href="<?php echo "kategori.php?kategori=hipseat&umur=1.5" ?>"><p style="color: black;">01 - 1,5 tahun</p></a>
            <a href="<?php echo "kategori.php?kategori=hipseat&umur=2" ?>"><p style="color: black;">1,5 - 02 tahun</p></a>
            <a href="<?php echo "kategori.php?kategori=hipseat&umur=3" ?>"><p style="color: black;">02 - 03 tahun</p></a>
            <a href="<?php echo "kategori.php?kategori=hipseat&umur=4" ?>"><p style="color: black;">03 - 04 tahun</p></a>
            <?php } ?>
            </div>
        </section>
        <div class="boxcont-trnsprn"></div>
    </div>
    <?php while($data = mysqli_fetch_array($result)){
            ?>
            <div class="flexbox1">
                <img src="admin/produk/<?php echo $data['foto']; ?>">
                <br><br>
                <div class="lain3">
                    <?php echo $data['nama']."<br><br>"; ?>
                </div> 
                <div class="lain3">
                    <?php echo $data['harga']; ?>/minggu
                </div>
                <br>
                <a href="<?php echo "detail_barang.php?id_produk=".$data['id_produk']; ?>"><button class="tbl-biru">Sewa</button></a>                 
            </div>
    <?php } ?>
    <br><br><br><br><br><br><br><br><br>
    <section id="footer">
    <?php include('footer.php');?>
    </section>
    </body>
</html>