<?php
include("koneksi.php"); 
$query = "update barang set nama_barang = '$_POST[nama_barang]', satuan = '$_POST[satuan]', 
harga_beli = '$_POST[harga_beli]', harga_jual = '$_POST[harga_jual]', jumlah_stok = '$_POST[jumlah_stok]', 
user_name = 'ADMIN', tgl_proses = now() where id_barang = '$_POST[id_barang]' ";
$result = mysql_query($query);

if ($result) {
	header("location:barang_tampil.php");
}
else {
	echo "proses simpan gagal !.";
}
?>
