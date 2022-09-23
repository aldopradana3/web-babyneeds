<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styleheader.css">
    
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="menu" style="float:left">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="">Category</a>
                        <ul class="dropdown">
                            <li><a href="<?php echo "kategori.php?kategori=stroller" ?>">Stroller</a></li>
                            <li><a href="<?php echo "kategori.php?kategori=babybox" ?>">Baby Box</a></li>
                            <li><a href="<?php echo "kategori.php?kategori=babybathtub" ?>">Baby Bathtub</a></li>
                            <li><a href="<?php echo "kategori.php?kategori=toys" ?>">Toys</a></li>
                            <li><a href="<?php echo "kategori.php?kategori=carseat" ?>">Car Seat</a></li>
                            <li><a href="<?php echo "kategori.php?kategori=hipseat" ?>">Hip Seat</a></li>
                        </ul>
                    </li>
                    <li><a href="#footer">Contact</a></li>
                    <li><a href="pesanan.php">Penyewaan</a></li>
                </ul>
            </div>
                <div style="float:left; width:32%;">   
                    <img src = "resource/logo.png" style="width:180px; height :49px;float:right; margin-top:1.5%;margin-left:0%;margin-bottom:1.5%"> 
                </div>
            
                <div class="logout" style="float: right; padding: 0px 20px 0px 20px;">         
                <?php 
                if(isset($_SESSION['id'])){
                    echo $_SESSION['email'];
                }
                ?>
                    <a href="logout.php"><button class="buttonlogout button5">Logout</button></a>
                </div>     
        </div>
    </nav>