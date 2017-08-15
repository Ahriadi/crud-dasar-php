<html>
<head>
<title>tambah barang</title>
</head>
<body>
<h2>TAMBAH BARANG</h2>
<form method="post" action="barang_tambah_query.php">
<table border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td>ID BARANG :</td>
    <td><input type="text" name="id_barang"></td>
  </tr>
  <tr>
    <td>NAMA BARANG :</td>
    <td><input type="text" name="nama_barang"></td>
  </tr>
  <tr>
    <td>SATUAN :</td>
    <td><input type="text" name="satuan"></td>
  </tr>
  <tr>
    <td>HARGA BELI :</td>
    <td><input type="text" name="harga_beli"></td>
  </tr>
  <tr>
    <td>HARGA JUAL :</td>
    <td><input type="text" name="harga_jual"></td>
  </tr>
  <tr>
    <td>JUMLAH STOK :</td>
    <td><input type="text" name="jumlah_stok"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="SIMPAN">
    <input type="button" value="BATAL" onClick="self.history.back();"></td>
  </tr>
</table>
</form>
</body>
</html>
