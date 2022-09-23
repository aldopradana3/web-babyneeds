<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
  margin-right: auto;
  margin-left: auto;
}

td, th {
  border: 1px solid #b69e9c;
  text-align: left;
  padding: 5px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<?php
    session_start();
    if(!isset($_SESSION["id"])){
        echo '<script>window.location="login.php"</script>';
    }
    include('koneksi.php');
    $nomor = 1;
?>

<?php include('header.php');?>
<br><br>
<h2 style="text-align: center;">Pesanan Saya</h2>
<br><br>
<table>
  <tr>
    <th>No</th>
    <th>User</th>
    <th>Produk</th>
    <th>Gambar</th>
    <th>Durasi</th>
    <th>Nominal</th>
    <th>Metode</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Nomor</th>
    <th>Email</th>
    <th>Note</th>
    <th>KTP</th>
    <th>Status</th>
    <th>Tgl Diambil</th>
    <th>Tgl Dikembalikan</th>
  </tr>
  <?php
      function rupiah($angka)
        {
            $hasil_rupiah = "Rp " . number_format($angka, 2, ",", ".");
            return $hasil_rupiah;
        }

    $id_user = $_SESSION['id'];
    $query = "SELECT * FROM transaksi WHERE id_user='$id_user'";
    $result = mysqli_query($koneksi,$query);

    while($row = mysqli_fetch_array($result)){
    $product_id = $row['id_produk'];
    $quer = "SELECT * FROM produk WHERE id_produk = '$product_id'";
    $data = $koneksi->query($quer)->fetch_assoc();

    $id_user = $row['id_user'];
    $quer_user = "SELECT * FROM user WHERE id = '$id_user'";
    $data_user = $koneksi->query($quer_user)->fetch_assoc();

    ?>
    
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data_user['nama']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><img src="admin/produk/<?php echo $data['foto']; ?>" style="width: 100px; padding-bottom: 20px;"></td>
        <td><?php echo $row['tipe']; ?></td>
        <td><?php echo rupiah($row['amount']); ?></td>
        <td><?php echo $row['metode']; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td><?php echo $row['nomor']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['note']; ?></td>
        <td><img src="uploads/<?php echo $row['ktp']; ?>" width="100px"></td>
        <td><?php echo $row['status']; ?></td>
        <td><?php echo $row['tgl_diambil']; ?></td>
        <td><?php echo $row['tgl_dikembalikan']; ?></td>
    </tr>
    <?php
    }
    ?>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<section id="footer">
<?php include('footer.php');?>
</section>
</body>
</html>

