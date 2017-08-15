<?php
include ("koneksi.php");
$query = "select * from barang where id_barang = '$_GET[id]'";
$result = mysql_query($query);
$data = mysql_fetch_array($result);
?>

<html>
<head>
<title>ubah barang</title>
</head>
<body>
<h2>UBAH BARANG</h2>
<form method="post" action="barang_ubah_query.php">
<table border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td>NAMA BARANG :</td>
    <td><input type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>"></td>
  </tr>
  <tr>
    <td>SATUAN :</td>
    <td><input type="text" name="satuan" value="<?php echo $data['satuan']; ?>"></td>
  </tr>
  <tr>
    <td>HARGA BELI :</td>
    <td><input type="text" name="harga_beli" value="<?php echo $data['harga_beli']; ?>"></td>
  </tr>
  <tr>
    <td>HARGA JUAL :</td>
    <td><input type="text" name="harga_jual" value="<?php echo $data['harga_jual']; ?>"></td>
  </tr>
  <tr>
    <td>JUMLAH STOK :</td>
    <td><input type="text" name="jumlah_stok" value="<?php echo $data['jumlah_stok']; ?>"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="SIMPAN">
    <input type="button" value="BATAL" onclick="self.history.back();"></td>
  </tr>
</table>
<input type="hidden" name="id_barang" value="<?php echo $data['id_barang']; ?>" >
</form>
</body>
</html>
