<?php
include ("koneksi.php");
$query = "select * from barang";
$result = mysql_query($query);
$total = mysql_num_rows($result);
?>

<html>
<head>
<title>tampil barang</title>
</head>

<body>
<h2>DAFTAR BARANG</h2>
<p><a href="barang_tambah.php">TAMBAH</a></p>
<table border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td>ID BARANG</td>
    <td>NAMA BARANG</td>
    <td>SATUAN</td>
    <td>HARGA BELI</td>
    <td>HARGA JUAL</td>
    <td>JUMLAH STOK</td>
    <td>USER NAME</td>
    <td>TGL. PROSES</td>
    <td>PROSES</td>
  </tr>
  <?php while ($data = mysql_fetch_array($result)) { ?>
  <tr>
    <td><?php echo $data['id_barang']; ?></td>
    <td><?php echo $data['nama_barang']; ?></td>
    <td><?php echo $data['satuan']; ?></td>
    <td><?php echo $data['harga_beli']; ?></td>
    <td><?php echo $data['harga_jual']; ?></td>
    <td><?php echo $data['jumlah_stok']; ?></td>
    <td><?php echo $data['user_name']; ?></td>
    <td><?php echo $data['tgl_proses']; ?></td>
    <td><a href="barang_ubah.php?id=<?php echo $data['id_barang']; ?>">UBAH</a> | <a href="barang_hapus_query.php?id=<?php echo $data['id_barang']; ?>">HAPUS</td>
  </tr>
  <?php } ?>
</table>
<p>JUMLAH : <?php echo $total; ?> DATA</p>
</body>
</html>
